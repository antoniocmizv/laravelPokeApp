<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('pokemon', function (Blueprint $table) {
            $table->string('image')->nullable()->after('numero');
        });
    }

    public function down(): void {
        Schema::table('pokemon', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};