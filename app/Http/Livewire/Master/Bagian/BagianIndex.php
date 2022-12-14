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
    public $sortBy = 'kdbagian';
    public $sortAsc = true;
    public $statusAktif;
    public $subunit;

    public $confirmationDelete;
    public $confirmationAdd = false;

    protected $listeners = [
        'getSubunit'
    ];

    protected $queryString = [
        'depo' => ['except' => false],
        'search' => ['except' => ''],
        'sortBy' => ['except' => 'kdbagian'],
        'sortAsc' => ['except' => true],
    ];

    protected $rules = [
        'bagianFarmasi.nmbagian' => 'required|min:5',
        'bagianFarmasi.kd_sub_unit' => 'required',
        'bagianFarmasi.status_apotik' => 'boolean',
    ];

    public function sortBy($field)
    {
        if ($field == $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $field;
    }

    public function mount()
    {
        $this->subunit = Subunit::select('kd_sub_unit','nama_sub_unit')->aktif()->urut()->get();
    }

    public function updatingDepo()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getSubunit($value)
    {
        if (!$value) {
            $this->bagianFarmasi['kd_sub_unit'] = $value;
        }
    }

    public function confirmDelete($kdbagian)
    {
        $this->confirmationDelete = $kdbagian;
    }

    public function confirmAdd()
    {
        $this->reset(['bagianFarmasi']);
        $this->confirmationAdd = true;
    }

    public function confirmEdit(BagianFarmasi $bagianFarmasi)
    {
        $bagianFarmasi->status_apotik = $bagianFarmasi->status_apotik == "1" ? true : false;;
        // $this->emitTo('components.select2', 'updatedKodeSubunit', $bagianFarmasi->kd_sub_unit);
        $this->bagianFarmasi = $bagianFarmasi;
        dd($this->bagianFarmasi);
        $this->confirmationAdd = true;
    }

    public function deleteDepo( BagianFarmasi $bagianFarmasi ) 
    {
        $bagianFarmasi->delete();
        $this->confirmationDelete = false;
        session()->flash('message', 'Unit Bagian Farmasi Berhsil di dihapus');
        $this->dispatchBrowserEvent('alert', ['type' => 'info',  'message' => 'Unit Bagian Farmasi Berhsil dihapus!']); // TOASH
    }

    public function saveDepo()
    {
        // dd($this->bagianFarmasi);
        $this->validate();
        if ( isset($this->bagianFarmasi->kdbagian)) {
            $this->bagianFarmasi->save();
            $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Unit Bagian Farmasi Berhsil di simpan!']); // TOASH
        } else {
            BagianFarmasi::create([
                "kdbagian" => $this->getAutomatedCode(),
                "nmbagian" => $this->bagianFarmasi['nmbagian'],
                "kd_sub_unit" => $this->bagianFarmasi['kd_sub_unit'],
                "status_apotik" => $this->statusApotik ?? 0,
            ]);
            $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'nit Bagian Farmasi Berhsil di tambah!']); // TOASH
        }
        $this->confirmationAdd = false;
    }

    private function getAutomatedCode()
    {
        $prefix = "BAG";
        $maxNumber = BagianFarmasi::maxNumber($prefix)->max('kdbagian');
        if(!$maxNumber) {
            $start = 1;
            $noUrut = $prefix . sprintf("%04s", $start);

            return $noUrut;
        }

        $noUrut = (int) substr(trim($maxNumber), -4);
        $noUrut++;
        $newNoUrut = $prefix. sprintf("%04s", $noUrut);
        return $newNoUrut;
    }

    public function render()
    {
        $dataBagian = BagianFarmasi::select('kdbagian','nmbagian','status_apotik')
            ->aktif($this->depo)
            ->pencarian($this->search)
            ->urut($this->sortBy, $this->sortAsc)
            ->paginate($this->limit);
       return view('livewire.master.bagian.bagian-index', compact('dataBagian'));
    }
}
