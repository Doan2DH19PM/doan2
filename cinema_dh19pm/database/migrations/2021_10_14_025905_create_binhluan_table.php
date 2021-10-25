<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phim_id')->constrained('phim');
            $table->foreignId('user_id')->constrained('nguoidung');
            $table->text('noidung')->nullable();
            $table->date('ngaydang');
            $table->tinyInteger('kiemduyet')->default(1); // 1 la duoc duyet , 0 la k duoc duyet
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
        Schema::dropIfExists('binhluan');
    }
}
