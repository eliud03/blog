<?php

function comprobar_cadena($dato)
{
	
	//echo "$dato <br>";
    //compruebo que los caracteres sean los permitidos
    $permitidos = utf8_decode("áéíóúÁÉÍÓÚabcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ ");
	$permitidos; 
    for ($i = 0; $i < strlen($dato); $i++)
    {
        if (strpos($permitidos, substr($dato, $i, 1)) === false)
        {
            return false;
        }
    }
    return true;
}

function comprobar_alfaNumerico($dato)
{
    //compruebo que los caracteres sean los permitidos
    $permitidos = utf8_decode("abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ 0123456789.+-");
    for ($i = 0; $i < strlen($dato); $i++)
    {
        if (strpos($permitidos, substr($dato, $i, 1)) === false)
        {
            return false;
        }
    }
    return true;
}

function comprobar_telefono($dato)
{
    //compruebo que los caracteres sean los permitidos
    $permitidos = "0123456789 -";
    for ($i = 0; $i < strlen($dato); $i++)
    {
        if (strpos($permitidos, substr($dato, $i, 1)) === false)
        {
            return false;
        }
    }
    return true;
}

function sangre($dato)
{
    //compruebo que los caracteres sean los permitidos
    $permitidos = "aboABO+-";
    for ($i = 0; $i < strlen($dato); $i++)
    {
        if (strpos($permitidos, substr($dato, $i, 1)) === false)
        {
            return false;
        }
    }
    return true;
}

function comprobar_promedio($dato)
{
    //compruebo que los caracteres sean los permitidos
    $permitidos = "0123456789.";
    for ($i = 0; $i < strlen($dato); $i++)
    {
        if (strpos($permitidos, substr($dato, $i, 1)) === false)
        {
            return false;
        }
    }
    return true;
}

function comprobar_fecha($dato)
{
    //compruebo que los caracteres sean los permitidos
    $permitidos = "0123456789 -/";
    for ($i = 0; $i < strlen($dato); $i++)
    {
        if (strpos($permitidos, substr($dato, $i, 1)) === false)
        {
            return false;
        }
    }
    return true;
}


function comprobar_numeros($dato)
{
    //compruebo que los caracteres sean los permitidos
    $permitidos = "0123456789";
    for ($i = 0; $i < strlen($dato); $i++)
    {
        if (strpos($permitidos, substr($dato, $i, 1)) === false)
        {
            return false;
        }
    }
    return true;
}

function valida_email($email)
{
	if (preg_match("/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email))
    {
		return true;
    } else
    {
		return false;
    }
}
?>