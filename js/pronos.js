$(document).ready(function () {
    $('#add-prono').click(function () {
        $('.add-prono').slideToggle(200);
        $(this).toggleClass("rotate0 rotate225");

        $('#e1').change(function () {
            var equipe1 = $(this).val();
            $('#choix1').val(equipe1);
            $('#choix1').html(equipe1);
        });

        $('#e2').change(function () {
            var equipe2 = $(this).val();
            $('#choix2').val(equipe2);
            $('#choix2').html(equipe2);
        });
    });
});