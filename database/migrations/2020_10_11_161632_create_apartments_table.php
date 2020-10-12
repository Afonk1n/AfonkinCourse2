<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->integer('area');
            $table->string('number', 45);
            $table->integer('storey');
            $table->string('specification',300);
            $table->string('additional', 300);
            $table->tinyInteger('sold')->default(0);
            $table->string('image');
            $table->foreignId('room_id')->constrained('rooms')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('street_id')->constrained('streets')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('storeynumber_id')->constrained('storeynumbers')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('layout_id')->constrained('layouts')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('renovation_id')->constrained('renovations')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('bathroom_id')->constrained('bathrooms')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('district_id')->constrained('districts')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}
