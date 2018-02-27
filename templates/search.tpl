<div class="col-sm-9 padding-right">
    <div class="features_items">
        <h2 class="title text-center">Результаты поиска</h2>
        {section loop=$items name=i}
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="image/items/{$items[i].photo}" width="300px" height="300px" alt="" />
                            <h2>{$items[i].price}</h2>
                            <p><a href="product.php?id={$items[i].id}">{$items[i].nameProd} {$items[i].model}</a></p>
                            <a href="basket.php?id={$items[i].id}&mode=add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                        </div>
                    </div>
                </div>
            </div>
        {/section}
    </div>
    <div>