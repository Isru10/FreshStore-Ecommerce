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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("last_name");
            $table->text("address");
            $table->string("town");
            $table->string("state");
            $table->integer("zip_code");
            $table->string("email");
            $table->string("phone_number");
            $table->string("price");
            $table->string("user_id");
            $table->text("order_notes");
            $table->string("status")->default('Processing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
