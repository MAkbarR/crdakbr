<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\User;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(): View
    {
        //get posts
        $users = User::latest()->paginate(5);

        //render view with posts
        return view('users.index', compact('users'));
    }

}
