<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('user_id')->index()->comment('用户ID');
            $table->string('url')->comment('用户URL');
            $table->smallInteger('height')->default(0)->comment('身高');
            $table->tinyInteger('gender')->default(0)->comment('性别:0女1男');
            $table->timestamps();
        });


        DB::statement('ALTER TABLE `profiles` COMMENT "用户资料"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
