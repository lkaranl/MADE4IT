<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     User::create([
          'id'      => '1',
          'name'     => 'Admin',
          'surname'  => 'NBS',
          'cpf'      => '26.824.572/0001-89',
          'birth'      => '2017-01-09',
          'sex'     => 'Masculino',
          'city'  => 'Jiparana',
          'state'      => 'Rondonia',
          'cep'     => '76900-825',
          'address'  => 'Rua Joao dos Santos Filho, 123',
          'telephone'      => '(69)98501-5841',
          'email'     => 'seguro@gmail.com',
          'email_verified_at'  => NULL,
          // 'password'      => '$2y$10$4SqGLDH1x4e.W9cXNiks.OxrRZBpS2Zv7oOOcdMYMZr8PhUwvtX.m',
          'password' => Hash::make('12345678'),
          'remember_token'     => NULL,
          'created_at'  => '2021-05-06 00:46:52',
          'is_admin' => 1,
      ]);
        User::create([
          'id'      => '2',
          'name'     => 'Karan',
          'surname'  => 'Luciano',
          'cpf'      => '26.824.572/0001-69',
          'birth'      => '1992-01-09',
          'sex'     => 'Masculino',
          'city'  => 'Jiparana',
          'state'      => 'Rondonia',
          'cep'     => '76900-825',
          'address'  => 'Rua Adeildo, 123',
          'telephone'      => '(69)99237-0744',
          'email'     => 'karan@gmail.com',
          'email_verified_at'  => NULL,
          // 'password'      => '$2y$10$4SqGLDH1x4e.W9cXNiks.OxrRZBpS2Zv7oOOcdMYMZr8PhUwvtX.m',
          'password' => Hash::make('12345678'),
          'remember_token'     => NULL,
          'created_at'  => '2021-05-06 00:46:52',
          'is_admin' => 0,
      ]);
    }
}
