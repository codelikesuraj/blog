<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query
                ->where('title', 'like', '%'.strtolower($search).'%')
                ->orWhere('body', 'like', '%'.strtolower($search).'%');
        });
    }

    public function category()
    {
        
        return $this->belongsTo(Category::class);

    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
