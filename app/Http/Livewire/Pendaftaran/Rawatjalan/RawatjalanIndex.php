<?php

namespace App\Http\Livewire\Pendaftaran\Rawatjalan;

use App\Models\RawatJalan;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class RawatjalanIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search;
    public $tanggal;
    public $limit = 25;

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
        $rawatjalan = RawatJalan::select(
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

        return view('livewire.pendaftaran.rawatjalan.rawatjalan-index', compact('rawatjalan'));
    }

}