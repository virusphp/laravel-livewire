<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssesmentPelayanan extends Model
{
    use HasFactory;

    protected $connection = "sqlsrv";

    protected $table = "assesment_pelayanan_bpjs";

}
