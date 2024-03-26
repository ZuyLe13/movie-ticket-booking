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
        Schema::create('bills', function (Blueprint $table) {
            $table->string('bi_id',100)->primary;
            $table->string('email')->nullable(false);
            $table->datetime('bi_date');
            $table->integer('tk_count');
            $table->decimal('bi_value', 15, 2, true);
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
        });

        // Thêm chỉ mục cho cột 'bi_id'
    Schema::table('bills', function (Blueprint $table) {
        $table->index('bi_id');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
