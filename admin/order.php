<?php
require_once ("header.php");
$smarty_order=new Smarty();
$query="SELECT idClient, fio, email, address, clients.info AS clientsInfo, phone, idProd, model, price, relation.count AS relationCount, items.photo AS itemsPhoto, orderDate FROM clients INNER JOIN relation ON clients.id=relation.idClient INNER JOIN items ON relation.idItems=items.id WHERE status=0 ORDER BY orderDate DESC, idClient DESC";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса списка заказов");
$order=array();
$totalSumm=0;
$change=0;
while ($next=mysqli_fetch_array($result)){
    if(empty($next['itemsPhoto'])){
        $photo='nopic.jpg';
    }else{
        $photo=$next['itemsPhoto'];
    }
    if($change!=$next['idClient']){
        $queryChange="SELECT idItems FROM relation WHERE idClient='".$next['idClient']."' AND orderDate='".$next['orderDate']."'";
        $resultChange=mysqli_query($dbc, $queryChange) or die("Ошибка запроса смены");
        $countRows=mysqli_num_rows($resultChange);
        $rows=1;
        $totalSumm=0;
    }
    $summ=$next['price']*$next['relationCount'];
    $totalSumm+=$summ;
    $order[]=array("idClient"=>$next['idClient'], "change"=>$change, "summ"=>$summ, "totalSumm"=>$totalSumm, "rows"=>$rows, "countRows"=>$countRows, "fio"=>$next['fio'], "email"=>$next['email'], "address"=>$next['address'], "clientsInfo"=>$next['clientsInfo'], "phone"=>$next['phone'], "idProd"=>$next['idProd'], "model"=>$next['model'], "price"=>$next['price'], "count"=>$next['relationCount'], "photo"=>$photo);
    if($change!=$next['idClient']){
        $change=$next['idClient'];
    }
    $rows++;
}
print_r($order);
$smarty_order->assign("order", $order);
$queryProd="SELECT id, name FROM producer";
$resultProd=mysqli_query($dbc, $queryProd) or die("Ошибка запроса производителя");
$producer=array();
while ($nextProd=mysqli_fetch_array($resultProd)){
    $producer[]=array("id"=>$nextProd['id'], "name"=>$nextProd['name']);
}
$smarty_order->assign("producer", $producer);
$smarty_order->assign("number", 1);
$content=$smarty_order->fetch("order.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);