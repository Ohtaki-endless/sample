<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'email' => 'ohtaki@dip.com',
                'password' => bcrypt('password'),
                'name' => '大滝達也',
                'name_romaji' => 'Tatsuya Ohtaki',
                'face_picture_link' => '',
                'post' => 'post',
                'tunag_link' => '',
                'times_link' => '',
                'free_space' => 'free text',
                'work_status' => 'possible',
                'is_admin' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '2',
                'email' => 'aoki@dip.com',
                'password' => bcrypt('password'),
                'name' => '青木大介',
                'name_romaji' => 'Daisuke Aoki',
                'face_picture_link' => '',
                'post' => 'post',
                'tunag_link' => '',
                'times_link' => '',
                'free_space' => 'free text',
                'work_status' => 'possible',
                'is_admin' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '3',
                'email' => 'sato@dip.com',
                'password' => bcrypt('password'),
                'name' => '佐藤薫',
                'name_romaji' => 'Kaoru Sato',
                'face_picture_link' => '',
                'post' => 'post',
                'tunag_link' => '',
                'times_link' => '',
                'free_space' => 'free text',
                'work_status' => 'possible',
                'is_admin' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '4',
                'email' => 'yahata@dip.com',
                'password' => bcrypt('password'),
                'name' => '矢羽田紗知',
                'name_romaji' => 'Sachi Yahata',
                'face_picture_link' => '',
                'post' => 'post',
                'tunag_link' => '',
                'times_link' => '',
                'free_space' => 'free text',
                'work_status' => 'possible',
                'is_admin' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '5',
                'email' => 'okamoto@dip.com',
                'password' => bcrypt('password'),
                'name' => '岡本優希',
                'name_romaji' => 'Yuki Okamoto',
                'face_picture_link' => '',
                'post' => 'post',
                'tunag_link' => '',
                'times_link' => '',
                'free_space' => 'free text',
                'work_status' => 'possible',
                'is_admin' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
