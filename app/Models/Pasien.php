<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $connection = "sqlsrv";

    protected $table = "pasien";

    protected $primaryKey = "no_rm";

    protected $keyType = "string";

    public function rawatjalan()
    {
        return $this->belongsTo(RawatJalan::class, "no_rm", "no_rm");
    }

    public function scopePencarianLike($query, $search)
    {
        return $query->when($search, function($q, $search) {
            $q->where('nama_pasien', 'like', "%{$search}%");
        });
    }

    public function scopePencarianByKab($query, $kabupaten)
    {
        return $query->when($kabupaten, function($q, $kabupaten) {
            $q->where('kab.kd_kabupaten', '=', $kabupaten);
        });
    }

    public function scopeFilterKelamin($query, $kelamin)
    {
        return $query->when($kelamin, function($q, $kelamin) {
            $q->where('jns_kel', '=', $kelamin);
        });
    }
}
