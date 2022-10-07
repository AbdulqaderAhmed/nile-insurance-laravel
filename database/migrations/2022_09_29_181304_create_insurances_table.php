<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('body')->nullable();
            $table->string('description');
            $table->string('model')->nullable();
            $table->string('engine')->nullable();
            $table->string('cc')->nullable();
            $table->string('brand1')->nullable();
            $table->string('brand2')->nullable();
            $table->string('brand3')->nullable();
            $table->string('brand4')->nullable();
            $table->string('brand5')->nullable();
            $table->string('brand6')->nullable();
            $table->string('brand7')->nullable();
            $table->string('brand8')->nullable();
            $table->string('brand9')->nullable();
            $table->string('brand10')->nullable();
            $table->string('brand11')->nullable();
            $table->string('brand12')->nullable();
            $table->timestamps();
        });

        Schema::table('insurances', function (Blueprint $table) {
            $table->string('transmission')->after('cc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurances');
    }
};
