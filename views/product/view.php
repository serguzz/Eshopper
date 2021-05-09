<?php include ROOT.'/views/layouts/header.php'; ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                              <?php foreach ($categories as $categoryItem): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a href='/Eshopper/category/<?php echo $categoryItem['id'];?>'>
                                            <?php echo $categoryItem['name'];?>
                                          </a>
                                        </h4>
                                    </div>
                                </div>
                              <?php endforeach; ?>

                            </div><!--/categories-of products-->

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                        <img src="/Eshopper/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                        <h2>
                                          <?php echo $product['name']; ?>
                                        </h2>
                                        <p>
                                          <?php echo 'Код товара: '.$product['code']; ?>
                                        </p>
                                        <span>
                                            <span>
                                              <?php echo 'US $'.$product['price']; ?>
                                            </span>
                                            <label>Количество:</label>
                                            <input type="text" value="3" />
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                        </span>
                                        <p><b>Наличие:</b> На складе</p>
                                        <p><b>Состояние:</b> Новое</p>
                                        <p><b>Производитель:</b><?php echo $product['brand']; ?></p>
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>Описание товара</h5>
                                    <?php echo $product['description']; ?>

                                    <p>Разнообразный и богатый опыт постоянный количественный рост и
                                        сфера нашей активности требуют определения и уточнения направлений
                                        прогрессивного развития. Таким образом реализация намеченных плановых
                                        заданий требуют определения и уточнения форм развития.</p>

                                    <p>Повседневная практика показывает, что новая модель организационной
                                        деятельности способствует подготовки и реализации позиций, занимаемых
                                        участниками в отношении поставленных задач. Таким образом постоянное
                                        информационно-пропагандистское обеспечение нашей деятельности влечет
                                        за собой процесс внедрения и модернизации форм развития.</p>
                                </div>
                            </div>
                        </div><!--/product-details-->

                    </div>
                </div>
            </div>
        </section>


        <br/>
        <br/>

<?php include ROOT.'/views/layouts/footer.php'; ?>
