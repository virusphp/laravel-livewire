<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatJalan extends Model
{
    use HasFactory;

    protected $connection = "sqlsrv";

    protected $table = "rawat_jalan";

    protected $primaryKey = "no_reg";

    protected $keyType = "string";


    public function pasien()
    {
        return $this->hasOne(Pasien::class, "no_rm", "no_rm");
    }

    public function scopePencarian($query, $search)
    {
        return $query->when($search, function($q, $search) {
            $q->where('p.nama_pasien', 'like', "%{$search}%")
                ->orWhere('rawat_jalan.no_rm', 'like', "%{$search}%");
        });
    }

    public function scopeFilter($query, $tanggal)
    {
        return $query->when($tanggal, function($q, $tanggal) {
            $q->whereDate('rawat_jalan.waktu_anamnesa', $tanggal);
        });
    }
}
