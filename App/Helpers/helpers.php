<?php

use voku\helper\Paginator;
use Illuminate\Database\Capsule\Manager as Capsule;

/** 
 * @comment: toma el string y lo convierte al patrón que designamos
 * @Date: 2021-04-16 16:50:16 
 * @param: $value 
 * @return:string  
 */
function formattedString(String $value)
{
    // remover todo lo que no sea : guion bajo,letras,numeros, espacios
    $value =  preg_replace('![^' . preg_quote('_') . '\pL\pN\s]+!u', '', mb_strtolower($value));

    // reeemplazar guion bajo con -

    $value =  preg_replace('![' . preg_quote('_') . '\s]+!u', '-', mb_strtolower($value));

    //reemplazar espacios con
    return trim($value, '-');
}


function pagination($page, $total, $table, $object)
{


    $pages = new Paginator($page, 'p');
    $pages->set_total($total);

    $data = Capsule::select("SELECT * FROM $table ORDER BY created_at DESC" .  $pages->get_limit());
    $categories = $object->transform($data);
    return [$categories, $pages->page_links()];
}
