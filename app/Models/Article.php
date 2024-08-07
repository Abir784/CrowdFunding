<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Article extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function posted_by(){
        return $this->belongsTo(User::class,'added_by');
    }
}
