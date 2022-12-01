<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Messenger extends Component
{


    public function render()
    {



        $messages = Message::where('snedto_user_id' , Auth::user()->id)->get();


        return view('livewire.messenger',[
            'messages' => $messages

        ]);
    }


}
