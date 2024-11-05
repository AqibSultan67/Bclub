<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Method to create a new ticket
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'reason_contact' => 'required',
            'subject' => 'required|max:64',
            'description' => 'required',
            'payment_address' => 'nullable|max:120',
        ]);

        // Create a new ticket
        $ticket = new Ticket();
        $ticket->reason_contact = $request->input('reason_contact');
        $ticket->subject = $request->input('subject');
        $ticket->description = $request->input('description');
        $ticket->payment_address = $request->input('payment_address');
        $ticket->user_id = Auth::id(); // Automatically fetch the user ID
        $ticket->status = 'open'; // Set default status to 'open'
        $ticket->save();

        // Notify the user and redirect to the ticket view page
        return redirect()->route('tickets.show', $ticket->id)->with('success', 'Your ticket has been created successfully!');
    }

    // Method to show ticket details along with comments
    public function show($id)
    {
        $ticket = Ticket::with(['comments.user'])->findOrFail($id);

        // Check if the authenticated user is the owner of the ticket
        if ($ticket->user_id !== Auth::id()) {
            return redirect()->route('login')->with('error', 'You are not authorized to view this ticket.');
        }

        return view('view', compact('ticket'));
    }

    // Method to list all tickets for the authenticated user
    public function index()
    {
        $user = Auth::user();
        $tickets = Ticket::where('user_id', $user->id)
            ->with(['comments' => function($query) {
                $query->latest()->first();
            }])->get();

        return view('tickets', compact('tickets'));
    }

    // Method to add a comment to a ticket
    public function comment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $ticket = Ticket::findOrFail($id);

        $comment = new Comment();
        $comment->ticket_id = $ticket->id;
        $comment->user_id = Auth::id(); // Get the current user ID
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect()->route('tickets.show', ['id' => $id])->with('success', 'Comment added successfully!');
    }

    public function markAsResolved($id)
    {
        $ticket = Ticket::findOrFail($id);

        // Check if the authenticated user is the owner of the ticket
        if ($ticket->user_id !== Auth::id()) {
            return redirect()->route('login')->with('error', 'You are not authorized to modify this ticket.');
        }

        // Mark the ticket as resolved and remove comments
        $ticket->status = 'resolved';
        $ticket->save();

        // Remove all comments related to the ticket
        Comment::where('ticket_id', $ticket->id)->delete();

        return redirect()->route('tickets.show', $ticket->id)->with('success', 'Ticket resolved.');
    }
}
