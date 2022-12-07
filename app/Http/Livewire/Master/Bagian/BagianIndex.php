<?php

namespace App\Http\Livewire\Master\Bagian;

use App\Models\BagianFarmasi;
use Livewire\Component;
use Livewire\WithPagination;

class BagianIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $limit = 10;
    public $search;
    public $depo;

    public $confirmationDelete = false;
    public $confirmationAdd = false;

    protected $queryString = [
        'depo' => ['except' => false],
        'search' => ['except' => '']
    ];

    protected $rules = [
        'barangfarmasi.kdbagian' => 'required|string|min:2',
        'barangfarmasi.nmbagian' => 'required|string|min:5',
        'barangfarmasi.kd_sub_unit' => 'required',
        'barangfarmasi.status_apotik' => 'required',
    ];

    public function confirmDelete($id)
    {
        $this->confirmationDelete = $id;
    }

    public function confirmAdd()
    {
        $this->confirmationAdd = true;
    }

    public function deleteDepo( BagianFarmasi $bagianFarmasi ) 
    {
        $bagianFarmasi->delete();
        $this->confirmationDelete = false;
    }

    public function saveDepo()
    {

    }

    public function render()
    {
        $dataBagian = BagianFarmasi::select('kdbagian','nmbagian','status_apotik')->aktif($this->depo)->pencarian($this->search)->urut()->paginate($this->limit);
       return view('livewire.master.bagian.bagian-index', compact('dataBagian'));
    }
}
