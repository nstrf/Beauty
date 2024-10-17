<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    public function cosmetologistSessions()
    {
        return $this->belongsToMany(CosmetologistSession::class, 'rendered_procedures');
    }
}
