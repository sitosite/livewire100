<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $isSubmitted = false; // Variable adicional para verificar si el formulario fue enviado

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function submit()
    {
        $this->validate();

        // Aquí, en lugar de manejar un array $submit, simplemente establece $isSubmitted a true
        $this->isSubmitted = true;
        session()->flash('status', 'Your contact has been submitted successfully.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
