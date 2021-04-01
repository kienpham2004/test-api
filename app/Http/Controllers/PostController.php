<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getall(){

        $data = DB::table('users')->get();

    }
}

