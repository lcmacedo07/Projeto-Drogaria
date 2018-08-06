<?php

use Illuminate\Database\Seeder;

class RolesUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if (DB::table('role_user')->get()->count() == 0) {
            DB::table('role_user')->insert([
                /* superAdmin */
                ['role_id' => 1, 'user_id' => 1],
                /* Admin */
                ['role_id' => 2, 'user_id' => 2],
                /* Funcionario */
                ['role_id' => 3, 'user_id' => 5],
                /* Contador */
                ['role_id' => 4, 'user_id' => 4],
                /* Farmaceutico */
                ['role_id' => 5, 'user_id' => 3],
            ]);
        } else {
            echo "\e[31m Role_User is not table empty. Not seed.\e";
        }
    }

}
