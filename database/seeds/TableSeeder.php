<?php

use App\Question;
use App\User;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create();
        factory(Question::class, 10)->create([
            'user_id' => 1
        ]);
    }
}
