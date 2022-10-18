<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function show(Tag $tag)
    {
        // dd($category);
        return view('tag.show',['tag' => $tag]);
    }



}
