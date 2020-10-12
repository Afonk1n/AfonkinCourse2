<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->decimal('transaction',8,2);
            $table->decimal('servicecost',8,2);
            $table->date('dealdate');
            $table->integer('dealarea');
            $table->foreignId('service_id')->constrained('services')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('apartment_id')->constrained('apartments')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('status_id')->constrained('statuses')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
