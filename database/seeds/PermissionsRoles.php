<?php

use Illuminate\Database\Seeder;

class PermissionsRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if (DB::table('permission_role')->get()->count() == 0) {
            DB::table('permission_role')->insert([
                /* super admin */
                ['role_id' => 1, 'permission_id' => 1],
                
                /*Admin*/
                ['role_id' => 2, 'permission_id' => 2],
                ['role_id' => 2, 'permission_id' => 3],
                ['role_id' => 2, 'permission_id' => 4],
                ['role_id' => 2, 'permission_id' => 5],
                ['role_id' => 2, 'permission_id' => 6],
                ['role_id' => 2, 'permission_id' => 7],
                ['role_id' => 2, 'permission_id' => 8],
                ['role_id' => 2, 'permission_id' => 9],
                ['role_id' => 2, 'permission_id' => 10],
                ['role_id' => 2, 'permission_id' => 15],
                ['role_id' => 2, 'permission_id' => 16],
                ['role_id' => 2, 'permission_id' => 17],
                ['role_id' => 2, 'permission_id' => 18],
                ['role_id' => 2, 'permission_id' => 19],
                ['role_id' => 2, 'permission_id' => 20],
                ['role_id' => 2, 'permission_id' => 21],
                ['role_id' => 2, 'permission_id' => 22],
                ['role_id' => 2, 'permission_id' => 23],
                ['role_id' => 2, 'permission_id' => 24],
                ['role_id' => 2, 'permission_id' => 25],
                ['role_id' => 2, 'permission_id' => 26],
                
                /*Funcionario*/
                ['role_id' => 3, 'permission_id' => 2],
                ['role_id' => 3, 'permission_id' => 26],
                
                /*Contador*/
                ['role_id' => 4, 'permission_id' => 5],
                ['role_id' => 4, 'permission_id' => 6],
                ['role_id' => 4, 'permission_id' => 7],
                ['role_id' => 4, 'permission_id' => 8],
                ['role_id' => 4, 'permission_id' => 9],
                ['role_id' => 4, 'permission_id' => 10],
                ['role_id' => 4, 'permission_id' => 22],
                ['role_id' => 4, 'permission_id' => 26],

                /*Farmaceutico*/
                ['role_id' => 5, 'permission_id' => 3],
                ['role_id' => 5, 'permission_id' => 4],
                ['role_id' => 5, 'permission_id' => 15],
                ['role_id' => 5, 'permission_id' => 16],
                ['role_id' => 5, 'permission_id' => 17],
                ['role_id' => 5, 'permission_id' => 18],
                ['role_id' => 5, 'permission_id' => 26],
            ]);
        } else {
            echo "\e[31m Permission_Role is not table empty. Not seed.\e";
        }
    }

}