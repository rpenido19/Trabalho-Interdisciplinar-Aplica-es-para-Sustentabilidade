<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public static function dataTable($filters)
    {
        $query = News::select("id", "title", "author", "tags", "description", "published_at");
        return $query->get()->toArray();
    }

}
