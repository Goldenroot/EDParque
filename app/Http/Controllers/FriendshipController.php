<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendshipController extends Controller
{
    public function check($id)
    {
        if(Auth::user()->is_friends_with($id) === 1)
        {
            return [ "status" => "friends" ];
        }

        if(Auth::user()->has_pending_friend_request_from($id))
        {
            return [ "status" => "pending" ];
        }

        if(Auth::user()->has_pending_friend_request_sent_to($id))
        {
            return [ "status" => "waiting" ];
        }

        return [ "status" => 0 ];
    }

    public function add_friend($id)
    {
        return Auth::user()->add_friend($id);
    }

    public function accept_friend($id)
    {
        return Auth::user()->accept_friend($id);
    }

    public function friends_list($id){
        $user = User::where('id', $id)->first();

        return $user->friends();
    }

}
