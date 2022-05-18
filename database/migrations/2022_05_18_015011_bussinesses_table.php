<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 事業者テーブル
 */
class BussinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bussinesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',255)->unique();
            $table->text('password');
            $table->text('token');
            $table->dateTime('token_datetime');
            $table->text('facility_name');
            $table->text('locality');
            $table->text('address');
            $table->text('url');
            $table->text('contact_name');
            $table->text('contact_phone');
            $table->text('contact_email');
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
        Schema::dropIfExists('bussinesses');
    }
}
