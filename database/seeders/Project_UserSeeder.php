<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Project_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_user')->insert([
            [
                'id' => '1',
                'user_id' => '1',
                'project_id' => '1',
                'is_madoguchi' => '1',
                'madoguchi_attribute' => 'test',
                'madoguchi_channel' => 'test',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '2',
                'user_id' => '2',
                'project_id' => '1',
                'is_madoguchi' => '0',
                'madoguchi_attribute' => 'test',
                'madoguchi_channel' => 'test',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '3',
                'user_id' => '3',
                'project_id' => '2',
                'is_madoguchi' => '1',
                'madoguchi_attribute' => 'test',
                'madoguchi_channel' => 'test',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '4',
                'user_id' => '4',
                'project_id' => '2',
                'is_madoguchi' => '0',
                'madoguchi_attribute' => 'test',
                'madoguchi_channel' => 'test',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '5',
                'user_id' => '5',
                'project_id' => '3',
                'is_madoguchi' => '1',
                'madoguchi_attribute' => 'test',
                'madoguchi_channel' => 'test',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
