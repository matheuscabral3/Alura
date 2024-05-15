$(document).ready(function () {
    // JAVASCRIPT PURO 
    // var botao = document.querySelector('button');
    // botao.addEventListener('click', function(e) {
    //     e.preventDefault();
    //     alert('Fui clicado!');
    // });
    // console.log('Arquivo carregado!');

    let numeroClicado = '';
    // jQuery
    $(".telefoneDDD").inputmask("(99) 99999-9999");
    // $(".telefoneSemDDD").inputmask("9999-9999");

    $("input:button").click(function (e) {
        // Ir adicionando conforme for clicando nos números.
        numeroClicado += e.target.defaultValue;

        if (numeroClicado.length < 12) {
            $("#txtTelefoneDDD").inputmask("(99) 99999-9999")[0].value = numeroClicado;
            // $("#txtTelefone2").inputmask("9999-9999")[0].value = numeroClicado;
        } else {
            alert('Excedeu os números de caracteres');
        }
    });

    $("#limparNumero").click(function () {
        $("#txtTelefoneDDD").inputmask("(99) 99999-9999")[0].value = "";
    });

});


