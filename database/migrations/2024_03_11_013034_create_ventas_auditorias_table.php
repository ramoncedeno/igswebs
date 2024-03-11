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

            $table-> bigIncrements ('audit_id');
            $table-> intenger    ('lead_id');
            $table-> string ('sponsor' );
            $table-> string ('status_name');
            $table-> intenger    ('phone_numbe');
            $table-> string ('first_name');
            $table-> string ('middle_name');
            $table-> string  ('last_name');
            $table-> timestamps ();
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
