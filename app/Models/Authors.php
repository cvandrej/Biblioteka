<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;
    protected $table = "Authors";

    public function knigi(){
        return $this->belongsToMany(Books::class, 'book_has_Authors', 'Authors_id', 'book_id');
    }
}
