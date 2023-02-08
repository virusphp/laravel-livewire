<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $connection = "sqlsrv";

    protected $table = "registrasi";

    protected $primaryKey = "no_reg";

    protected $keyType = "string";
}
