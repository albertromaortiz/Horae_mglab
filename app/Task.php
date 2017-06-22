<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

  protected $dates = ['fechaentrega_tarea', 'fechainicio_tarea'];

  public function project()
      {
          return $this->belongsTo('App\Project');
      }

      public function users()
          {
              return $this->belongsToMany('App\User');
          }

}
