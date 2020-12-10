<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('manager')->nullable();
            $table->decimal('january',11,2)->nullable();
            $table->decimal('february',11,2)->nullable();
            $table->decimal('march',11,2)->nullable();
            $table->decimal('april',11,2)->nullable();
            $table->decimal('may',11,2)->nullable();
            $table->decimal('june',11,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
