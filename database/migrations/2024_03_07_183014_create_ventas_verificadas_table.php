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
        Schema::create('ventas_verificadas', function (Blueprint $table) {


                $table-> integer ('confirmation_id');
                $table-> integer ('audit_id');
                $table-> integer ('lead_id');
                $table-> integer ('vendor_lead_code');
                $table-> string ('status_name');
                $table-> string ('comments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas_verificadas');
    }
};
