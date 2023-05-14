<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tur extends Model
{
    use HasFactory;
    protected $table = 'turs';

    public function adress()
    {
        return $this->belongsTo(Adress::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
