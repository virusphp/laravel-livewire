<?php

namespace App\Http\Livewire\Pendaftaran\Rawatjalan;

use App\Models\AssesmentPelayanan;
use App\Models\FlagProsedur;
use App\Models\Penunjang;
use App\Models\RawatJalan;
use Livewire\Component;
use Livewire\WithPagination;

class RawatjalanIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search;
    public $tanggal;
    public $limit = 25;

    public $dpjp = false;
    public $lakaLantas = false;
    public $assesmentPelayanan = true;
    public $prosedure = false;

    public $pasien;
    public $penjamin;

    protected $listeners = ["setTanggal" => 'setDate'];

    public $confirmationCreateSep = false;

     protected $queryString = [
        'tanggal' => ['except' => false],
    ];

    public function mount()
    {
        $this->tanggal = date('Y-m-d');
    }

    protected $rules = [
        'pasien.no_reg' => 'required|min:5',
        'pasien.nama_pasien' => 'required',
        'pasien.no_ktp' => 'required',
        'pasien.tanggal_lahir' => 'required',
        'pasien.alamat' => 'required',
        'pasien.cara_bayar' => 'required',
        'pasien.kd_asal_pasien' => 'required',
        'pasien.asal_pasien' => 'required',
        'pasien.no_kartu' => 'required',
        'pasien.no_rm' => 'required',
        'pasien.tanggal_sep' => 'required',
        'pasien.no_rujukan' => 'required',
        'pasien.tujuan_poli' => 'required',
        'pasien.nama_poli' => 'required',
        'pasien.kd_faskes' => 'required',
        'pasien.nama_faskes' => 'required',
        'pasien.asal_faskes' => 'required',
    ];

    public function confirmCreateSep($noRegistrasi)
    {
        $data = RawatJalan::select(
                'r.no_reg',
                'p.nama_pasien',
                'p.nik as no_ktp',
                'p.tgl_lahir as tanggal_lahir',
                'p.alamat',
                'cb.keterangan as cara_bayar',
                'ap.keterangan as asal_pasien',
                'r.kd_asal_pasien',
                'pp.no_kartu',
                'r.no_rm',
                'r.tgl_reg as tanggal_sep',
                'p.no_telp',
                'r.status_keluar',
                'ru.kd_instansi',
                'pg.nama_pegawai',
                'pg.kode_dpjp',
                'su.kd_poli_dpjp',
                'su.nama_sub_unit',
        )
        ->join('registrasi as r', 'rawat_jalan.no_reg', '=', 'r.no_reg')
        ->join('pasien as p', 'r.no_rm', '=', 'p.no_rm')
        ->join('asal_pasien as ap', 'r.kd_asal_pasien', '=', 'ap.kd_asal_pasien')
        ->join('cara_bayar as cb', 'r.kd_cara_bayar', '=', 'cb.kd_cara_bayar')
        ->join('pegawai as pg', 'rawat_jalan.kd_dokter', 'pg.kd_pegawai')
        ->join('sub_unit as su', function ($join) {
            $join->on('rawat_jalan.kd_poliklinik', '=', 'su.kd_sub_unit');
        })
        ->join('penjamin_pasien as pp', function ($join) {
            $join->on('r.no_rm', '=', 'pp.no_rm')
                ->on('r.kd_penjamin', '=', 'pp.kd_penjamin');
        })
        ->leftJoin('rujukan as ru', 'r.no_reg', '=', 'ru.no_reg')
        ->leftJoin('sep_bpjs as sep', 'ru.no_reg', 'sep.no_reg')
        ->where('r.no_reg', '=', $noRegistrasi)
        ->first();

        $this->pasien = $data;
        $this->handlePeserta($this->pasien['no_kartu']);
        $this->confirmationCreateSep = true;
    }

    private function handlePeserta($no_kartu)
    {
        dd($no_kartu);
    }

    public function render()
    {
        // dd($this->tanggal);
        $dataProsedur = FlagProsedur::select('kode_flag_prosedur as kode', 'nama_flag_prosedur as nama')->get();
        $dataAssesmentPelayanan = AssesmentPelayanan::select('kode_assesment_pelayanan as kode', 'nama_assesment_pelayanan as nama')->get();
        $dataPenunjang = Penunjang::select('kode_penunjang as kode', 'nama_penunjang as nama')->get();
        $dataRawatJalan = RawatJalan::select(
            'rawat_jalan.no_reg',
            'rawat_jalan.no_rm',
            'p.nama_pasien',
            'su.nama_sub_unit',
            'cb.keterangan as cara_bayar',
            'r.status_keluar',
            'r.no_sjp as no_sep'
        )
        ->join('registrasi as r','rawat_jalan.no_reg','r.no_reg')
        ->join('pasien as p','rawat_jalan.no_rm','p.no_rm')
        ->join('sub_unit as su', 'rawat_jalan.kd_poliklinik', 'su.kd_sub_unit')
        ->join('cara_bayar as cb', 'r.kd_cara_bayar','cb.kd_cara_bayar')
        ->filter($this->tanggal)
        ->pencarian($this->search)
        ->orderBy('rawat_jalan.no_reg', 'asc')
        ->paginate($this->limit);

        return view('livewire.pendaftaran.rawatjalan.rawatjalan-index', compact('dataRawatJalan', 'dataProsedur', 'dataAssesmentPelayanan', 'dataPenunjang'));
    }

}