<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            //*Cara pertama membuat foreign key
            //$table->bigInteger('camp_id')->unsigned();
            //atau
            //$table->unsignedBigInteger('camp_id');
            //**Cara kedua
            $table->foreignId('camp_id')->constrained();
            $table->string('name');
            $table->timestamps();

            //*cara pertama membuat foreign key
            //$table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
            //Cara Kedua membuat foreign key Tanpa embel-embel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
