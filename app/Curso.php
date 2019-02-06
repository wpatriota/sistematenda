<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $table = 'curso';

    protected $fillable =	[
    	'id',
    	'nome',
    	'descricao'
    ];

    public function turma()
    {
        return $this->hasMany('App\Turma');
    }
}
