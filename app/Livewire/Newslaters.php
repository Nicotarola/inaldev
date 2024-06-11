<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\newslaters AS RegNews;

class Newslaters extends Component
{

    public $email;


    public function render()
    {
        return view('livewire.newslaters');
    }

    function register()
    {
        try {
            $registro = new RegNews();
            $registro->email = strtolower($this->email); 
            $registro->save();
            $this->dispatch('listo');
        } catch (\Throwable $th) {
            $this->dispatch('listo');
        }
        $this->email = "";
    }

}
