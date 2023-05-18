<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EgginfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('egginfo')->insert([
            'eggtype' => "type0",
            'name' => "半熟(とろ〜り)",
            'imgPath' => "/images/egg0.jpeg",
            'boilMiliSec' => 390000,
            'numCounter' => 0,
        ]);

        DB::table('egginfo')->insert([
            'eggtype' => "type1",
            'name' => "半熟(とろっ)",
            'imgPath' => "/images/egg1.jpeg",
            'boilMiliSec' => 420000,
            'numCounter' => 0,
        ]);

        DB::table('egginfo')->insert([
            'eggtype' => "type2",
            'name' => "半熟(しっとり)",
            'imgPath' => "/images/egg2.jpeg",
            'boilMiliSec' => 450000,
            'numCounter' => 0,
        ]);

        DB::table('egginfo')->insert([
            'eggtype' => "type3",
            'name' => "ほぼ完熟",
            'imgPath' => "/images/egg3.jpeg",
            'boilMiliSec' => 480000,
            'numCounter' => 0,
        ]);

        DB::table('egginfo')->insert([
            'eggtype' => "type4",
            'name' => "完熟",
            'imgPath' => "/images/egg4.jpeg",
            'boilMiliSec' => 510000,
            'numCounter' => 0,
        ]);

        DB::table('egginfo')->insert([
            'eggtype' => "type5",
            'name' => "しっかり完熟",
            'imgPath' => "/images/egg5.jpeg",
            'boilMiliSec' => 540000,
            'numCounter' => 0,
        ]);
    }
}
