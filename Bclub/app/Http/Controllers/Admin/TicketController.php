<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Comment;
use App\Notifications\TicketCommentNotification;


class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::paginate(10);
        return view('admin.tickets.index', compact('tickets'));
    }

    public function show($id)
    {
        $ticket = Ticket::with('comments')->findOrFail($id);
        return view('admin.tickets.show', compact('ticket'));
    }

    public function comment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $ticket = Ticket::findOrFail($id);

        $comment = new Comment();
        $comment->ticket_id = $ticket->id;
        $comment->admin_id = auth()->guard('admin')->id(); // Admin ID
        $comment->comment = $request->input('comment');
        $comment->save();

        // Send notification to the user
        $user = $ticket->user; // Assuming user relationship is defined
        if ($user) {
            $user->notify(new TicketCommentNotification($comment));
        }

        return redirect()->route('admin.tickets.show', ['id' => $id])->with('success', 'Comment added successfully!');
    }

    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->route('admin.tickets.index')->with('success', 'Ticket deleted successfully!');
    }
}
