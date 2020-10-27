<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_evaluation', function (Blueprint $table) {
            $table->id()->comment('評価ID');
            $table->timestamp('created', 6)->comment('作成日時');
            $table->bigInteger('created_id')->comment('作成者ID');
            $table->string('created_program', 100)->comment('作成プログラム');
            $table->timestamp('modified', 6)->comment('更新日時');
            $table->bigInteger('modified_id')->comment('更新者ID');
            $table->string('modified_program', 100)->comment('更新プログラム');
            $table->tinyInteger('status')->default(0)->comment('状態フラグ	0.有効 1.無効');
            $table->date('evaluation_date')->comment('評価日付');
            $table->bigInteger('teacher_id')->comment('講師ID');
            $table->bigInteger('observer_id')->comment('評価実施講師ID');
            $table->text('comment')->comment('評価内容');
            $table->string('org_name', 255)->nullable(true)->comment('アップロードファイル名');
            $table->string('sheet', 255)->nullable(true)->comment('S3に保存パス');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_evaluation');
    }
}
