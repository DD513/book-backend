<?php

namespace Database\Seeders;

use App\Models\book;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;
use DateTimeInterface;

class bookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(book::class,100)->create();
        // book::factory()->create();
        // book::factory()->times(100)->create();
        for ($index = 0; $index < 100; $index++) {
            
            $random = Carbon::now()->subDays(rand(0, 365))->format('Y-m-d H:i:s');
            DB::table('books')->insert([
                'ISBN' => Str::random(13),
                'name' => Str::random(10),
                'author' => Str::random(10),
                'cover' =>'https://'.Str::random(10).'.jpg',
                'abstract' => Str::random(30),
                'created_at' =>  $random,
                'updated_at' =>  $random,
            ]);

        }
        
    }
}
