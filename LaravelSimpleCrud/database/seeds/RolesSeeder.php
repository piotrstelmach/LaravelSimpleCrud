<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'permissions' => [
                'create-employee' => true,
                'delete-employee' => true,
                'update-employee' =>true,
                'read-employee' => true
            ]
        ]);
    }
}
