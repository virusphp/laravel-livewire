<?php

namespace App\Http\Livewire\Pendaftaran\Rawatjalan;

use App\Models\RawatJalan;
use Livewire\Component;

class RawatjalanIndex extends Component
{
    public $search;
    public $limit = 25;

    public function render()
    {
        $rawatjalan = RawatJalan::select(
            'rawat_jalan.no_reg',
            'rawat_jalan.no_rm',
            'p.nama_pasien',
            'su.nama_sub_unit'
        )
        ->join('registrasi as r','rawat_jalan.no_reg','r.no_reg')
        ->join('pasien as p','rawat_jalan.no_rm','p.no_rm')
        ->join('sub_unit as su', 'rawat_jalan.kd_poliklinik', 'su.kd_sub_unit')
        ->pencarian($this->search)
        ->paginate($this->limit);
        return view('livewire.pendaftaran.rawatjalan.rawatjalan-index', compact('rawatjalan'));
    }
}
