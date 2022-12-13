<?php

namespace App\Http\Livewire\Components;

use App\Models\Subunit;
use Livewire\Component;

class Select2 extends Component
{
    public $subunit;
    public $kodeSubunit;

     protected $listeners = ['updatedKodeSubunit'];

    public function mount()
    {
        $this->subunit = Subunit::select('kd_sub_unit','nama_sub_unit')->aktif()->urut()->get();
    }

    public function updateKodeSubunit($value)
    {
        $this->emitTo('master.bagian.bagian-index', 'getSubunit', $value);
    }

    public function render()
    {
        return view('livewire.components.select2');
    }

    public function updatedKodeSubunit($value)
    {
        $this->kodeSubunit = $value;
    }

}
