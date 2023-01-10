<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('email', 254)->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password', 72);
            $table->unsignedInteger('role_id')->default(2);
            $table->unsignedInteger('shop_id')->default(1);
            $table->string('memo')->nullable();
            $table->rememberToken();
            $table->timestamps();
            //$table->dateTime('created_at')->useCurrent();
            //$table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
            //
            //$table->collation = 'utf8mb4_bin';
        });
        DB::table('users')->insert(['id' => 1, 'name' => '山田太郎', 'email' => 'sute_99@gmail.com', 'password' => bcrypt('password'), 'role_id' => 1, 'shop_id' => 1, 'memo' => '統括主任']);
        DB::table('users')->insert(['id' => 2, 'name' => '山田花子', 'email' => 'sute_991@gmail.com', 'password' => bcrypt('password'), 'role_id' => 2, 'shop_id' => 2, 'memo' => '東京本店店員']);
        DB::table('users')->insert(['id' => 3, 'name' => '山田二郎', 'email' => 'sute_992@gmail.com', 'password' => bcrypt('password'), 'role_id' => 2, 'shop_id' => 2, 'memo' => '名古屋支店店員']);
        DB::table('users')->insert(['id' => 4, 'name' => '山田三郎', 'email' => 'sute_993@gmail.com', 'password' => bcrypt('password'), 'role_id' => 2, 'shop_id' => 3, 'memo' => '大阪支店店員']);
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
