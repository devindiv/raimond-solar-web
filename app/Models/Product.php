<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    /*protected $fillable = ['title','description','product'];*/

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%'. request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }


}
