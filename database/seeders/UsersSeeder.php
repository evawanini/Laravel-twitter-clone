<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use SebastianBergmann\LinesOfCode\Counter;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(count:100)->create();
    }
}
