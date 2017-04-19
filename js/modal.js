$(document).ready(function () {
    $('.open-modal-register').click(function () {
        $('.modal:not(.connexion),.register').fadeIn(200);
        $('.modal:not(.register),.connexion').fadeOut(200);
    });

    $('.open-modal-r').click(function () {
        $('.modal:not(.connexion),.register').fadeIn(200);
        $('.modal:not(.register),.connexion').fadeOut(200);
    });

    $('.modal-r > .fa-times').click(function () {
        $('.modal,.register').fadeOut(200);
    });

    $('.open-modal-connexion').click(function () {
        $('.modal:not(.register),.connexion').fadeIn(200);
        $('.modal:not(.connexion),.register').fadeOut(200);
    });

    $('.open-modal-c').click(function () {
        $('.modal:not(.register),.connexion').fadeIn(200);
        $('.modal:not(.connexion),.register').fadeOut(200);
    });

    $('.modal-c > .fa-times').click(function () {
        $('.modal,.connexion').fadeOut(200);
    });
});