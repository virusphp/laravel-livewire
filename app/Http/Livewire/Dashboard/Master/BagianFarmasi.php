<?php

namespace App\Http\Livewire\Dashboard\Master;

use App\Models\BagianFarmasi as AppBagianFarmasi;
use Livewire\Component;
use Livewire\WithPagination;

class BagianFarmasi extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $limit = 10;
    public $search;

    public function render()
    {
        $dataBagian = AppBagianFarmasi::select('kdbagian','nmbagian','status_apotik')->aktif()->pencarian($this->search)->urut()->paginate($this->limit);
        return view('livewire.dashboard.master.bagian-farmasi', compact('dataBagian'));
    }
}
