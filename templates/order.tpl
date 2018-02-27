<h2>Заказ товаров</h2>
<form action="order.php" method="post">
    <table border="1">
        <tr>
            <th>№</th>
            <th>Модель</th>
            <th>Цена</th>
            <th>Количество</th>
            <th>Сумма</th>
            <th>Фото</th>
            <th>Удалить</th>
        </tr>
        {section loop=$items name=i}
            <tr>
                <td>{$number++}</td>
                <td>{$items[i].model}</td>
                <td>{$items[i].price}</td>
                <td><input type="number" name="count{$items[i].id}" value="{$items[i].count}" min="1" max="{$items[i].maxCount}"></td>
                <td>{$items[i].summ}</td>
                <td><img src="image/items/{$items[i].photo}" WIDTH="100px"></td>
                <td><a href="basket.php?id={$items[i].id}&mode=del&script=order">Х</a></td>
            </tr>
        {/section}
        <tr>
            <th colspan="8"><input type="submit" name="send" value="Пересчитать"></th>
        </tr>
        <tr>
            <th colspan="3">ИТОГО:</th>
            <th colspan="4">{$totalSumm}</th>
        </tr>
        <tr>
            <td colspan="3"><a href="basket.php?mode=clear">Очистить</a></td>
            <td colspan="4"><a {if isset($sesId)}href="order2.php"{else}href="login.php"{/if}>Подтвердить</a></td>
        </tr>
    </table>
</form>
<form action="order.php" method="post">
<section id="cart_items">
    <div class="container">
        <h2>Корзина</h2>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Товар</td>
                    <td class="description">Название</td>
                    <td class="price">Цена</td>
                    <td class="quantity">Количество</td>
                    <td class="total">Сумма</td>
                    <td>Удалить товар</td>
                </tr>
                </thead>
                <tbody>
                {section loop=$items name=i}
                <tr>
                    <td class="cart_product">
                        <a href=""><img src="image/items/{$items[i].photo}" alt="" width="300px" height="auto"></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">{$items[i].model}</a></h4>
                        <p>Web ID: 1089772</p>
                    </td>
                    <td class="cart_price">
                        <p>{$items[i].price}</p>
                    </td>
                    <td class="cart_quantity">

                        <div class="cart_quantity_button">
                            <a class="cart_quantity_up" href=""> + </a>
                            <input class="cart_quantity_input" type="number" name="quantity" value="{$items[i].count}" min="1" max="{$items[i].maxCount}" autocomplete="off" size="2">
                            <a class="cart_quantity_down" href=""> - </a>
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">{$items[i].summ}</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_button" href="basket.php?id={$items[i].id}&mode=del"><i class="fa fa-times">Удалить</i></a>
                    </td>
                </tr>
                {/section}
                </tbody>
            </table>
        </div>
    </div>
</section>
<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>Обновите заказ или завершите</h3>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Стоимость товаров: <span>{$totalSumm}</span></li>
                        <li>Стоимость доставки <span>Бесплатно</span></li>
                        <li>ИТОГО: <span>{$totalSumm}</span></li>
                    </ul>
                    <a class="btn btn-default update" href="basket.php?mode=clear">Очистить корзину</a>
                    <a class="btn btn-default update" href="">Обновить</a>

                    <a class="btn btn-default check_out" href="order2.php">Подтвердить</a>
                </div>
            </div>
        </div>
    </div>
</section>
</form>