<?php include ROOT.'/views/layouts/header.php'; ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products">
                                <?php foreach ($categories as $categoryItem): ?>
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a href='/Eshopper/category/<?php echo $categoryItem['id'];?>'
                                              class="<?php if($categoryId == $categoryItem['id']) echo 'active'; ?>">

                                              <?php echo $categoryItem['name'];?>
                                            </a>
                                          </h4>
                                      </div>
                                  </div>
                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">
                              <?php echo 'Товары в выбранной катергории: '.$categoryId; ?>
                            </h2>

                            <?php foreach ($categoryProducts as $product): ?>
                              <div class="col-sm-4">
                                  <div class="product-image-wrapper">
                                      <div class="single-products">
                                          <div class="productinfo text-center">
                                              <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                              <h2><?php echo $product['price'];?></h2>
                                              <a href="/Eshopper/product/<?php echo $product['id']?>">
                                                <?php echo 'id='.$product['id'].' '.$product['name'];?>
                                              </a>
                                              <a href=""><p><?php echo 'Категория: '.Product::getCategoryName($product['id']);?></p>
                                              </a>
                                              <a href="" class="btn btn-default add-to-cart"
                                                data-id="<?php echo $product['id'];?>">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                              </a>
                                          </div>

                                          <?php if ($product['is_new']): ?>
                                            <img src="/Eshopper/template/images/home/new.png" class="new" alt="" />
                                          <?php endif; ?>

                                      </div>
                                  </div>
                              </div>
                            <?php endforeach; ?>
                        </div><!--features_items-->

                        <!-- Постраничная навигация -->
                        <?php echo $pagination->get(); ?>

                    </div>
                </div>
            </div>
        </section>

<?php include ROOT.'/views/layouts/footer.php'; ?>
