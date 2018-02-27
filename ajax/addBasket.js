$(document).ready(function () {
   $("#buy").click(function () {
       buy();
   });
});
function buy() {
    var count=$("#pCount").val();
    var id=$("#pId").val();
    $.ajax({
        method:"get",
        url:"basket.php",
        data:{count:count, id:id, mode:"add"},
        success:function (res) {
            $("#res").text("Товар добавлен в корзину");
        },
        error:function () {
            alert("Ошибка добавления товара в корзину. Свяжитесь с администратором сайта.")
        }
    })
}