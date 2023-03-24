<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $data=[[
                'id' => 654,
                'nama_Product' => 'Album Kalih Welasku'
            ],[
                'id' => 112,
                'nama_Product' => 'Album Sanes'
            ],[
                'id' => 243,
                'nama_Product' => 'Album Rungkad'
            ],[
                'id' => 901,
                'nama_Product' => 'Album Cidro'
            ],[
                'id' => 065,
                'nama_Product' => 'Album Satru'
            ]];
        DB::table('product')->insert($data);
    }
}
