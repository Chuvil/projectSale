<div class="col-sm-9 padding-right">
    <div class="features_items">
        <h2 class="title text-center">Каталог</h2>
        {section loop=$items name=i}
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="product.php?id={$items[i].id}"><img src="image/items/{$items[i].photo}" width="300px" height="300px" alt="" /></a>
                        <h2>{$items[i].price}</h2>
                        <p><a href="product.php?id={$items[i].id}">{$items[i].prodName} {$items[i].model}</a></p>
                        <a href="basket.php?id={$items[i].id}&mode=add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                    </div>
                </div>
            </div>
        </div>
        {/section}
    </div>
<div>
    <table>
        <tr>
            {if $activePage==1}
                <th class="pagination2 active">«</th>
            {else}
                <th class="pagination2"><a href="catalog.php?page={$activePage-1}">«</a></th>
            {/if}
            {section loop=$pagesArray name=i}
                {if $activePage==$pagesArray[i].p}
                    <th class="pagination2 active">{$pagesArray[i].p}</th>
                {else}
                    <th class="pagination2"><a href="catalog.php?page={$pagesArray[i].p}">{$pagesArray[i].p}</a></th>
                {/if}
            {/section}
            {if $activePage==$countPages}
                <th class="pagination2 active">&raquo;</th>
            {else}
                <th class="pagination2"><a href="catalog.php?page={$activePage+1}">&raquo;</a></th>
            {/if}
        </tr>
    </table>
    </div>
</div>