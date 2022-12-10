<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Socio;

class EditSocios extends Component
{
    public $socio;
    public $open = false;

    protected $rules = [
        'socio.nombres' => 'required',
        'socio.apellidos' => 'required',
        'socio.direction' => 'required',
        'socio.edad' => 'required',
        'socio.estado' => 'required',
        'socio.dni' => 'required',
        'socio.celular' => 'required',
        'socio.genero' => 'required'
    ];

    public function mount(Socio $socio) {
        $this->socio = $socio;
    }

    public function save() {
        $this->validate();
        $this->socio->save();
        $this->reset(['open']);
        $this->emitTo('show-socios', 'render');
        $this->emit('alert', 'El post se actualizó satisfactoriamente');
    }

    public function render()
    {
        return view('livewire.edit-socios');
    }
}