<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subunit extends Model
{
    use HasFactory;

    protected $connection = "sqlsrv";

    protected $primaryKey = "kd_sub_unit";

    protected $table = "sub_unit";

    public function scopePencarian($query, $search)
    {
        return $query->when($search, function($q, $search) {
            $q->where('nama_sub_unit', 'like', "%{$search}%");
        });
    }

    public function scopeAktif($query)
    {
        return $query->where('enabled', 1);
    }

    public function scopeUrut($query)
    {
        return $query->orderBy('kd_sub_unit', 'asc');
    }

    public function statusLabel()
    {
        if ($this->enabled == 1) {
            return '<p class="text-indigo-600 bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">AKTIF</p>';
        } else {
           return '<p class="text-red-500 bg-amber-500 hover:bg-amber-600 active:bg-amber-700 focus:outline-none focus:ring focus:ring-amber-300">NON AKTIF</p>';
        }
    }
}
