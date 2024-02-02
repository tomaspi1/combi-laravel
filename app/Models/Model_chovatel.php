<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Model_chovatel extends Model
{
    use HasFactory;

    protected $fillable = ["jmeno", "email", "plat"];
    protected $table = 'chovatel';
    protected $primaryKey = 'id';
}
