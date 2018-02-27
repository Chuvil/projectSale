<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Категории товаров</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            {section loop=$category name=i}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#cat{$category[i].id}">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            {$category[i].name}
                        </a>
                    </h4>
                </div>
                <div id="cat{$category[i].id}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            {section loop=$producer name=x}
                            <li><a href="catalog.php?idProd={$producer[x].id}&idCat={$category[i].id}">{$producer[x].name}</a></li>
                            {/section}
                        </ul>
                    </div>
                </div>
            </div>
            {/section}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Kids</a></h4>
                </div>
            </div>
        </div><!--/category-products-->
        <div class="brands_products"><!--brands_products-->
            <h2>Производители</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    {section loop=$producer name=i}
                    <li><a href="catalog.php?idProd={$producer[i].id}">{$producer[i].name}</a></li>
                    {/section}
                </ul>
            </div>
        </div>

        <div class="price-range"><!--price-range-->
            <h2>Price Range</h2>
            <div class="well text-center">
                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
            </div>
        </div><!--/price-range-->
    </div>
</div>