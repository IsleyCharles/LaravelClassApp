<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('author')->latest()->paginate(6); // Fetch latest blogs with author
        return view('blogs.index', compact('blogs'));
    }
        
    public function create()
    {
        return view('blogs.create');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);
    
        if (!auth()->check()) {
            return redirect()->route('blogs.index')->with('error', 'You must be logged in to post a blog.');
        }
    
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(), // Store the authenticated user's ID
            'author' => auth()->user()->name, // Ensure the author's name is saved
        ]);
    
        return redirect()->route('blogs.index')->with('success', 'Blog post created successfully!');
    }
    
}