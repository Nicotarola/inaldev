<?php

namespace App\Livewire\Contactanos;

use Livewire\Component;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
// use App\Models\newslaters;

class Footer extends Component
{

    public $name;
    public $phone;
    public $email;
    public $msg;

    public function render()
    {
        return view('livewire.contactanos.footer');
    }

    function send_email()
    {
        $name = $this->name;
        $phone = $this->phone;
        $email = $this->email;
        $msg = $this->msg;

        if($name == "" OR $phone == "" OR $email == "" OR $msg == ""){
            $this->dispatch('error-empty');
            return false;
        }


        // ? send email
        $email_trimp = trim(strtolower($email));


        // ? cliente
        $correo =  new ContactanosMailable($name, $email, $phone, $msg);
        Mail::to($email)->send($correo);
        // ?admin
        $correo =  new ContactanosMailable($name, $email, $phone, $msg);
        Mail::to($email)->send($correo);


        $this->dispatch('success-email');
        $this->clean();
        return false;
    }

    function clean()
    {
        $this->reset(['name', 'phone', 'email', 'msg']);
    }


}
