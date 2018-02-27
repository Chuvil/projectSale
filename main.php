<?php
if(isset($page)){
    $query="SELECT title, content, meta_title, meta_desc, meta_keywords FROM settings WHERE page='".$page."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    $next=mysqli_fetch_array($result);
    if(isset($title)){
        $smarty_main->assign("title", $title);
    }else{
        $smarty_main->assign("title", $next['title']);
    }
    if(isset($content)){
        $smarty_main->assign("content", $content);
    }else{
        $smarty_main->assign("content", $next['content']);
    }
    if(isset($meta_title)){
        $smarty_main->assign("meta_title", $meta_title);
    }else{
        $smarty_main->assign("meta_title", $next['meta_title']);
    }
    if(isset($meta_desc)){
        $smarty_main->assign("meta_desc", $meta_desc);
    }else{
        $smarty_main->assign("meta_desc", $next['meta_desc']);
    }
    if(isset($meta_keywords)){
        $smarty_main->assign("meta_keywords", $meta_keywords);
    }else{
        $smarty_main->assign("meta_keywords", $next['meta_keywords']);
    }
    if($page=="index"||$page=="catalog"){
        require_once ("sideList.php");
    }
    if($page=="index"){
        require_once ("featuredItems.php");
    }
    $queryMenu="SELECT name, page FROM settings ORDER BY priority ASC";
    $resultMenu=mysqli_query($dbc, $queryMenu) or die("Ошибка запроса меню");
    $menu=array();
    while ($nextMenu=mysqli_fetch_array($resultMenu)){
        $menu[]=array("name"=>$nextMenu['name'], "page"=>$nextMenu['page']);
    }
    $smarty_main->assign("menu", $menu);
    if(isset($_SESSION['items'])&&count($_SESSION['items'])>0&&$page!="order"){
        $items=array();
        $totalSumm=0;
        foreach ($_SESSION['items'] as $tmp){
            if(empty($tmp['photo'])){
                $photo='nopic.jpg';
            }else{
                $photo=$tmp['photo'];
            }
            $summ=$tmp['price']*$tmp['count'];
            $totalSumm+=$summ;
            $items[]=array("id"=>$tmp['id'], "model"=>$tmp['model'], "price"=>$tmp['price'], "summ"=>$summ, "photo"=>$photo, "count"=>$tmp['count']);
        }
        $smarty_main->assign("items", $items);
        $smarty_main->assign("number", 1);
        $smarty_main->assign("totalSumm", $totalSumm);
    }
    $smarty_main->display("main.tpl");
    mysqli_close($dbc);
}else{
    echo"Error, view is not accecible <a href='index.php'>Home</a>";
}