<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Socio;

class CreateSocios extends Component
{
    public $open = false;
    public $nombres, $apellidos, $direction, $edad, $estado, $dni, $celular, $genero;
    protected $rules = [
        'nombres' => 'required|max:50',
        'apellidos' => 'required|min:5',
        'direction' => 'required',
        'edad' => 'required',
        'estado' => 'required|max:1',
        'dni' => 'required|max:8',
        'celular' => 'required|max:9',
        'genero' => 'required|max:1',
    ];

    public function render()
    {
        return view('livewire.create-socios');
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function save() {
        $this->validate();
        Socio::create([
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'direction' => $this->direction,
            'edad' => $this->edad,
            'estado' => $this->estado,
            'dni' => $this->dni,
            'celular' => $this->celular,
            'genero' => $this->genero,
        ]);

        $this->reset(['open', 'nombres', 'apellidos', 'direction', 'edad', 'estado', 'dni', 'celular', 'genero']);
        $this->emit('render');
        /* $this->emit('alert', 'Este es un titulo de prueba'); */
    }
}
