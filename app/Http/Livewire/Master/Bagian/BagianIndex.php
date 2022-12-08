<?php

namespace App\Http\Livewire\Master\Bagian;

use App\Models\BagianFarmasi;
use App\Models\Subunit;
use Livewire\Component;
use Livewire\WithPagination;

class BagianIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $limit = 10;
    public $search;
    public $depo;
    public $bagianFarmasi;
    public $ottPlatform = '';

    public $confirmationDelete = false;
    public $confirmationAdd = false;

    protected $listeners = [
        'getSubunit'
    ];

    protected $queryString = [
        'depo' => ['except' => false],
        'search' => ['except' => '']
    ];

    protected $rules = [
        'bagianFarmasi.kdbagian' => 'required|min:2',
        'bagianFarmasi.nmbagian' => 'required|min:5',
        'bagianFarmasi.kd_sub_unit' => 'required',
        'bagianFarmasi.status_apotik' => 'number',
    ];

    public function getSubunit($value)
    {
        $this->bagianFarmasi['kd_sub_unit'] = $value;
    }

    public function confirmDelete($id)
    {
        $this->confirmationDelete = $id;
    }

    public function confirmAdd()
    {
        $this->reset(['bagianFarmasi']);
        $this->confirmationAdd = true;
    }

    public function deleteDepo( BagianFarmasi $bagianFarmasi ) 
    {
        $bagianFarmasi->delete();
        $this->confirmationDelete = false;
    }

    public function saveDepo()
    {
        $this->validate();
        BagianFarmasi::create([
            "kdbagian" => $this->bagianFarmasi['kdbagian'],
            "nmbagian" => $this->bagianFarmasi['nmbagian'],
            "kd_sub_unit" => $this->bagianFarmasi['kd_sub_unit'],
            "status_apotik" => $this->bagianFarmasi['status_apotik'] ?? 0,
        ]);
        $this->confirmationAdd = false;
    }

    public function render()
    {
        $dataBagian = BagianFarmasi::select('kdbagian','nmbagian','status_apotik')->aktif($this->depo)->pencarian($this->search)->urut()->paginate($this->limit);
       return view('livewire.master.bagian.bagian-index', compact('dataBagian'));
    }
}
