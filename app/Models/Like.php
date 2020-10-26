<?php

namespace App\Models;

use App\Thing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function things()
    {
        return $this->belongsTo(Thing::class);
    }
}
