$(document).ready(function () {
    $('.donate').click(function (){
        var don = $('#input-don').val();
        if(don >= 1){
            //console.log(don);
            $('#form-donate').submit();
        } else {
            alert('Please pledge at least $1!');
        }
    });
});