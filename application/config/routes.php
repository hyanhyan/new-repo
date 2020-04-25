<?php
return array(
    'admin/product/view/([1-9]+)' => 'admin/product/view/$1',
    'admin/product/update/([1-9]+)' => 'admin/product/update/$1',
    'admin/product/delete/([1-9]+)' => 'admin/product/delete/$1',
    'admin/product/create' => 'admin/product/create',
    'admin/product' => 'admin/product/index',
    'admin/category/view/([1-9]+)' => 'admin/category/view/$1',
    'admin/category/update/([1-9]+)' => 'admin/category/update/$1',
    'admin/category/delete/([1-9]+)' => 'admin/category/delete/$1',
    'admin/category/create' => 'admin/category/create',
    'admin/category/([1-9]+)' => 'admin/category/index/$1',
    'admin/dashboard/login'=> 'admin/dashboard/login',
    'admin' => 'admin/dashboard/index',
    'error' => 'site/error',
    'user/login' => 'user/login',
    'user/register' => 'user/register',
    'site/contact' => 'site/contact',
    '' => 'site/index',
);