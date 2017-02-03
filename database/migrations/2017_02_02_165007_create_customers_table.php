<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('customers', function (Blueprint $table) {
          $table->increments('id');
          $table->string('codigo_cliente')->unique();
          $table->string('nombre_cliente');
          $table->string('email_cliente')->nullable();
          $table->string('telefono_cliente')->nullable();
          $table->string('contacto_cliente')->nullable();
          $table->string('logotipo_cliente')->default('sinlogo.jpg');
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
        Schema::dropIfExists('customers');
    }
}
