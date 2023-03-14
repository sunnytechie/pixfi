<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $table = 'posts';

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
 
        // Customize the data array...

        //Use this to remove fields from the index
        unset($array['id, created_at, updated_at']);
 
        return  [
            'title' => $this->title,
            'description' => $this->description,
        ];
    }
}
