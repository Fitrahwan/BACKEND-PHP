<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    use HasFactory;
    protected $table ='client';
    protected $primarykey ='id';
    public $timestamps = false;
    public $fillable = [
        'nama','telp'
    ];
}
