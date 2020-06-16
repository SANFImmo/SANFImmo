$(".vueimage2").hide();
$(".vueimage3").hide();
$(".image1").css("border-color", "red");

$(".image1").on("click", function() {
    $(".vueimage1").show();
    $(".vueimage2").hide();
    $(".vueimage3").hide();
    $(".image1").css("border-color", "red");
    $(".image2").css("border-color", "black");
    $(".image3").css("border-color", "black");
});
$(".image2").on("click", function() {
    $(".vueimage2").show();
    $(".vueimage1").hide();
    $(".vueimage3").hide();
    $(".image2").css("border-color", "red");
    $(".image1").css("border-color", "black");
    $(".image3").css("border-color", "black");
});
$(".image3").on("click", function() {
    $(".vueimage3").show();
    $(".vueimage2").hide();
    $(".vueimage1").hide();
    $(".image3").css("border-color", "red");
    $(".image2").css("border-color", "black");
    $(".image1").css("border-color", "black");
});