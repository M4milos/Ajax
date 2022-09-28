$('#form1').submit(function(e){
    e.preventDefault();
    var nome = $('#nome').val();
    var estado = $('#estado').val();
    var cidade = $('#cidade').val();

    // console.log(nome, estado, cidade);
    $.ajax({
        url: 'acao.php',
        method: 'POST',
        data: {name: nome, state: estado, city: cidade},
        dataType: `JSON`
    }).done(function(result){
        $('#nome').val('');
        $('#estado').val('');
        $('#cidade').val('');
        console.log(result);    
        getPais();
    });
});

function getPais(){
    $.ajax({
        url: 'mostra.php',
        method: 'GET',
        dataType: `JSON`
    }).done(function(result){
        var resultado = document.querySelector('#resultado');
                while(resultado.firstChild){
                    resultado.firstChild.remove();
                }
        for (var i = 0; i < result.length; i++) {
            $('#resultado').prepend('<tr><th>Nome</th><th>Estado</th><th>Cidade</th></tr><tr><td>'+result[i].nome+'</td><td>'+result[i].estado+'</td><td>'+result[i].cidade+'</td></tr>');
        }
        console.log(result);
    });
}

getPais();