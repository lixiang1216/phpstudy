<?php
/*
 * @Author: Lixiang
 * @Date: 2019-12-17 15:53:39
 * @LastEditTime : 2019-12-24 12:18:20
 * @Description: file content
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTest2ToSampleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sample', function (Blueprint $table) {
            $table->string('test2',150);
            $table->string('test3',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sample', function (Blueprint $table) {
            $table->dropColumn(['test2','test3']);
        });
    }
}
