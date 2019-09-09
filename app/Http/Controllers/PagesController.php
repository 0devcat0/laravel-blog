<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {
        $first = 'Arlene';
        $last = 'Blackwell';

        $full = $first . ' ' . $last;

        return view('pages.about')->withFullname($full);
    }

}
