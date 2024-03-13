<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas_vicidials', function (Blueprint $table) {

            $table->comment('In this table all sales made by TMK in vicidial will be recorded');
            $table->id()->unsigned();
            $table-> string ('sponsor','50');
            $table-> string ('vendor_lead_code','60');
            $table-> dateTimeTz ('call_date');
            $table-> text ('campaign_id','10');
            $table-> text ('user_id','50');
            $table-> text ('user_name');
            $table-> string ('phone_number','10');
            $table-> string ('status_name');
            $table-> string ('first_name varchar');
            $table-> string ('middle_name varchar');
            $table-> string ('last_name');
            $table->string ('lead_id','50');
            $table-> string ('comments');
            $table-> text ('server');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas_vicidials');
    }
};
