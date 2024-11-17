<?php

namespace App\Livewire;

use Livewire\Component;
use Mary\Traits\Toast;

class ContactForm extends Component
{
    use Toast;

    public $name = '';
    public $email = '';
    public $phone = '';
    public $subject = '';
    public $message = '';

    public function save()
    {
        $this->success('Proceso exitoso', 'Hemos recibido tu mensaje, pronto recibirás una respuesta.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
