<?php

use Illuminate\Database\Seeder;

class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run() {
        if (DB::table('permissions')->get()->count() == 0) {
            DB::table('permissions')->insert([
                /* permissão gral de administrador (ADMIN) */
                    [
                    'id' => 1,
                    'name' => 'SUPERADMIN',
                    'label' => 'Perfil implantador BemFuncional',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                /* CONFIGURAÇÕES DO SITE/EMPRESA/FINANCEIRO */
                [
                    'id' => 2,
                    'name' => 'ADMIN',
                    'label' => 'Configurações dos dados gerais do Freelancer/Company',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 3,
                    'name' => 'CATEGORYS',
                    'label' => 'Gerencia as categorias',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 4,
                    'name' => 'STORE',
                    'label' => 'Página do cliente para acompanhar seus débitos, pagamentos, receibos e NFs',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 5,
                    'name' => 'PAYMANTS-TYPES',
                    'label' => 'CONFIG PAYMANTS-TYPES',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 6,
                    'name' => 'PAYMANTS',
                    'label' => 'CONFIG PAYMANTS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 7,
                    'name' => 'CREDITS-TYPES',
                    'label' => 'CONFIG CREDITS-TYPES',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 8,
                    'name' => 'CREDITS',
                    'label' => 'CONFIG CREDITS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],    
                    [
                    'id' => 9,
                    'name' => 'SERVICES',
                    'label' => 'CONFIG SERVICES',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 10,
                    'name' => 'BUDGETS',
                    'label' => 'CONFIG BUDGETS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                     [
                    'id' => 11,
                    'name' => 'USERS-ROLES',
                    'label' => 'CONFIG USERS-ROLES',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 12,
                    'name' => 'ROLES',
                    'label' => 'CONFIG ROLES',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 13,
                    'name' => 'PERMISSIONS',
                    'label' => 'CONFIG PERMISSIONS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 14,
                    'name' => 'PERMISSIONS-ROLES',
                    'label' => 'CONFIG PERMISSIONS-ROLES',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 15,
                    'name' => 'PRODUCTS',
                    'label' => 'CONFIG PRODUCTS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 16,
                    'name' => 'PURCHASES',
                    'label' => 'CONFIG PURCHASES',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 17,
                    'name' => 'SALES',
                    'label' => 'CONFIG SALES',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 18,
                    'name' => 'STOCKS',
                    'label' => 'CONFIG STOCKS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 19,
                    'name' => 'USERS',
                    'label' => 'CONFIG USERS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 20,
                    'name' => 'PROVIDERS',
                    'label' => 'CONFIG PROVIDERS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 21,
                    'name' => 'CONVEYORS',
                    'label' => 'CONFIG PROVIDERS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 22,
                    'name' => 'CLIENT',
                    'label' => 'CONFIG PROVIDERS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 23,
                    'name' => 'EMPLOYEE',
                    'label' => 'CONFIG PROVIDERS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                    [
                    'id' => 24,
                    'name' => 'CITYS',
                    'label' => 'CONFIG CITYS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                
            ]);
        } else {
            echo "\e[31m Permission is not table empty. Not seed.\e";
        }
    }

}
