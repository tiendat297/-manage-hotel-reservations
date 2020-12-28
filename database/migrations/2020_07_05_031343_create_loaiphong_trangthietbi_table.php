<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiphongTrangthietbiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaiphong_trangthietbi', function (Blueprint $table) {
            Schema::create('loaiphong_trangthietbi', function ( $table) {
                $table -> integer('loaiphong_id');
                $table -> foreign('loaiphong_id') -> references('id')-> on('loaiphong') ->onDelete('cascade');
                $table -> integer('trangthietbi_id');
                $table -> foreign('trangthietbi_id') -> references('id')-> on('trangthietbi')->onDelete('cascade');
                $table -> integer('sl');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaiphong_trangthietbi');
    }
}
