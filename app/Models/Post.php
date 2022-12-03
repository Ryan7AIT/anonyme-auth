<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];


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
}
