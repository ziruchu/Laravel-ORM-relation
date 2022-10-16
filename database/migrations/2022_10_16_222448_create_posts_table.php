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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index()->comment('用户ID');
            $table->bigInteger('category_id')->index()->comment('所属分类');
            $table->string('title')->index()->comment('文章标题');
            $table->longText('content')->comment('文章内容');
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::statement('ALTER TABLE `posts` COMMENT "文章"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
