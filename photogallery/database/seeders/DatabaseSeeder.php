<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
  {
       \App\Models\User::factory(10)->create();
       \App\Models\Album::factory(10)->create();
      \App\Models\Photo::factory(10)->create();
//
//   User::factory(20)->has(
//       Album::factory(10)->has(
//           Photo::factory(20)
//)
//)->create()

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
