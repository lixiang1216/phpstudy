<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-10 14:53:24
 * @LastEditTime : 2020-01-10 14:56:13
 * @Description: file content
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        # 多对多关联表 是由A-Z先后来决定谁在前
        Schema::create('habit_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('habit_id');
            $table->string('level')->default('一般');
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
        Schema::dropIfExists('habit_user');
    }
}
