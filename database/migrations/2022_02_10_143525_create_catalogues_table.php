<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCataloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogues', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("quality");
            $table->string("standart");
            $table->string("calorie");
            $table->string("mousture");
            $table->string("ash");
            $table->string("carbon");
            $table->string("burning");
            $table->string("ashtype");
            $table->string("size");
            $table->string("certificate");
            $table->string("packaging");
            $table->longText("description");
            $table->integer("moq");
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
        Schema::dropIfExists('catalogues');
    }
}
