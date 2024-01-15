<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'condition_id',
        'image',
        'name',
        'description',
        'price',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function condition()
    {
        return $this->belongsTo('App\Models\Condition');
    }

    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase');
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }
    }
}
