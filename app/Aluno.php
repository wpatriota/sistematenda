<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	protected $table = 'aluno';

    public function turma()
    {
        return $this->belongsTo('tenda\Turma','id_turma');
    }

    public function individuo()
    {
        return $this->belongsTo('tenda\Individuo', 'id_individuo');
    }
}
