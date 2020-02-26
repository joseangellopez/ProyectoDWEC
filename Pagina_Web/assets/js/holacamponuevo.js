$(document).ready(function () {
        $(".table2").show();

    $(".table2").hide();
    $(".table3").hide();
    $(".table4").hide();
    $("#1").click(function () {
        $(".table1").show();
        $(".table2").hide();
        $(".table3").hide();
        $(".table4").hide();
    });

    $("#2").click(function () {
        $(".table1").hide();
        $(".table2").show();
        $(".table3").hide();
        $(".table4").hide();
    });
    $("#3").click(function () {
        $(".table1").hide();
        $(".table2").hide();
        $(".table3").show();
        $(".table4").hide();
    });
    $("#4").click(function () {
        $(".table1").hide();
        $(".table2").hide();
        $(".table3").hide();
        $(".table4").show();
    });


});
