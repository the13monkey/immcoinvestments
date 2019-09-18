<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDataToLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('leaders')->insert([
            [
                'leader_name' => 'Kevin Jeffers',
                'leader_title' => 'Managing Partner',
                'leader_description' => 'Kevin Jeffers is the founder and managing partner of Immco Investments LLC. A seasoned entrepreneur with significant experience in the global trade and financing industries, Kevin provides strategic guidance in the company\'s operations, drives innovation, and oversees all the development processes. A graduate of the School of Art Institute in Chicago, Kevin has more than three decades of experience in marketing, sales, and innovative business solutions, and over 20 years of experience doing business with local and international Chinese firms. As a leader who favors a practical approach philosophy and quality-driven processes to achieve excellence, Kevin is responsible for Immco\'s investment and real estate development, coordinating successful fund management, and delivering consistency to the companies operations.',
                'leader_picture' => 'kevin.png'
            ],
            [   
                'leader_name' => 'Luke Martineac',
                'leader_title' => 'President of China Operations',
                'leader_description' => 'Luke Martineac is partner and President of China Operations of Immco Investments LLC. A graduate of Kelley School of Business at Indiana University, Luke is responsible for sourcing capital for Immco projects. His expertise and focus is on project analysis, marketing, capital sourcing, and investor relations. He is charged with the alignment of financial strategy, planning, business management, and controls across the growing number of funds and assets in the Immco portfolio. Luke is fluent in Mandarin Chinese, and has extensive experience with Chinese firms, individual and institutional investors, and he works closely with his Shanghai based team to source capital.',
                'leader_picture' => 'luke.png'
            ],
            [
                'leader_name' => 'Michael Jeffers',
                'leader_title' => 'Executive Vice President',
                'leader_description' => 'Michael Jeffers is the Executive Vice President of IMMCO Investments LLC. Michael has started and sold several companies reaching into the health, science, distribution, and manufacturing sectors. This experience supplements the growing presence of IMMCO into various categories that support the core business model of finance and investment. Michael graduated from the University of Illinois in business, economics. He has worked domestically and globally, with extensive experience in China, South Korea, Japan, and Western Europe. Working within the IMMCO group of companies is a reunion of talents for Michael Jeffers and Managing Partner Kevin Jeffers. Their first business venture in foreign trade dates back to 1991.',
                'leader_picture' => 'michael.png'
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
        Schema::table('leaders', function (Blueprint $table) {
            //
        });
    }
}
