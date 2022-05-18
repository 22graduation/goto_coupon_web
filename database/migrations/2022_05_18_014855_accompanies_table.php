<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 同行者テーブル
 */
class AccompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accompanies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('application_id');
            $table->text('name');
            $table->integer('age');
            $table->text('prefectures');
            $table->text('locality');
            $table->integer('locality_check');
            $table->integer('proof_check');
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
        Schema::dropIfExists('accompanies');
    }
}
