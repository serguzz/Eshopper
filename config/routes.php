<?php

return array (

  'Eshopper/product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
  'Eshopper/catalog/page-([0-9]+)' => 'catalog/index/$1', 
  'Eshopper/catalog' => 'catalog/index',      // actionIndex in CatalogController

  'Eshopper/category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory in CatalogController
  'Eshopper/category/([0-9]+)' => 'catalog/category/$1',  // actionCategory in CatalogController

  'Eshopper/cart/checkout' => 'cart/checkout', // actionCheckOut в CartController
  'Eshopper/cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController
  'Eshopper/cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
  'Eshopper/cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
  'Eshopper/cart' => 'cart/index', // actionIndex в CartController

  'Eshopper/user/register' => 'user/register', // actionRegister in UserController
  'Eshopper/user/login' => 'user/login',
  'Eshopper/user/logout' => 'user/logout',

  'Eshopper/cabinet/edit' => 'cabinet/edit',
  'Eshopper/cabinet' => 'cabinet/index',

    // Управление товарами:
  'Eshopper/admin/product/create' => 'adminProduct/create',
  'Eshopper/admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
  'Eshopper/admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
  'Eshopper/admin/product' => 'adminProduct/index',
  // Управление категориями:
  'Eshopper/admin/category/create' => 'adminCategory/create',
  'Eshopper/admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
  'Eshopper/admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
  'Eshopper/admin/category' => 'adminCategory/index',
  // Управление заказами:
  'Eshopper/admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
  'Eshopper/admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
  'Eshopper/admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
  'Eshopper/admin/order' => 'adminOrder/index',
  // Админпанель:
  'Eshopper/admin' => 'admin/index',

  'Eshopper/contact' => 'site/contact',
  'Eshopper' => 'site/index',         // actionIndex в SiteController
);
