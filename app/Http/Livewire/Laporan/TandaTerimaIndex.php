<?php

namespace App\Http\Livewire\Laporan;

use App\Models\TandaTerima;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class TandaTerimaIndex extends Component
{
    use WithPagination;
    
    public $search;
    public $tanggal;
    public $limit = 20;

    public function render()
    {
        $dataTandaTerima = TandaTerima::select(
                        'ap_belitt.notasp as nota_sp',
                        'ap_belitt.tanggal',
                        'ap_belitt.nmkasir as petugas',
                        'ap_belitt.nmsuplier as nama_suplier',
                        'ap_belitt.idbarang as id_barang',
                        'ap_belitt.kd_barang',
                        'ap_belitt.nama_barang',
                        'ap_belitt.hrgnet1 as harga_netto_besar',
                        'ap_belitt.ppn1 as ppn',
                        'ap_belitt.hrgppn1 as harga_netto_ppn',
                        'ap_belitt.jmlbeli1 as jumlah_besar',
                        DB::raw("(ap_belitt.jmlhrgnet1 + (ap_belitt.jmlhrgnet1 * ap_belitt.ppn1 / 100)) as jumlah_harga_ppn"),
                        'ap_belitt.satuan1 as satuan_besar',
                        'ap_belitt.jmlharga1 as jumlah_harga_besar',
                        'ap_belitt.senpot1 as senpot',
                        'ap_belitt.potongan1 as potongan',
                        'ap_belitt.jmlhrgnet1 as jumlah_harga_besar_net', 
                        'ap_belitt.jmlisi as isi', 
                        'ap_belitt.jmlbeli as jumlah_kecil',
                        'ap_belitt.satuan as satuan_kecil',
                        'ap_belitt.notatt as nota_tt',
                        'ap_belitt.stsdifakturkan as status_faktur'
        ) 
        ->leftJoin('ap_beli2', 'ap_belitt.notasp','=', 'ap_beli2.notasp')
        ->pencarian($this->search)
        ->terbaru()
        ->paginate($this->limit);

        return view('livewire.laporan.tanda-terima-index', compact('dataTandaTerima'));
    }
}
