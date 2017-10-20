<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'primeiro_nome',
        'apelido',
        'email',
        'senha',
        'nivelacesso',
        'estado'

    ];

    public function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }

    public function setApelidoAttribute($value)
    {
        $this->attributes['apelido'] = ucfirst(strtolower($value));
    }

    public function setPrimeiro_NomeAttribute($value)
    {
        $this->attributes['primeiro_nome'] = ucwords(strtolower($value));
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
}
