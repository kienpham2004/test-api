<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use Stevebauman\Location\Facades\Location;
use Stevebauman\Location\Location as LocationLocation;

class PostController extends Controller
{
    public function getpost()
    {
        // $listUser = Post::with('users')->get();
        // $post = Post::find(1);
        // $arr = [];
        // foreach($post->users as $item){
        //     echo '<pre>';
        //     array_push($arr, $item->pivot);
        //     echo '</pre>';
        // }

        // print_r($arr);
        $ip = request()->ip();
        // dd($ip);
        $data = Location::get();
        dd($data);
        
        // return $item;
        // return $users = $post->users()->attach(5);
        // // $user = User::find(1);
        // // return $user->posts()->detach(1);
    }

    public function addPost()
    {
        return Post::create([
            'user_id' => 1,
            'content' => 'ashdj',
        ]);
    }

    public function addToTable()
    {

    }
}
