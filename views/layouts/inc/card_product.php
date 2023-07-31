<?php
$products = \app\models\db\Products::find()->all();
foreach ($products as $product) {?>

    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item c-<?php echo $product['id']?>" data-id='<?php echo $product['id']?>'>
        <!-- Block2 -->
        <div class="block2">
            <div class="block2-pic hov-img0">
                <img src="images/product-01.jpg" alt="IMG-PRODUCT">

               <a href="#!" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1"> <!-- файл js-->
                    Quick View
               </a>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                        <?php echo $product['title']?>
                    </a>

                    <span class="stext-105 cl3">
									$16.64
								</span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php }?>