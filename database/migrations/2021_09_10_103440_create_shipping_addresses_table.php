<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->default(0);
            $table->string('name',200)->nullable();
            $table->string('contact',20)->nullable();
            $table->string('pincode',20)->nullable();
            $table->string('locality',20)->nullable();
            $table->string('address',500)->nullable();
            $table->string('city',200)->nullable();
            $table->string('state',200)->nullable();
            $table->string('landmark',200)->nullable();
            $table->string('contact2',200)->nullable();
            $table->enum('address_type', ['home', 'work']);
            $table->tinyInteger('is_deleted')->default(0)->comment='0=not-delete,1-delete';
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('shipping_addresses');
    }
}
