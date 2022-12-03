<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    use HasFactory;

    public function memebers() {
        return $this->hasMany(User::class);
    }

    public function isMember($user_id) {

        $user = User::where('id',$user_id)->where('society_id',$this->id)->first();


        if($user) {


            return true;
        }

        return false;
    }

    public function chef() {
        return $this->chef_dept_email;
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

}
