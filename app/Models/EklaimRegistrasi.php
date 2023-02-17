<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EklaimRegistrasi extends Model
{
    use HasFactory;

    protected $connection = "sqlsrv";

    protected $table = "eklaim_registrasi_pasien";

    protected $primaryKey = "nomor_sep";

    protected $keyType = "string";

    // public $timestamps = false;

    protected $fillable = [
        'nomor_sep', 'nomor_kartu', 'nomor_rm', 'nama_pasien', 'tgl_lahir', 'gender', 'tgl_masuk'
    ];
}
