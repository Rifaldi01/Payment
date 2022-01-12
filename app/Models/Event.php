<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded =  [];

    public function sosmed(){
        return $this->belongsTo(Social_media::class, 'social_media_id', 'id');
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
