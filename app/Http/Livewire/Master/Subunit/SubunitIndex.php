<?php

namespace App\Http\Livewire\Master\Subunit;

use App\Models\Subunit;
use Livewire\Component;
use Livewire\WithPagination;

class SubunitIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $limit = 10;
    public $search;

    public function render()
    {
        $dataSubunit = Subunit::pencarian($this->search)->paginate($this->limit);
        return view('livewire.master.subunit.subunit-index', compact('dataSubunit'));
    }
}
