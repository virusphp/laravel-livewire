<?php

namespace App\Http\Livewire\Casmix;

use App\Models\Registrasi;
use Livewire\Component;

class CodingIndex extends Component
{
    public $search;

    public $detailPasien = null;

    public function updatedSearch($search)
    {
        $dataPasien = Registrasi::select('registrasi.no_rm','registrasi.tgl_reg','registrasi.no_sjp as no_sep','p.nama_pasien', )
                        ->join('pasien as p', 'registrasi.no_rm','p.no_rm')
                        ->whereIn('registrasi.kd_penjamin', ['23', '24'])
                        ->where('registrasi.kd_cara_bayar',8)
                        ->where('registrasi.status_keluar','!=', 2)
                        ->when($search, function($q, $search) {
                            $q->where('registrasi.no_rm',$search)
                            ->orWhere('registrasi.no_sjp',$search);
                        })->get();
        
        $this->detailPasien = $dataPasien;
    }

    public function render()
    {
        return view('livewire.casmix.coding-index');
    }
}
