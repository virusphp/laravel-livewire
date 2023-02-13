<?php

namespace App\Http\Livewire\Casmix;

use App\Models\Registrasi;
use App\Services\Kemkes\Eklaim\NewClaimService;
use App\Traits\Inacbg;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CodingIndex extends Component
{
    use Inacbg;

    public $search;

    public $detailPasien = null;

    public function updatedSearch($search)
    {
        $dataPasien = Registrasi::select(
                            'registrasi.no_rm',
                            'registrasi.tgl_reg',
                            'registrasi.no_sjp as no_sep',
                            'p.nama_pasien' 
                        )
                        ->join('pasien as p', 'registrasi.no_rm','p.no_rm')
                        ->whereIn('registrasi.kd_penjamin', ['23', '24'])
                        ->where('registrasi.kd_cara_bayar',8)
                        ->whereRaw('LEN(registrasi.no_sjp) = 19')
                        ->where('registrasi.status_keluar','!=', 2)
                        ->where(function($q) use ($search) {
                            $q->where('registrasi.no_rm',$search)
                            ->orWhere('registrasi.no_sjp',$search);
                        })
                        ->orderBy('registrasi.tgl_reg', 'desc')
                        ->get();
        // dd($dataPasien);
        
        $this->detailPasien = $dataPasien;
    }

    public function showDetailKlaim($noSep)
    {
        $data = $this->getDataClaim($noSep);
        $bridge = new NewClaimService();
        $dataClaim = $bridge->postNewClaim($data);
    }

    public function render()
    {
        return view('livewire.casmix.coding-index');
    }

    protected function getDataClaim($noSep)
    {
        $dataClaim = Registrasi::select(
                            'pp.no_kartu as nomor_kartu',
                            'registrasi.no_sjp as nomor_sep',
                            'registrasi.no_rm as nomor_rm',
                            'p.nama_pasien',
                            'p.tgl_lahir',
                            DB::raw("(CASE WHEN p.jns_kel = 0 THEN '1' ELSE '2' END) AS gender")
                        )
                        ->join('penjamin_pasien as pp',function($join) {
                            $join->on('registrasi.no_rm','pp.no_rm')
                                    ->on('registrasi.kd_penjamin','pp.kd_penjamin');
                        })
                        ->join('pasien as p','registrasi.no_rm','p.no_rm')
                        ->where('registrasi.no_sjp', $noSep)
                        ->first();

        return $dataClaim;
    }
}
