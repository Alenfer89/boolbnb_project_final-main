<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_images', function (Blueprint $table) {
            $table->id();
            // ? Chiave esterna
            $table->unsignedBigInteger('apartment_id');
            // ? Gestione Delete alla cancellazione di un appartamento
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');

            $table->string('image_path');
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
        Schema::dropIfExists('apartment_images');
    }
}
