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

    public $pasien;

    protected $rules = [
        'pasien.*' => 'string',
    ];

    // MODAL
    public $showModalPasien = false;

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function detailPasien($noRm)
    {
        // dd(trim($noRm));
        $data = Pasien::select(
            'pasien.no_rm',
            'pasien.tgl_rm as tanggal_rm',
            'pasien.nama_pasien',
            'pasien.tempat_lahir',
            'pasien.tgl_lahir as tanggal_lahir',
            'pasien.jns_kel as jenis_kelamin',
            'pasien.alamat',
            'pasien.rt',
            'pasien.rw',
            'kel.nama_kelurahan as kelurahan',
            'kec.nama_kecamatan as kecamatan',
            'kab.nama_kabupaten as kabupaten',
            'prop.nama_propinsi as propinsi',
            'ag.nama_agama as agama',
            'pek.nama_pekerjaan as pekerjaan',
            'pend.nama_pendidikan as pendidikan',
            'pasien.no_telp',
            'pasien.status_kawin',
            'pasien.nik'
        )
        ->pencarian($this->search)
        ->whereNotIn('pasien.no_rm',['000000','000001'])
        ->join('kelurahan as kel', 'pasien.kd_kelurahan', 'kel.kd_kelurahan')
        ->join('kecamatan as kec', 'kel.kd_kecamatan', 'kec.kd_kecamatan')
        ->join('kabupaten as kab', 'kec.kd_kabupaten', 'kab.kd_kabupaten')
        ->join('propinsi as prop', 'kab.kd_propinsi', 'kab.kd_propinsi')
        ->join('agama as ag', 'pasien.kd_agama', 'ag.kd_agama')
        ->join('pekerjaan as pek', 'pasien.kd_pekerjaan', 'pek.kd_pekerjaan')
        ->join('pendidikan as pend', 'pasien.kd_pendidikan', 'pend.kd_pendidikan')
        ->first();

        $this->pasien = $data;
        $this->pasien['tanggal_rm'] = tanggalFormat($data->tanggal_rm);
        $this->pasien['rt'] = $data->rt ?? "-";
        $this->pasien['rw'] = $data->rw ?? "-";
        // dd($this->pasien);
        $this->showModalPasien = true;
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
