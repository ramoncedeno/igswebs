<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas_auditorias', function (Blueprint $table) {

            $table->comment(' In this table the quality validation process and confirmation of the sale will be carried out');
            $table->id()->unsigned();
            $table-> bigInteger ('id_vicidial')-> unsigned();
            $table-> string ('sponsor');
            $table-> text ('status_name');
            $table-> string ('phone_number','10');
            $table-> string ('first_name');
            $table-> string ('middle_name');
            $table-> string ('last_name');
            $table-> text ('comments');
            $table-> timestamps ();

            $table->foreign('id_vicidial')->references('id')->on('ventas_vicidials');


        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas_auditorias');
    }
};
