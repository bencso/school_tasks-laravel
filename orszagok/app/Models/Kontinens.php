<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kontinens extends Model
{
    use HasFactory;
    protected $table = "kontinens";
    public $timestamps = false;
    public $primaryKey = "kontinens_id";

    public function orszagok()
    {
        return $this->hasMany(Orszag::class, 'kontinens_id');
    }
}
