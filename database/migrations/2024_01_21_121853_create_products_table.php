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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['raw', 'in_progress', 'manufactured', 'under_finishing', 'delivered', 'encapsulated'])->nullable();
            $table->unsignedBigInteger('operating_party_id')->nullable();
            $table->foreign('operating_party_id')->references('id')->on('operating_parties');
            $table->string('name');
            $table->string('details');
            $table->string('dimensions');
            $table->date('date')->default(date('Y-m-d'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
