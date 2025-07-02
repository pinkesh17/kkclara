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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('name');
            $table->timestamp('phone_verified_at')->nullable()->after('phone');
            $table->tinyInteger('role')->default('0')->after('password');
            $table->tinyInteger('status')->default('0')->after('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('phone_verified_at');
            $table->dropColumn('role');
            $table->dropColumn('status');
        });
    }
};
