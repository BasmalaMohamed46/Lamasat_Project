<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_id',
        'title',
        'description',
        'finished_at',
        'duration',
        'admin_id',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function projectPhotos()
    {
        return $this->hasMany(ProjectPhoto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
