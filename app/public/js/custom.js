$(document).ready(function(){

    $('.tabs').tabs();
    $('.dropdown-trigger').dropdown();
    $('.modal').modal();

    $("#body-content").fadeOut('500').html("").load("Accueil").fadeIn('500');


    $('#Logout').click(function() {
        $.get("logout");
    });

    $('#Accueil').click(function() {
        $("#body-content").fadeOut(100).load("Accueil", function () {
            $('#body-content').fadeIn(100);
        });
    });

    $('#Login').click(function() {
        $("#body-content").fadeOut(100).load("app_login", function () {
            $('#body-content').fadeIn(100);
        });
    });

    $('#Gerer').click(function() {
        $("#body-content").fadeOut(100).load("Admin/Reservations", function () {
            $('#body-content').fadeIn(100);
        });
    });

    $('#Informations').click(function() {
        $("#body-content").fadeOut(100).load("Informations", function () {
            $('#body-content').fadeIn(100);
        });
    });

    $('#Reservations').click(function() {
        $("#body-content").fadeOut(100).load("Reservations", function () {
            $('#body-content').fadeIn(100);
        });
    });
});