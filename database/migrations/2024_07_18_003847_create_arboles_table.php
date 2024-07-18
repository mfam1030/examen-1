<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arboles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('latitud', 10, 7);
            $table->decimal('longitud', 10, 7);
            $table->boolean('señalizado')->default(false);
            $table->integer('año_plantado');
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
        Schema::dropIfExists('arboles');
    }
    
}

