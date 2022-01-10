<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    public $fillable = ['user_id', 'banner', 'about', 'location'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
