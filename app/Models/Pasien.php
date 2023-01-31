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

    public function scopePencarian($query, $search)
    {
        return $query->when($search, function($q, $search) {
            $q->where('nama_pasien', 'like', "%{$search}%");
        });
    }
}
