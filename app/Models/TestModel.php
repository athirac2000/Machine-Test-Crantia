<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use HasFactory;
    protected $table='products';
    protected $primarykey='id';
    protected $fillable=['name','description','image'];
}
