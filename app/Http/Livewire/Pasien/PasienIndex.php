<?php

namespace App\Http\Livewire\Pasien;

use App\Models\Pasien;
use Livewire\Component;
use Livewire\WithPagination;

class PasienIndex extends Component
{
    use WithPagination;
    
    public $search;
    public $tanggal;
    public $limit = 20;

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $dataPasien = Pasien::select(
            'pasien.no_rm',
            'pasien.nama_pasien',
            'pasien.tempat_lahir',
            'pasien.tgl_lahir as tanggal_lahir',
            'pasien.jns_kel as jenis_kelamin',
            'pasien.alamat',
            'pasien.rt',
            'pasien.rw',
            'kel.nama_kelurahan',
            'kec.nama_kecamatan',
            'kab.nama_kabupaten',
            'pasien.no_telp',
            'pasien.status_kawin',
            'pasien.nik'
        )
        ->pencarian($this->search)
        ->whereNotIn('pasien.no_rm',['000000','000001'])
        ->join('kelurahan as kel', 'pasien.kd_kelurahan', 'kel.kd_kelurahan')
        ->join('kecamatan as kec', 'kel.kd_kecamatan', 'kec.kd_kecamatan')
        ->join('kabupaten as kab', 'kec.kd_kabupaten', 'kab.kd_kabupaten')
        // ->join('propinsi as prop', 'kab.kd_propinsi', 'kab.kd_propinsi')
        ->paginate($this->limit);

        return view('livewire.pasien.pasien-index', compact('dataPasien'));
    }
}
