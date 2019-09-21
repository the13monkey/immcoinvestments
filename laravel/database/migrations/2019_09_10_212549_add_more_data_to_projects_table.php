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
                'project_name' => 'Maxie\'s Las Vegas',
                'project_location' => 'Las Vegas, NV',
                'project_status' => 'Fully Funded',
                'project_category' => 'Restaurant Development',
                'project_description' => 'Maxie\'s is a restaurant development project located in Las Vegas, Nevada, on the world-famous Las Vegas Strip. It is the new dining hot spot in Las Vegas, serving breakfast, lunch and dinner.',
                'project_picture' => 'maxies.jpg',
                'featured' => 0,
            ],
            [
                'project_name' => 'Canter\'s Las Vegas LINQ Promenade',
                'project_location' => 'Las Vegas, NV',
                'project_status' => 'Fully Funded',
                'project_category' => 'Restaurant Development',
                'project_description' => 'Canter\'s Deli Las Vegas LINQ Promenade was a restaurant development project located at the LINQ hotel & casino on the Las Vegas Strip, just under the High Roller.',
                'project_picture' => 'canters.jpg',
                'featured' => 0,
            ],
            [
                'project_name' => 'Maui Water Utility',
                'project_location' => 'Maui, HI',
                'project_status' => 'Phase I Completed',
                'project_category' => 'Restaurant Development',
                'project_description' => 'The water well at Kula Ridge in Maui, HI, is a water utility project owned and operated by Immco. Aside from selling water to local government and developers, the plan extends to global distribution of bottled water, and residential real estate development.',
                'project_picture' => 'maui.jpg',
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
