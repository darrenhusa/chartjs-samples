<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Datatable extends Component
{
    public $perPage = 10;

    public function render()
    {
        $users = \App\User::paginate($this->perPage);

        return view('livewire.datatable', compact('users'));
    }
}
