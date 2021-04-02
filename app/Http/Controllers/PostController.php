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

//        $a = DB::table('users')->where('user_name', 'kienpham')->get();
//        foreach ($a as $item){
//            echo $item->email;
//        }

//        $users = DB::table('users')->pluck('email', 'user_name' );
//        foreach ($users as $key=>$item){
//            echo $key;
//            echo '</br>';
//        }
//        $query = DB::table('users')->select('user_name');
//        $users = $query->addSelect('phone')->get();
//        dd($users);

        $users = DB::table('users')->leftJoin('posts', 'users.id', '=', 'posts.user_id')->get();
        dd($users);
    }
}

