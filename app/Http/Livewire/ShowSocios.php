<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Socio;

class ShowSocios extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    protected $listeners = ['render', 'delete'];

    public function render()
    {
        $socios = Socio::where('nombres', 'like', '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->get();
        return view('livewire.show-socios', compact('socios'));
    }

    public function order($sort) {
        if ($this->sort == $sort) {
           if ($this->direction == 'desc') {
                $this->direction = 'asc';
           } else {
                $this->direction = 'desc';
           }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function delete(Socio $socio) {
        $socio->delete();
    }
}
