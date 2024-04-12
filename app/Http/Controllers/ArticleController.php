<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\bookmark;
use App\Models\Comment;
class ArticleController extends Controller
{
    public function show(Article $article)
    {
        return view('singlearticle',compact('article'));
    }
    public $comments;

    public function mount($articleId)
    {
        $this->comments = Comment::where('article_id', $articleId)->paginate(10);
    }

    public function bookmark(Article $article)
{
    $user = auth()->user();
    $bookmark = bookmark::where('user_id', $user->id)
                        ->where('article_id', $article->id)
                        ->first();

    if (!$bookmark) {
        // clicking once
        $article->increment('bookmarks');
        bookmark::create([
            'user_id' => $user->id,
            'article_id' => $article->id,
        ]);
        return response()->json(['message' => 'Article bookmarked successfully']);
    } else {
        //clicking again
        $article->decrement('bookmarks');
        $bookmark->delete();
        return response()->json(['message' => 'Bookmark removed']);
    }
}
}