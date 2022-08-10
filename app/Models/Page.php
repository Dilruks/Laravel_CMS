<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable =[
        'name',
        'description',
        'slug',
        'status',
        'archive',
        'sort'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','slug');
    }
}
