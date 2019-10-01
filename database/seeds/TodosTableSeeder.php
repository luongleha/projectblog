<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \DB::table('todos')->insert([
//            'title'  => 'Học lập trình Laravel',
//            'content' => 'Nội dung học bài'
//        ]);

        $faker = \Faker\Factory::create();
        for ($i = 0 ; $i < 200; $i++){
            \DB::table('todos')->insert([
                'user_id'  => $faker->text(10),
                'title'  => $faker->text(20),
                'content' => $faker->text(200)
            ]);
        }
    }
}