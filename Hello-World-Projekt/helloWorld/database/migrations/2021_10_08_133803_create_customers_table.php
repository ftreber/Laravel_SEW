<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 128)->nullable(false);
            $table->string('lastName', 128)->nullable(false);
            $table->string('address', 128)->nullable(false);
            $table->string('postalCode', 8)->nullable(false);
            $table->string('city', 128)->nullable(false);
            $table->string('phone', 32)->nullable(true);
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
        Schema::dropIfExists('customers');
    }
}
