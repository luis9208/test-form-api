<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'active',
        'email'
    ];

    public function scopeDisablePrevious($query, $id) {
        $query->all()->except($id);
    }
}
