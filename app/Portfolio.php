<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Portfolio;

class Portfolio extends Model
{
    
    protected $fillable = [
        'title', 'comment', 'siteurl','image','file'
    ];
    
    
    public function users()
    {
        return belongsTo(User::class);
    }
    
}
