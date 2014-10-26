$(document).ready(function() {
    var sensor = $.url().segment(-1)
    var code;

    if (sensor == 'sensor-de-movimiento')
    {
        code = '-RLLesHI91g'
    }
    else if (sensor == 'contador-de-gotas')
    {
        code = '3P8FPsbseqM'
    } 
    else if (sensor == 'cromatografo-de-gases-mini-gc-plus')
    {
        code = 'cXFxaqs6PGU'
    }
    else if (sensor == 'espectrofotometro-spectrovis-plus')
    {
        code = 'qeUZRxaetTc'
    }
    else if (sensor == 'labquest-2')
    {
        code = 'yNyKZaPFwXQ'
    }
    else if (sensor == 'logger-pro')
    {
        code = 'cprGp0BhmYo'
    }

    $('#thumbs').delegate('img','click', function(){
        $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
        $('#description').html($(this).attr('alt'));
    });

    $('#youtube').on('show', function () {
        $('div.modal-body').html('<iframe width="500" height="281" src="https://www.youtube.com/embed/' + code + '?feature=player_embedded&autoplay=1&enablejsapi=1&showinfo=0&autohide=1&color=white&theme=light" frameborder="0" allowfullscreen></iframe>');  
    });
    $('#youtube').on('hide', function () {
        $('div.modal-body').html('');  
    });

});
