<?php

namespace App\Traits;

use App\Models\Friendship;
use App\Models\User;
use http\Env\Response;
use Illuminate\Database\Eloquent\Model;

trait Friendable{

    public function add_friend($user_requested_id){

        if($this->id === $user_requested_id){

            return 0;

        }

        if($this->is_friends_with($user_requested_id) === 1){

            return "Já são amigos";

        }

        if($this->has_pending_friend_request_sent_to($user_requested_id) === 1){

            return "Já enviaste um pedido";

        }

        if($this->has_pending_friend_request_from($user_requested_id) === 1){

            return $this->accept_friend($user_requested_id);

        }

        $friendship = Friendship::create([
           'requester' => $this->id,
            'user_requested' => $user_requested_id,
        ]);

        if($friendship){

            return response()->json('ok', 200);

        }

        return response()->json('fail', 501);
    }

    public function accept_friend($requester){

        if($this->has_pending_friend_request_from($requester) === 0){
            return 0;
        }

        $friendship = Friendship::where('requester', $requester)
            ->where('user_requested', $this->id)
            ->first();

        if($friendship){
            $friendship->update([
               'status' => 1
            ]);

            return response()->json('ok', 200);
        }

            return response()->json('fail', 501);
    }

    public function friends(){

        $friends = array();

        $f1 = Friendship::where('status', 1)
            ->where('requester', $this->id)
            ->get();

        $friends2 = array();

        $f2 = Friendship::where('status', 1)
            ->where('user_requested', $this->id)
            ->get();

        foreach($f2 as $friendship):
            array_push($friends2, Model::find($friendship->requester));
        endforeach;

        return array_merge($friends, $friends2);
    }

    public function pending_friend_requests(){

        $users = array();

        $friendships = Friendship::where('status', 0)
            ->where('user_requested', $this->id)
            ->get();

        foreach($friendships as $friendship):
            array_push($users, User::find($friendships->requester));
        endforeach;

        return $users;
    }

    public function pending_friend_requests_sent(){

        $users = array();

        $friendships = Friendship::where('status', 0)
            ->where('requester', $this->id)
            ->get();

        foreach ($friendships as $friendship):
            array_push($users, User::find($friendship->user_requested));
        endforeach;

        return $users;
    }

    public function pending_friends_requests_sent_ids(){

        return collect($this->pending_friend_requests_sent())->pluck('id')->toArray();

    }

    public function pending_friends_requests_ids(){

        return collect($this->pending_friend_requests())->pluck('id')->toArray();

    }

    public function has_pending_friend_request_sent_to($user_id){

        if(in_array($user_id, $this->pending_friends_requests_sent_ids())){
            return 1;
        }else{
            return 0;
        }

    }

    public function has_pending_friend_request_from($user_id){
        if(in_array($user_id, $this->pending_friends_requests_ids())){
            return response()->json('true', 200);
        }else{
            return reponse()->json('false', 200);
        }
    }

    public function friends_id(){

        return collect($this->friends())->pluck('id');

    }

    public function is_friends_with($user_id){

        if(in_array($user_id, $this->friends_id()->toArray())){
            return response()->json('true', 200);
        }
        else{
            return response()->json('false', 200);
        }

    }
}
