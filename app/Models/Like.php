<?php

namespace App\Models;

use App\Thing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function things()
    {
        return $this->belongsTo(Thing::class);
    }

    public static function is_like($thing_id, $user_id)
    {
        $is_like = Like::where('user_id', $user_id)->where('thing_id', $thing_id)->first();

        if ($is_like == null) {
            return false;
        } else {
            return true;
        }
    }
}
