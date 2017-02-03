<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('projects', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('id_customer')->nullable();
           $table->integer('id_user')->nullable();
           $table->string('codigo_proyecto');
           $table->string('titulo_proyecto')->nullable();
           $table->date('fechaentrega_proyecto')->nullable();
           $table->string('estado_proyecto')->default('en cola');
           $table->text('comentario_proyecto')->nullable();
           $table->string('slug')->unique();
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
     }
}
