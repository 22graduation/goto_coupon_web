<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 利用者テーブル
 */
class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',255)->unique();
            $table->text('password');
            $table->text('token');
            $table->dateTime('token_datetime');
            $table->text('name');
            $table->integer('age');
            $table->text('prefectures');
            $table->text('locality');
            $table->text('address_1');
            $table->text('address_2');
            $table->text('phone');
            $table->integer('insert_bussiness_id');
            $table->integer('update_bussiness_id');
            $table->integer('status');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at');
        });
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
