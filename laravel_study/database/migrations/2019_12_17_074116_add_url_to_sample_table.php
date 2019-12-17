<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlToSampleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sample', function (Blueprint $table) {
            $table->string('url',150)->after('id')->default('baidu.com');
            $table->smallInteger('num')->default(0);
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
            $table->dropColumn(['url', 'num']);
        });
    }
}
