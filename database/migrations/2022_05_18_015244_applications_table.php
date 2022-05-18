<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 *　申請テーブル
 */
class ApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('user_name');
            $table->dateTime('checkin_date');
            $table->dateTime('checkout_date');
            $table->integer('bussiness_id');
            $table->text('facility_name');
            $table->integer('stay_day');
            $table->dateTime('apply_datetime');
            $table->integer('reserve_number');
            $table->dateTime('confirmed_date');
            $table->text('confirmed_name');
            $table->integer('coupon_count');
            $table->string('coupon_number_from');
            $table->string('coupon_number_to');
            $table->dateTime('approval_date');
            $table->text('approval_user');
            $table->text('change_content');
            $table->text('change_user');
            $table->integer('bussiness_management_status');
            $table->integer('admin_management_status');
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
        Schema::dropIfExists('applications');
    }
}
