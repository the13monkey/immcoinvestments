<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataToPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('partners')->insert([
            [
                'partner_name' => 'Lightstone',
                'partner_category' => 'Developer',
                'partner_logo' => 'lightstone.png',
            ],
            [
                'partner_name' => 'Sydell Group Ltd',
                'partner_category' => 'Developer',
                'partner_logo' => 'sggroup.png',
            ],
            [
                'partner_name' => 'Caesars Palace',
                'partner_category' => 'Developer',
                'partner_logo' => 'casars.png',
            ],
            [
                'partner_name' => 'The LINQ Promenade',
                'partner_category' => 'Retailer',
                'partner_logo' => 'linq_promenade.png',
            ],
            [
                'partner_name' => 'Brownstein Hyatt Farber Schreck',
                'partner_category' => 'Legal',
                'partner_logo' => 'brownstein_logo.png',
            ],
            [
                'partner_name' => 'JMBM',
                'partner_category' => 'Legal',
                'partner_logo' => 'jmbm.png',
            ],
            [
                'partner_name' => 'GreenbergTraurig',
                'partner_category' => 'Legal',
                'partner_logo' => 'greenberg.png',
            ],
            [
                'partner_name' => 'David Hirson',
                'partner_category' => 'Legal',
                'partner_logo' => 'hirson.png',
            ],
            [
                'partner_name' => 'Miller Mayer',
                'partner_category' => 'Legal',
                'partner_logo' => 'millermayer.png',
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
        Schema::table('partners', function (Blueprint $table) {
            //
        });
    }
}
