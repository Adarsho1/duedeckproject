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
        Schema::table('emp', function (Blueprint $table) {
            $table->string("Resume",100)->nullable()->after('dept');
    
        });;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emp', function (Blueprint $table) {
            $table->dropColumn("Resume");
        });
    }
};
