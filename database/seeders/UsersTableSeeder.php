<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::factory()->count(50)->create();
      $user=User::find(1);
      $user->name='张三';
      $user->email='zs@example.com';
      $user->save();
    }
}
