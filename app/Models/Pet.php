<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'breed_id',
    ];

    protected $casts = [
        'date_of_birth' => 'timestamp',
    ];

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }
}
