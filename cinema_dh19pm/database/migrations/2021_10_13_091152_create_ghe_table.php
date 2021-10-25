<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghe', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phongcp_id')->constrained('phongchieuphim');
            $table->integer('ghe');
            $table->tinyInteger('tinhtrang')->default(1); // 1 la con cho , 0 la het cho
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
        Schema::dropIfExists('ghe');
    }
}
