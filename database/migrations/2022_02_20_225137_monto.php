<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Monto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::table('libros', function($table){
            $table->string('monto');
            $table->string('tipo');
            $table->string('semana');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        schema::table('libros', function($table){
            $table->dropcolumn('monto');
            $table->dropcolumn('tipo');
            $table->dropcolumn('semana');

        });
    }
}
