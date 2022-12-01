<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankmessage extends Model
{
    use HasFactory;


    protected $guarded = [];



    public function messages()
    {
        return $this->belongsToMany(User::class, 'bankmessages', 'user_id', 'snedto_user_id');
    }

    public function user() {
        $send = Bankmessage::where('user_id', $this->id)->first();
        return User::where('id', $send->id)->first();
    }

}
