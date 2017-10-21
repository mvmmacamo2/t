<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\VisitagEscola;

class Escola extends Model
{
    public function pedidos()
    {
        return $this->hasMany(VisitagEscola::class);
    }
}
