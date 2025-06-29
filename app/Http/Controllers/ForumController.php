<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::all();
        return view('forum', compact('forums'));
    }

    public function detail($id)
    {
        $forum = Forum::find($id);
        $comments = Forum::with([
            'comments' => function ($query) {
                $query->orderBy('created_at', 'desc'); // Terbaru dulu
            },
            'comments.user'
        ])->findOrFail($id);
        $totalComment = $comments->comments->count();
        return view('forum-detail', [
            'forum' => $forum,
            'comments' => $comments,
            'totalComment' => $totalComment
        ]);
    }

    public function saveComment(Request $request)
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:500',
            'forum_id' => 'required|exists:forum,id',
        ]);

        Comment::create([
            'forum_id' => $validated['forum_id'],
            'user_id' => Auth::id(), // <- dari user yang login
            'comment_text' => $validated['comment'],
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
    }
}
