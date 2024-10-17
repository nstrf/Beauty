<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CosmetologistSession extends Model
{
    use HasFactory;
    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }
    public function cosmetologist()
    {
        return $this->belongsTo(Cosmetologist::class, 'id_cosmetologist');
    }
    public function procedures()
    {
        return $this->belongsToMany(Procedure::class, 'rendered_procedures', 'session_id', 'service_id');
    }
}
