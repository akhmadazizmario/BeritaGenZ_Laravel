<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['category', 'author']; //fungsi with adalah untuk mengurangi lag kueri ke database saat apk dijalankan

    public function scopeFilter($query, array $filters)
    {

        //function search
        $query->when($filters['search'] ?? false,  function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search  . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
        //end
    }



    public function category()
    {
        return $this->belongsTo(category::class); # belongsTo itu adalah relasi one to one 1:1 kebalikanya ada di models category.php
        # one to one adalah satu value di dalam tabel yang hanya punya satu value di tabel lain contohnya tabel posts hanya mempunyai 1 kategori yaitu programming di tabel category 
    }

    public function author() #author itu kata pengganti user_id
    {
        #user yeng berwarna hijau itu memanggil modelnya yah
        return $this->belongsTo(User::class, 'user_id'); #maka dipanggil lah value user_id di kolom
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
