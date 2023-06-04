<?php

use Database\Seeders\UsersSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::defaultStringLength(191);         
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 200);
            $table->string('contact', 20);
            $table->enum('user_type', ['user', 'admin', 'vendor']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('approved_status', ['unapproved', 'approved'])->default('unapproved');
            $table->tinyInteger('is_deleted')->default(0)->comment='0=not-delete,1-delete';
            $table->rememberToken();
            $table->timestamps();
        });
        
        // $seeder = new UsersSeeder();
        // $seeder->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
