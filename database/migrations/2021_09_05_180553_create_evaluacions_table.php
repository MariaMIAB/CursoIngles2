<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tipoexamen');
            $table->unsignedBigInteger('tema_id');
            $table->foreign('tema_id')->references('id')->on('temas');
            $table->unsignedBigInteger('nota_id');
            $table->foreign('nota_id')->references('id')->on('notas');
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
        Schema::dropIfExists('evaluacions');
    }
}
