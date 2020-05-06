<?php
return array(
    'admin/product/view/([1-9]+)' => 'admin/product/view/$1',
    'admin/product/update/([1-9]+)' => 'admin/product/update/$1',
    'admin/product/delete/([1-9]+)' => 'admin/product/delete/$1',
    'admin/product/create' => 'admin/product/create',
    'admin/product/upload/([1-9]+)'=>'admin/product/upload/$1',
    'admin/product/image'=>'admin/product/image',
    'admin/product/([1-9]+)' => 'admin/product/index/1',
    'admin/category/view/([1-9]+)' => 'admin/category/view/$1',
    'admin/category/update/([1-9]+)' => 'admin/category/update/$1',
    'admin/category/delete' => 'admin/category/delete/$i',
    'admin/category/create' => 'admin/category/create',

    'admin/category/([1-9]+)' => 'admin/category/index/$1',

    'admin/dashboard/login'=> 'admin/dashboard/login',
    'admin' => 'admin/dashboard/index',
    'error' => 'site/error',
    'user/logout'=>'user/logout',
    'user/login' => 'user/login',
    'user/profile' => 'user/profile',
    'user/register' => 'user/register',
    'site/contact' => 'site/contact',
    'site/products'=>'site/products',
    'site/filter'=>'site/filter',
    'site/cart'=>'site/cart',
    'site/deleteCart'=>'site/deleteCart',
    'site/about'=>'site/about',
    'site/order'=>'site/order',
    '' => 'site/index',

);
