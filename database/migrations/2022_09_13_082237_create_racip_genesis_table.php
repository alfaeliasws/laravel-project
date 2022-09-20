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
        Schema::create('racip_genesis', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->default('RACIP #');
            $table->string('species_name');
            $table->string('group')->default('RACIP Genesis');
            $table->string('series')->default('Genesis');
            $table->integer('minting_batch')->default(0);
            $table->string('dominant_color');
            $table->string('habitat');
            $table->string('geographical_place');
            $table->string('class');
            $table->string('dietary');
            $table->string('pattern');
            $table->string('art_style')->default('Normal');
            $table->string('dominant_gene');
            $table->string('secondary_gene');
            $table->string('special_gene');
            $table->longText('picture')->nullable();
            $table->longText('description');
            $table->longText('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('racip_genesis');
    }
};
