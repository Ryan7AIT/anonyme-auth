<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Discution extends Component
{

    public $msgs;


    public function render()
    {

        return view('livewire.discution');
    }
}
