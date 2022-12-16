<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakturDetail extends Model
{
    use HasFactory;

    protected $connection = "sqlsrv";

    protected $table = "ap_beli2";

    protected $primaryKey =  "noidgdg";

    public function scopePencarian($query, $search)
    {
        return $query->when($search, function($q, $search) {
            $q->where('nofaktur', 'like', "{$search}%")
            ->orWhere('notasp','=', $search);
        });
    }

    public function scopeTerbaru($query)
    {
        return $query->orderBy('tanggal', 'desc');
    }

}
