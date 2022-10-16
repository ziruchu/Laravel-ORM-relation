<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index()->comment('用户ID');
            $table->bigInteger('category_id')->index()->comment('所属分类');
            $table->string('title')->index()->comment('视频标题');
            $table->string('url')->comment('视频链接');
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::statement('ALTER TABLE `videos` COMMENT "视频"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
