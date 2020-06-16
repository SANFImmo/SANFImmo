$("#btnMenu").on("click", function () {
        $("#divMenu").toggle();
});

if($('#menuCol').height() < $('#contentProperty').outerHeight()){
$("#menuCol").css("height","1100px");
}else if($('#menuCol').height() <$('#contentContact').outerHeight()){
        $("#menuCol").css("height","850px");
}