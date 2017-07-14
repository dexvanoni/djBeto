<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditionsTable extends Migration
{

    public function up()
    {
        Schema::create('editions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('img_about')->nullable();
            $table->text('msg_about')->nullable();
            $table->text('msg_about_donw')->nullable();
            $table->text('url_top')->nullable();
            $table->text('f1')->nullable();
            $table->text('t1')->nullable();
            $table->text('u1')->nullable();
            $table->text('f2')->nullable();
            $table->text('t2')->nullable();
            $table->text('u2')->nullable();
            $table->text('f3')->nullable();
            $table->text('t3')->nullable();
            $table->text('u3')->nullable();
            $table->text('f4')->nullable();
            $table->text('t4')->nullable();
            $table->text('u4')->nullable();
            $table->text('f5')->nullable();
            $table->text('t5')->nullable();
            $table->text('u5')->nullable();
            $table->text('f6')->nullable();
            $table->text('t6')->nullable();
            $table->text('u6')->nullable();
            $table->text('f7')->nullable();
            $table->text('t7')->nullable();
            $table->text('u7')->nullable();
            $table->text('f8')->nullable();
            $table->text('t8')->nullable();
            $table->text('u8')->nullable();
            $table->text('f1_e')->nullable();
            $table->text('t1_e')->nullable();
            $table->text('s1_e')->nullable();
            $table->text('ano1_e')->nullable();
            $table->text('diames1_e')->nullable();
            $table->text('f2_e')->nullable();
            $table->text('t2_e')->nullable();
            $table->text('s2_e')->nullable();
            $table->text('ano2_e')->nullable();
            $table->text('diames2_e')->nullable();
            $table->text('f3_e')->nullable();
            $table->text('t3_e')->nullable();
            $table->text('s3_e')->nullable();
            $table->text('ano3_e')->nullable();
            $table->text('diames3_e')->nullable();
            $table->text('f4_e')->nullable();
            $table->text('t4_e')->nullable();
            $table->text('s4_e')->nullable();
            $table->text('ano4_e')->nullable();
            $table->text('diames4_e')->nullable();
            $table->text('f1_b')->nullable();
            $table->text('t1_b')->nullable();
            $table->text('s1_b')->nullable();
            $table->text('datePost1_b')->nullable();
            $table->text('f2_b')->nullable();
            $table->text('t2_b')->nullable();
            $table->text('s2_b')->nullable();
            $table->text('datePost2_b')->nullable();
            $table->text('f3_b')->nullable();
            $table->text('t3_b')->nullable();
            $table->text('s3_b')->nullable();
            $table->text('datePost3_b')->nullable();
            $table->text('f4_b')->nullable();
            $table->text('t4_b')->nullable();
            $table->text('s4_b')->nullable();
            $table->text('datePost4_b')->nullable();
            $table->text('url_down')->nullable();
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
        Schema::dropIfExists('editions');
    }
}
