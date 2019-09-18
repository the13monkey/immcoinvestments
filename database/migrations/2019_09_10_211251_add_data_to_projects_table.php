<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataToProjectsTable extends Migration
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
                'project_name' => 'DTLA Moxy Hotel',
                'project_location' => 'Los Angeles, CA',
                'project_status' => 'Currently Offering',
                'project_category' => 'Real Estate Financing',
                'project_description' => 'Lightstone is developing a Marriott dual branded 744 key hotel complex in downtown Los Angeles, located directly across the street from the LA Convention Center, Staples Center, and LA Live.',
                'project_picture' => 'dtlamoxy.jpg',
                'featured' => 0,
            ],
            [
                'project_name' => 'Liberty Gardens I & II',
                'project_location' => 'New York City, NY',
                'project_status' => 'Fully Funded',
                'project_category' => 'Real Estate Financing',
                'project_description' => 'Located in Gowanus, Brooklyn, Liberty Gardens 365 Bond is one of the most desirable and hippest residential neighborhoods in NYC. The project is partially financed by EB-5 capital sourced by Immco.',
                'project_picture' => 'lg1n2.jpg',
                'featured' => 0,
            ],
            [
                'project_name' => 'Liberty Gardens III',
                'project_location' => 'New York City, NY',
                'project_status' => 'Fully Funded',
                'project_category' => 'Real Estate Financing',
                'project_description' => 'Liberty Gardens ARC is a luxury, mixed-use, project of approximately 428 residential apartment units, retail space and other amenities in Queens, partially financed by EB-5 capital sourced by Immco.',
                'project_picture' => 'lg3.png',
                'featured' => 0,
            ],
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
