<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    public function client(){
        return $this->belongsTo('App\Models\Client', 'client_id', 'id');
    }
    public function tags(){
        return $this->belongsToMany('App\Models\Tag', 'works_has_tags');
    }
}
