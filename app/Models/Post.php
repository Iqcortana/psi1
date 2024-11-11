<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search. '%')->orWhere('body', 'like', '&' . $search . '%');
        }); //filter search

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        }); // filter + category
    
        $query->when($filters['author'] ?? false, fn($query, $author) => $query->whereHas('author', fn($query) => $query->where('username', $author)
            )
        ); // filter + author metode arrow function "fn($value) => $value->method()"
    }


    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function author() //sebelumnya user() tapi sekarang buat alias
    { //ygdipake di routes dan views adalah yg author() ini
        return $this->belongsTo(User::class, 'user_id'); //dicantumkan foerignId nya
    }

}
