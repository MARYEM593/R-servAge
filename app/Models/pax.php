<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pax extends Model
{
    use HasFactory;
    protected $fillable = ['age'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
