<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Book extends Model
{
    use HasFactory;

    protected $fillable=['title','body'];

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
