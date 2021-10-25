<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phim', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dangphim_id')->constrained('dangphim');
            $table->foreignId('loaiphim_id')->constrained('loaiphim');
            $table->string('tenphim');
            $table->integer('thoigian');
            $table->text('tomtat')->nullable();;
            $table->integer('luotxem');
            $table->string('dienvien');
            $table->string('quocgia');
            $table->string('daodien');
            $table->date('ngaysanxuat');
            $table->string('hinhanh')->nullable();
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
        Schema::dropIfExists('phim');
    }
}
