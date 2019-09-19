<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Portfolio;

class Portfolio extends Model
{
    
    protected $fillable = [
        'title', 'comment', 'siteurl','image','file','created_at'
    ];
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $dates = ['timestamps'];
    
}
