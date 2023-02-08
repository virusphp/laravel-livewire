<?php

namespace App\Http\Livewire\Pasien;

use App\Models\Kabupaten;
use App\Models\Pasien;
use App\Models\Propinsi;
use App\Models\Registrasi;
use Livewire\Component;
use Livewire\WithPagination;

class PasienIndex extends Component
{
    use WithPagination;
    
    public $search;
    public $tanggal;
    public $limit = 20;

     // Model List
    public $riwayatPasien;

    public $selectedKabupaten = null;
    public $selectedKelamin = null;

    // MODAL
    public $showModalRiwayatPasien = false;

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

    public function getKelaminProperty()
    {
        $dataJenisKelamin = [
            '0' => 'Perempuan',
            '1' => 'Laki-laki'
        ];
        return $dataJenisKelamin;
    }

    public function getKabupatenProperty()
    {
        return Pasien::join('kelurahan as kel', 'pasien.kd_kelurahan', 'kel.kd_kelurahan')
                ->join('kecamatan as kec','kel.kd_kecamatan','kec.kd_kecamatan')
                ->join('kabupaten as kab', 'kec.kd_kabupaten','kab.kd_kabupaten')
                ->pluck('kab.nama_kabupaten as nama', 'kab.kd_kabupaten as id');
    }

    public function detailPasien($noRm)
    {
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
        ->pencarianLike($this->search)
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

     public function showDetailRm($noRm)
    {
        $now = now();
        $tglMulai = date_format(date_sub(date_create($now), date_interval_create_from_date_string('30 days')), 'Y-m-d');
        $riwayatPasien = Registrasi::select(
            'registrasi.no_reg',
            'registrasi.tgl_reg as tanggal_reg',
            'registrasi.jns_rawat as jenis_rawat',
            'cb.keterangan as cara_bayar',
            'registrasi.no_sjp as no_sep',
            'su.nama_sub_unit as nama_poliklinik',
            'sub.nama_sub_unit as nama_ruang',
        )
        ->join('cara_bayar as cb', 'registrasi.kd_cara_bayar', 'cb.kd_cara_bayar')
        ->leftJoin('rawat_jalan as rj', 'registrasi.no_reg','rj.no_reg')
        ->leftJoin('sub_unit as su', 'rj.kd_poliklinik','su.kd_sub_unit')
        ->leftJoin('rawat_inap as ri', 'registrasi.no_reg','ri.no_reg')
        ->leftJoin('tempat_tidur as tt', 'ri.kd_tempat_tidur','tt.kd_tempat_tidur')
        ->leftJoin('kamar as km', 'tt.kd_kamar','km.kd_kamar')
        ->leftJoin('sub_unit as sub', 'km.kd_sub_unit','sub.kd_sub_unit')
        ->where('registrasi.status_keluar', '!=', 2)
        ->where('registrasi.no_rm', $noRm)
        ->whereBetween('registrasi.tgl_reg', [$tglMulai, $now])
        ->orderBy('registrasi.tgl_reg', 'desc')
        ->get();
        if ($riwayatPasien->count() > 0) {
            $this->riwayatPasien = $riwayatPasien;
            $this->showModalRiwayatPasien = true;
        } else {
            $this->riwayatPasien = [];
            $this->showModalRiwayatPasien = true;
        }
        
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
        ->pencarianLike($this->search)
        ->pencarianByKab($this->selectedKabupaten)
        ->filterKelamin($this->selectedKelamin)
        ->whereNotIn('pasien.no_rm',['000000','000001'])
        ->join('kelurahan as kel', 'pasien.kd_kelurahan', 'kel.kd_kelurahan')
        ->join('kecamatan as kec', 'kel.kd_kecamatan', 'kec.kd_kecamatan')
        ->join('kabupaten as kab', 'kec.kd_kabupaten', 'kab.kd_kabupaten')
        ->join('propinsi as prop', 'kab.kd_propinsi', 'prop.kd_propinsi')
        ->paginate($this->limit);

        return view('livewire.pasien.pasien-index', compact('dataPasien'));
    }
}
