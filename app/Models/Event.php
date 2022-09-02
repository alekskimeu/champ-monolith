<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table="events";

    protected $fillable = ['name', 'date', 'description', 'image'];

    public function participants() {
        return $this->hasMany(Participant::class);
    }
}
