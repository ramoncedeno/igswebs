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
        Schema::create('ventas_vicidials', function (Blueprint $table) {
            $table->id();
            $table-> bigint ('vendor_lead_code');
            $table-> string ('code_country');
            $table-> string ('sponsor');
            $table-> dateTimeTz ('call_date');
            $table-> int ('campaign_id');
            $table-> int ('user_tmk');
            $table-> int ('phone_number');
            $table-> string ('status_name');
            $table-> string ('first_name varchar');
            $table-> string ('middle_name varchar');
            $table-> string ('last_name');
            $table-> string ('comments');
            $table-> string ('recording_filename');
            $table-> text ('recording_location varchar');
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
