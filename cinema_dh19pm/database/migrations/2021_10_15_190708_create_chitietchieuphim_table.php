<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietchieuphimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietchieuphim', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ve_id')->constrained('ve');
            $table->foreignId('phongcp_id')->constrained('phongchieuphim');
            $table->foreignId('phim_id')->constrained('phim');
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
        Schema::dropIfExists('chitietchieuphim');
    }
}
