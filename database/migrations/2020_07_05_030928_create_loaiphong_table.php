<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiphongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('loaiphong', function ($table) {
                $table->Increments('id');
                $table -> string('tenphong',50);
                $table -> Integer('SLmax');
                $table -> integer('dientich');
                $table -> integer('gia');
                $table -> string('mota',200);

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaiphong');
    }
}
