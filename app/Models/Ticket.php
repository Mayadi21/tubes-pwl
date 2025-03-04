<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function train()
    {
        return $this->belongsTo(Train::class);
    }

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function price()
    {
        return $this->hasOne(Price::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['train_id'] ?? false, function ($query, $train_id) {
            return $query->where('train_id', '=', $train_id);
        });
    }
}
