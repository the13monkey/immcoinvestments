<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertMoreDataToBizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('bizs')->insert(
            [
                'biz_name' => 'Restaurant Development',
                'biz_description' => 'Immco\'s subsidiary, Celebrity Brands LLC, is an active restaurant development company located in Las Vegas, NV. The company owns and operates restaurants on the Las Vegas Strip and locations nearby.'
            ],
            [
                'biz_name' => 'Water Development',
                'biz_description' => 'KRM Holdings LLC, an Immco subsidiary, owns and operates the third deepest well in the world on Kula Ridge, Maui HI. The well provides perfectly alkaline water, and services the island of Maui.'
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bizs', function (Blueprint $table) {
            //
        });
    }
}
