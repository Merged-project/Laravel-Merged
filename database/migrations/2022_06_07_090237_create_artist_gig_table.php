<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_gig', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('artist_id');
            $table->foreign('artist_id')->references('id')->on('artists');
            
            
            $table->unsignedBigInteger('gig_id');
            $table->foreign('gig_id')->references('id')->on('gigs');
            
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
        Schema::dropIfExists('artist_gig');
    }
};
