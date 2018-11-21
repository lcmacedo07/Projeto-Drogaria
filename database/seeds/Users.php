<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
         public function run() {
        if (DB::table('users')->get()->count() == 0) {
            DB::table('users')->insert([
                    [
                    'id' => 1,
                    'name' => 'Leandro Macedo',
                    'genre' => 'M',
                    'date_of_birth' => '1999-04-06',
                    'cpf' => '000.000.000-01',
                    'rg' => '000.000 SSP-BR',
                    'telephone' => '(00)0000-0000',
                    'cellphone' => '(00)0000-0000',
                    'cellphone2' => '(00)0000-0000',
                    'email' => 'superadmin@gmail.com',
                    'password' => bcrypt('123456'),
                    'type' => 'ADM',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 2,
                    'name' => 'Admin',
                    'genre' => 'M',
                    'date_of_birth' => '1999-04-06',
                    'cpf' => '000.000.000-01',
                    'rg' => '000.000 SSP-BR',
                    'telephone' => '(00)0000-0000',
                    'cellphone' => '(00)0000-0000',
                    'cellphone2' => '(00)0000-0000',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('123456'),
                    'type' => 'ADM',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 3,
                    'name' => 'Farmaucetico',
                    'genre' => 'M',
                    'date_of_birth' => '1999-04-06',
                    'cpf' => '000.000.000-01',
                    'rg' => '000.000 SSP-BR',
                    'telephone' => '(00)0000-0000',
                    'cellphone' => '(00)0000-0000',
                    'cellphone2' => '(00)0000-0000',
                    'email' => 'farmaucetico@gmail.com',
                    'password' => bcrypt('123456'),
                    'type' => 'PHARMACEUTICAL',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 4,
                    'name' => 'Contador',
                    'genre' => 'M',
                    'date_of_birth' => '1999-04-06',
                    'cpf' => '000.000.000-01',
                    'rg' => '000.000 SSP-BR',
                    'telephone' => '(00)0000-0000',
                    'cellphone' => '(00)0000-0000',
                    'cellphone2' => '(00)0000-0000',
                    'email' => 'contador@gmail.com',
                    'password' => bcrypt('123456'),
                    'type' => 'COUNTER',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 5,
                    'name' => 'Funcionario',
                    'genre' => 'M',
                    'date_of_birth' => '1999-04-06',
                    'cpf' => '000.000.000-01',
                    'rg' => '000.000 SSP-BR',
                    'telephone' => '(00)0000-0000',
                    'cellphone' => '(00)0000-0000',
                    'cellphone2' => '(00)0000-0000',
                    'email' => 'funcionario@gmail.com',
                    'password' => bcrypt('123456'),
                    'type' => 'EMPLOYEE',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    
            ]);
        } else {
            echo "\e[31m Users is not table empty. Not seed.\e";
        }
    }

}

