<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function mysociety() {
        return $this->belongsTo(Society::class, 'society_id');
    }

    public function society() {
        return Society::where('chef_dept_email', $this->email)->first();
    }

    public function bank() {
        return $this->hasOne(Bank::class);
    }

    public function isBoss() {

        $user = Auth::user();


        if($user) {

            $boss = Bank::where('user_id',$user->id)->first();

            if ($boss) {
                return true;
            }
            return false;

        }
    }

    public function isBoss2($user) {


        if($user) {

            $boss = Bank::where('user_id',$user->id)->first();

            if ($boss) {
                return true;
            }
            return false;

        }
    }



    public function Cipher($ch, $key){
        if (!ctype_alpha($ch))
            return $ch;

        $offset = ord(ctype_upper($ch) ? 'A' : 'a');
        return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);

    }

    public function Encipher($input, $key){
        $output = "";

        $inputArr = str_split($input);
        foreach ($inputArr as $ch)
            $output .= $this->Cipher($ch, $key);

        return $output;
    }

    public function Decipher($input, $key){
        return $this->Encipher($input, 26 - $key);
    }


    public function anonymatsalaire() {
        return '<= ' . intval($this->salaire) + 1000;
    }


    public function anonymatzip() {
        return substr($this->zipcode, 0 ,2) .  '**';
    }

    public function anonymatregion() {
        return '*';
    }
}

