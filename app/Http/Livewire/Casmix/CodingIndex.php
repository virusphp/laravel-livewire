<?php

namespace App\Http\Livewire\Casmix;

use App\Models\EklaimRegistrasi;
use App\Models\Registrasi;
use App\Services\Kemkes\Eklaim\NewClaimService;
use App\Traits\Inacbg;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CodingIndex extends Component
{
    use Inacbg;

    public $search;
    public $limit = 10;

    public $detailPasien = null;
    public $detailKlaim = null;

    public function updatedSearch($search)
    {
        if (strlen($search) >= 6){

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

            if ($dataPasien->count() == 0) {
                $this->dispatchBrowserEvent('alert', ['type' => 'warning',  'message' => 'Data tidak di temukan!']); // TOASH
                $this->search = "";
            } else {
                $this->detailPasien = $dataPasien;
            }
            
        }
    }

    public function showDetailKlaim($noSep)
    {
        $data = $this->getDataClaim($noSep);
        $bridge = new NewClaimService();
        $dataClaim = json_decode($bridge->postNewClaim($data), true);
    
        if ($dataClaim['metadata']['code'] == 200) {
            $dataPasien = $this->handleNewClaim($data);
        } else if($dataClaim['metadata']['code'] == 400) {
            $dataPasien = $this->handleDuplicateClaim($data, $dataClaim);
        } 

        $saveLocal = EklaimRegistrasi::updateOrCreate($dataPasien);

        if ($saveLocal) {
            $dataRegistrasi = $this->getdataRegistrasi($noSep);
            dd($dataRegistrasi);
            $this->dataKlaim = 1;
        }
    }

    private function getdataRegistrasi($noSep)
    {
        return Registrasi::select(
                    'registrasi.no_sjp as nomor_sep',
                    'penjamin.no_kartu as nomor_kartu',
                    'registrasi.tgl_reg as tgl_masuk',
                    'pulang.tgl_pulang',
                     DB::raw("(CASE WHEN registrasi.jns_rawat = 1 THEN '2' ELSE '1' END) AS jenis_rawat"),
                     DB::raw("(CASE WHEN registrasi.jns_rawat = 1 THEN '3' ELSE registrasi.hak_kelas END) AS kelas_rawat"),
                    
        )
        ->leftJoin('pasien_pulang as pulang', function($join) {
            $join->on('registrasi.no_reg','pulang.no_reg')->on('registrasi.no_rm','pulang.no_rm');
        })
        ->join('penjamin_pasien as penjamin', function($join) {
            $join->on('registrasi.no_rm','penjamin.no_rm')->on('registrasi.kd_penjamin', 'penjamin.kd_penjamin');
        })
        ->where('registrasi.no_sjp', $noSep)
        ->first();
    }

    private function handleNewClaim($params)
    {
        $dataClaim = [
            'nomor_sep' => $params->nomor_sep,
            'nomor_kartu' => $params->nomor_kartu,
            'nomor_rm' => $params->nomor_rm,
            'nama_pasien' => $params->nama_pasien,
            'tgl_lahir' => $params->tgl_lahir,
            'gender' => $params->gender,
            'tgl_masuk' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
        return $dataClaim;
    }

    private function handleDuplicateClaim($params, $dataClaimDuplicate)
    {
        $dataClaim = [
            'nomor_sep' => $params->nomor_sep,
            'nomor_kartu' => $params->nomor_kartu,
            'nomor_rm' => $params->nomor_rm,
            'nama_pasien' => $params->nama_pasien,
            'tgl_lahir' => $params->tgl_lahir,
            'gender' => $params->gender,
            'tgl_masuk' => $dataClaimDuplicate['duplicate'][0]['tgl_masuk'],
        ];

        return $dataClaim;
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
