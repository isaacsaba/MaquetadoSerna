$('#btnslider6').click(function(){
    $('#section7').css('display','flex');
    $('#section6').css('display','none');
    $('#section8').css('display','none');
});
$('#btnslider7').click(function(){
    $('#section8').css('display','flex');
    $('#section6').css('display','none');
    $('#section7').css('display','none');
})
$('#btnslider8').click(function(){
    $('#section6').css('display','flex');
    $('#section7').css('display','none');
    $('#section8').css('display','none');
})


function send(pagina){
    let nombre = $('#name').val()
    let telefono = $('#tel').val()
    let email = $('#email').val()
    let mensaje = $('#msg').val()
    $.ajax({
        url : 'PHP/Email.php?nombre='+nombre+'&telefono='+telefono+'&email='+email+'&mensaje='+mensaje,
        type : 'POST',
        success : function() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Mensaje Enviado',
                showConfirmButton: false,
                timer: 2500
              }).then(() => { window.location.href = pagina})
        },
        error : function(jqXHR, status, error) {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Lamentamos el inconveniente',
                text: 'Si el problema persiste le dejamos nuestro contacto directo contactoweb@sernaabogados.com.mx',
                showConfirmButton: false,
                timer: 8000
              })
           
        },
    });
}