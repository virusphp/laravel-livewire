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
            $q->where('rawat_jalan.no_rm', 'like', "%{$search}%");
        });
    }
}
