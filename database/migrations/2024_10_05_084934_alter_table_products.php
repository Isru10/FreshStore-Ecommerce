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

        Schema::table('products', function (Blueprint $table) {
            $table->text('description')->default('text here text here text here text here');        
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('category_id');
        });
    }
};
// database\migrations\2024_10_05_084934_alter_table_products.php