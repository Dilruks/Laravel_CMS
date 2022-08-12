<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    use HasFactory;

    protected $tabel = 'widgets';

    protected $fillable = [
        
        'name',
        'description',
        'slug',
        'type',
        'image_id',
        'status',
        'archive',
        'sort'
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','slug');
    }

}
