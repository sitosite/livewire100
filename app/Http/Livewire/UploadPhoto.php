<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UploadPhoto extends Component
{
    use WithFileUploads;

    public $photo;
    public $url;
    public $isSubmitted = false; // Variable adicional para verificar si el formulario fue enviado

    public function save()
    {
        $this->validate([
            'photo' => 'required|image|max:1024',
        ]);

        // Obtener el nombre original del archivo
        $fileName = $this->photo->getClientOriginalName();

        // Guardar el archivo en el disco 'public'
        $path = $this->photo->storeAs('photos', $fileName, 'public');

        // Obtener la URL del archivo
        $this->url = Storage::disk('public')->url($path);
        $this->isSubmitted = true;
        session()->flash('status', 'Photo successfully uploaded.');
    }
}
