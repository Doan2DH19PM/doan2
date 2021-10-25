<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ve', function (Blueprint $table) {
            $table->id();
            $table->string('tenve');
            $table->foreignId('loaive_id')->constrained('loaive');
            $table->foreignId('phim_id')->constrained('phim');
            $table->foreignId('user_id')->constrained('nguoidung');
            $table->foreignId('phongcp_id')->constrained('phongchieuphim');
            $table->foreignId('ghe_id')->constrained('ghe');
            $table->integer('tongsoghe');
            $table->foreignId('xuatchieu_id')->constrained('xuatchieu');
            $table->date('ngaybanve');
            $table->timestamps($precision = 0);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ve');
    }
}
