<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class IndexController extends Controller
{
    public function index()
    {
        $news = News::all(); // Fetch all news records
        return view('news', compact('news')); // Pass data to the view
    }
}

