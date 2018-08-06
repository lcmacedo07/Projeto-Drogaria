<?php

Route::group(['prefix' => 'restrict', 'middleware' => ['auth']], function() {

    //CATEGORIAS
    Route::resource('categorys', 'Restrict\CategoryController');
    Route::get('categorys/{id}/deletar', 'Restrict\CategoryController@delete');
    //COMPRAS
    Route::resource('purchases', 'Restrict\PurchaseController');
    Route::get('purchases-pdf', 'Restrict\PurchaseController@pdf');
    Route::get('purchases/{id}/deletar', 'Restrict\PurchaseController@delete');
    //VENDAS
    Route::resource('sales', 'Restrict\SaleController');
    Route::get('sales-pdf', 'Restrict\SaleController@pdf');
    Route::get('sales/{id}/deletar', 'Restrict\SaleController@delete');
    //ESTOQUES
    Route::resource('stocks', 'Restrict\StockController');
    Route::get('stocks-pdf', 'Restrict\StockController@pdf');
    Route::get('stocks/{id}/deletar', 'Restrict\StockController@delete');
    //ITEM ORÇAMENTOS
    Route::resource('item_budgets', 'Restrict\ItemBudgetController');
    Route::get('item_budgets/{id}/deletar', 'Restrict\ItemBudgetController@delete');
    //ORÇAMENTOS
    Route::resource('budgets', 'Restrict\BudgetController');
    Route::get('budgets-pdf', 'Restrict\BudgetController@pdf');
    Route::get('budgets/{id}/deletar', 'Restrict\BudgetController@delete');
    //PAGAMENTOS
    Route::resource('paymants', 'Restrict\PaymantController');
    Route::get('paymants-pdf', 'Restrict\PaymantController@pdf');
    Route::get('paymants/{id}/deletar', 'Restrict\PaymantController@delete');
    //TIPOS PAGAMENTOS
    Route::resource('paymants_types', 'Restrict\TypesPaymantController');
    Route::get('paymants_types/{id}/deletar', 'Restrict\TypesPaymantController@delete');
    //CREDITOS
    Route::resource('credits', 'Restrict\CreditController');
    Route::get('credits/{id}/deletar', 'Restrict\CreditController@delete');
    //TIPOS CREDITOS
    Route::resource('credits_types', 'Restrict\TypeCreditController');
    Route::get('credits_types/{id}/deletar', 'Restrict\TypeCreditController@delete');
    //SERVICOS
    Route::resource('services', 'Restrict\ServiceController');
    Route::get('services/{id}/deletar', 'Restrict\ServiceController@delete');
    //USUARIOS
    Route::resource('users', 'Restrict\UsersController');
    Route::get('users/{id}/deletar', 'Restrict\UsersController@delete');
    //USERS FUNCIONARIOS
    Route::resource('users-employees', 'Restrict\UsersEmployeeController');
    Route::get('users-employees/{id}/deletar', 'Restrict\UsersEmployeeController@delete');
    //USERS CLIENTES
    Route::resource('users-clients', 'Restrict\UsersClientController');
    Route::get('users-clients/{id}/deletar', 'Restrict\UsersClientController@delete');
    //CIDADES
    Route::resource('citys', 'Restrict\CityController');
    Route::get('citys/{id}/deletar', 'Restrict\CityController@delete');
    //ENTRADAS
    Route::resource('inputs', 'Restrict\InputController');
    Route::get('inputs/{id}/deletar', 'Restrict\InputController@delete');
    //FORNECEDORES
    Route::resource('providers', 'Restrict\ProviderController');
    Route::get('providers/{id}/deletar', 'Restrict\ProviderController@delete');
    //ITEM ENTRADA
    Route::resource('item_inputs', 'Restrict\ItemInputController');
    Route::get('item_inputs/{id}/deletar', 'Restrict\ItemInputController@delete');
    //ITEM SAIDA
    Route::resource('item_exits', 'Restrict\ItemExitController');
    Route::get('item_exits/{id}/deletar', 'Restrict\ItemExitController@delete');
    //PERMISSION-ROLES
    Route::resource('permission-roles', 'Restrict\PermissionRolesController');
    Route::get('permission-roles/{id}/deletar', 'Restrict\PermissionRolesController@delete');
    //PERMISSION-ROLES
    Route::resource('permissions', 'Restrict\PermissionsController');
    Route::get('permissions/{id}/deletar', 'Restrict\PermissionsController@delete');
    //ROLES
    Route::resource('roles', 'Restrict\RolesController');
    Route::get('roles/{id}/deletar', 'Restrict\RolesController@delete');
    //ROLES USERS
    Route::resource('roles-users', 'Restrict\RolesUserController');
    Route::get('roles-users/{id}/deletar', 'Restrict\RolesUserController@delete');
    //LOJAS
    Route::resource('stores', 'Restrict\StoreController');
    Route::get('stores/{id}/deletar', 'Restrict\StoreController@delete');
    //PRODUTOS
    Route::resource('products', 'Restrict\ProductController');
    Route::get('products/{id}/deletar', 'Restrict\ProductController@delete');
    //SAIDAS
    Route::resource('exits', 'Restrict\ExitController');
    Route::get('exits/{id}/deletar', 'Restrict\ExitController@delete');
    //TRANSPORTADORAS
    Route::resource('conveyors', 'Restrict\ConveyorController');
    Route::get('conveyors/{id}/deletar', 'Restrict\ConveyorController@delete');

    
    //Rota Inical do Dashboard
    Route::get('/', 'Restrict\RestritoController@index');
});

Auth::routes();

/* CONTROLES DO ACESSO PÚBLICO  */
Route::get('/', 'Site\SiteController@index');
Route::get('/home', 'HomeController@index');