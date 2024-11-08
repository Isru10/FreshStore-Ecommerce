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
            $table->text('address');
            $table->string('town');
            $table->string('state');
            $table->integer('zip_code');
            $table->string('image')->default('avatar.jpg');
            $table->string('phone_number');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('town');
            $table->dropColumn('state');
            $table->dropColumn('zip_code');
            $table->dropColumn('image');
            $table->dropColumn('phone_number');
        });
    }
};
