<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description')->default('descrizione');
            $table->string('thumb', 200)->default('https://dummyimage.com/640x360/fff/aaa')->nullable();
            $table->float('price', 5, 2)->default(0);
            $table->string('series', 100)->default('serie');
            $table->date('sale_date')->default(date('Y-m-d'));
            $table->string('type', 20)->default('tipo di fumetto');
            $table->text('artists')->default('lista artisti');
            $table->text('writers')->default('lista scrittori');
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
        Schema::dropIfExists('comics');
    }
}

