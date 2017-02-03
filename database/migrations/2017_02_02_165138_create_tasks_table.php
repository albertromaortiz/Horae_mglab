<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('tasks', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('id_project');
           $table->string('titulo_tarea')->nullable();
           $table->date('fechaentrega_tarea')->nullable();
           $table->string('estado_tarea')->default('en cola');
           $table->text('comentario_tarea')->nullable();
           $table->string('slug')->unique();
           $table->timestamps();
       });

       Schema::create('user_task', function (Blueprint $table) {
           $table->integer('user_id')->unsigned()->index();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

           $table->integer('task_id')->unsigned()->index();
           $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');


           $table->timestamps();

       });

     }





     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('projects');
         Schema::dropIfExists('user_task');
     }
}
