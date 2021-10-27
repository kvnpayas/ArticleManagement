<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $table = 'articles';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'article', 'user_id', 'image_path'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
