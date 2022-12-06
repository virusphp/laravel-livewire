<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BagianFarmasi extends Model
{
    use HasFactory;

    protected $connection = "sqlsrv";

    protected $table = "ap_bagian";

    protected $fillable = [
        'kdbagian','nmbagian','status_apotik'
    ];

    public function scopePencarian($query, $search)
    {
        return $query->when($search, function($q, $search) {
            $q->where('nama_sub_unit', 'like', "%{$search}%");
        });
    }

    public function scopeAktif($query)
    {
        return $query->where('status_apotik', '!=', null);
    }

    public function scopeUrut($query)
    {
        return $query->orderBy('kdbagian', 'asc');
    }

    public function statusLabel()
    {
        if ($this->status_apotik == 1) {
            return '<p class="text-indigo-600 bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">DEPO</p>';
        } else {
           return '<p class="text-red-500 bg-amber-500 hover:bg-amber-600 active:bg-amber-700 focus:outline-none focus:ring focus:ring-amber-300">ANFRAH</p>';
        }
    }

}
