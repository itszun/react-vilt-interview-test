<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Product::factory(10)->create();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('products')->truncate();
    }
};
