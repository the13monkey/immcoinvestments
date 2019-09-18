<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDataToProjectsTable extends Migration
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
                    'project_name' => 'Empire State Moxy Hotel', 
                    'project_location' => 'New York City, NY',
                    'project_status' => 'Fully Funded',
                    'project_category' => 'Commercial Real Estate',
                    'description' => 'Developed by the Lightstone Group, this Marriott branded hotel is dubbed by the Associated Press as New York\'s Most Playful Hotel. The project is partially financed by Immco.',
                    'project_picture' => 'empiremoxy.jpg',
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
