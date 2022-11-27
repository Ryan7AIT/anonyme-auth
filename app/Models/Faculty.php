<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function memebers() {
        return $this->hasMany(User::class);
    }

    public function isMember($user_id) {

        $user = User::where('id',$user_id)->where('faculty_id',$this->id)->first();


        if($user) {


            if($user->status == 'approved') {
                return true;
            } else {
                return false;
            }
        }
    }

    public function chef() {
        return $this->chef_dept_email;
    }
}
