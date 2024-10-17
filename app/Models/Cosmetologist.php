<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cosmetologist extends Model
{
    use HasFactory;
    public function cosmetologistSessions()
    {
        return $this->hasMany(CosmetologistSession::class, 'id_cosmetologist');
    }
}
