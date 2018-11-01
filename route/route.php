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


Route::group('api/:version', function(){

    Route::get('banner/:id', 'api/:version.Banner/getBanner');

    Route::get('theme', 'api/:version.Theme/getSimpleList');

    Route::get('theme/:id', 'api/:version.Theme/getComplexOne');

    Route::get('product/recent', 'api/:version.Product/getRecent');
    Route::get('product/by_category', 'api/:version.Product/getAllInCategory');

    Route::get('category/all', 'api/:version.Category/getCategories');

    Route::post('token/user', 'api/:version.Token/getToken');
});
