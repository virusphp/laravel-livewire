<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TandaTerima extends Model
{
    use HasFactory;

    protected $connection = "sqlsrv";

    protected $table = "ap_belitt";

    public function scopePencarian($query, $search)
    {
        return $query->when($search, function($q, $search) {
            $q->orWhere('ap_belitt.notasp','=', $search);
        });
    }

    public function scopeTerbaru($query)
    {
        return $query->orderBy('tanggal', 'desc');
    }
}
