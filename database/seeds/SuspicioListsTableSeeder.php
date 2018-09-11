<?php

use Illuminate\Database\Seeder;

class SuspicioListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = time();
        DB::table('suspicio_lists')->insert([
            ['id' => 1, 'source' => 'Bank Negara Malaysia', 'title' => 'Unauthorized Entities', 'created_at' => $time, 'updated_at' => $time],
            ['id' => 2, 'source' => 'Bank Negara Malaysia', 'title' => 'Money Services Business Without License', 'created_at' => $time, 'updated_at' => $time],
            ['id' => 3, 'source' => 'Securities Commission Malaysia', 'title' => 'Unauthorized Entities', 'created_at' => $time, 'updated_at' => $time],
        ]);
    }
}
