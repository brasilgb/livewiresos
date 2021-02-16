<?php

function formatDateTime($value, $format = 'd/m/Y')
{

    return Carbon\Carbon::parse($value)->format($format);
}

function productImagePath($image_name)
{
    return public_path('images/products/' . $image_name);
}

function statusOrder($status)
{
    switch ($status) {
        case null:
            return 'Recebido';
            break;
        case '1':
            return 'Em avaliação';
            break;
        case '2':
            return 'Orçamento gerado';
            break;
        case '3':
            return 'Orçamento aprovado';
            break;
        case '4':
            return 'Na bancada';
            break;
        case '5':
            return 'Serviço concluído';
            break;
        case '6':
            return 'Serviço não efetuado';
            break;
        case '7':
            return 'Ordem fechada';
            break;
        case '8':
            return 'Equipamento entregue';
            break;
    }
}
