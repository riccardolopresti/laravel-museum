<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    use HasFactory;

    public static function generateSlug($string) {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;

        $existing = Museum::where('slug', $slug)->first();
        $c = 1;
        while($existing) {
            $slug = $original_slug . '-' . $c;
            $existing = Museum::where('slug', $slug)->first();
            $c++;
        };
        return $slug;
    }
}
