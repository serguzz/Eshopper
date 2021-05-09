<?php

class CatalogController {

  public function actionIndex($page = 1)
  {
      $categories = array();
      $categories = Category::getCategoriesList();

      $allProducts = array();
      $allProducts = Product::getAllProductsList($page);

      $total = Product::getTotalProducts();

      // Создаем объект Pagination - постраничная навигация
      $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');


      require_once (ROOT.'/views/catalog/index.php');
      return true;
  }

  public function actionCategory($categoryId, $page = 1)
  {
    //  echo 'Category: '.$categoryId;
    //  echo '<br>Page: '.$page;

      $categories = array();
      $categories = Category::getCategoriesList();

      $categoryProducts = array();
      $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

      $total = Product::getTotalProductsInCategory($categoryId);

      // Создаем объект Pagination - постраничная навигация
      $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

      require_once (ROOT.'/views/catalog/category.php');
      return true;


  }

}
