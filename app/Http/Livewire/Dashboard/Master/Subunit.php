<?php

namespace App\Http\Livewire\Dashboard\Master;

use App\Models\Subunit as AppSubunit;
use Livewire\Component;
use Livewire\WithPagination;

class Subunit extends Component
{
     use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $limit = 10;
    public $search;

    public function render()
    {
        $dataSubunit = AppSubunit::pencarian($this->search)->paginate($this->limit);
        return view('livewire.dashboard.master.subunit', compact('dataSubunit'));
    }
}
