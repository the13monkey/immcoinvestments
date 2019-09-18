<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreDataToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('projects')->insert([
            [
                'project_name' => 'L.A. LINE Hotel', 
                'project_location' => 'Los Angeles, CA',
                'project_status' => 'Fully Funded',
                'project_category' => 'Commercial Real Estate',
                'project_description' => 'Developed by the Sydell Group, the Line hotel is an award-winning boutique-hotel located in Los Angeles\' Koreatown Conde Nast has dubbed the Line as one of the most iconic and popular hotels in LA.',
                'project_picture' => 'line.jpg',
            ],
            [
                'project_name' => 'NYU Moxy Hotel', 
                'project_location' => 'New York City, NY',
                'project_status' => 'Fully Funded',
                'project_category' => 'Commercial Real Estate',
                'project_description' => 'Developed by the Lightstone Group, located in the East Village, near the New York University campus. this Marriott branded hotel strategically caters to the needs and preferences of millennial travelers.',
                'project_picture' => 'nyumoxy.jpg',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
}
