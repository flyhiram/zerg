<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/*return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];*/

use think\Route;

//banner
Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');

//theme
Route::get('api/:version/theme','api/:version.Theme/getSimpleList');
Route::get('api/:version/theme/:id','api/:version.Theme/getComplexOne');

//product
Route::get('api/:version/product/recent','api/:version.Product/getRecent');
Route::get('api/:version/product/by_category','api/:version.Product/getAllInCategory');
Route::get('api/:version/product/:id','api/:version.Product/getOne');

//category
Route::get('api/:version/category/all','api/:version.Category/getAllCategories');

//token
Route::post('api/:version/token/user','api/:version.Token/getToken');

//address
Route::post('api/:version/address','api/:version.Address/createOrUpdateAddress');

//order
Route::post('api/:version/Order','api/:version.Order/placeOrder');
