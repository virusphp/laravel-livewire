<?php

namespace App\Http\Livewire\Laporan;

use App\Models\FakturDetail;
use Livewire\Component;
use Livewire\WithPagination;

class FakturTerimaIndex extends Component
{
    use WithPagination;
    
    public $search;
    public $limit = 20;

    public function render()
    {
        $dataFakturTT = FakturDetail::select(
                    'notasp as nota_sp','tanggal','nmkasir as petugas','notabeli as nota_beli','nmsuplier as nama_suplier','nofaktur as no_faktur','kd_barang','nama_barang',
                    'hrgnet1 as harga_netto_besar','ppn1 as ppn','hrgppn1 as harga_netto_ppn','jmlbeli1 as jumlah_besar','satuan1 as satuan_besar',
                    'jmlharga1 as jumlah_harga_besar','senpot1 as senpot','potongan1 as potongan','jmlhrgnet1 as jumlah_harga_besar_net', 'jmlisi as isi', 'jmlbeli as jumlah_kecil',
                    'satuan as satuan_kecil','hrgnet as harga_netto_kecil','hrgjual as harga_jual','hrgppn as harga_jual_ppn', 'tglexp as tanggal_exp','nobatch as no_batch','stsfaktur as status_faktur'
                )
                ->pencarian($this->search)
                ->terbaru()
                ->paginate($this->limit);
        return view('livewire.laporan.faktur-terima-index', compact('dataFakturTT'));
    }
}
