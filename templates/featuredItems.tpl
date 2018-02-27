<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Популярные товары</h2>
    {section loop=$items name=i}
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <a href="product.php?id={$items[i].id}"><img src="image/items/{$items[i].photo}" alt="" width="300px" height="300px"></a>
                    <h2>{$items[i].price}</h2>
                    <p><a href="product.php?id={$items[i].id}">{$items[i].prodName} {$items[i].model}</a></p>
                    <a href="basket.php?id={$items[i].id}&mode=add&count=1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                </div>
            </div>
        </div>
    </div>
    {/section}
</div>