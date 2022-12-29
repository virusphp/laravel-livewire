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

    public function confirmCreateSep($noRegistrasi)
    {
        // dd($noRegistrasi);
        $this->confirmationCreateSep = true;
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
        ->paginate($this->limit);

        return view('livewire.pendaftaran.rawatjalan.rawatjalan-index', compact('dataRawatJalan', 'dataProsedur', 'dataAssesmentPelayanan', 'dataPenunjang'));
    }

}