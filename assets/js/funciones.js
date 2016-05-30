// JavaScript Document

function alfaNumerico(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toUpperCase();
       caracteres = " áéíóúabcdefghijklmnñopqrstuvwxyz0123456789ÑABCDEFGHIJKLMNOPQRSTUVWXYZ";
       especiales = [8, 32, 46];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(caracteres.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

function users(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toUpperCase();
       caracteres = " áéíóúabcdefghijklmnñopqrstuvwxyz0123456789ÑABCDEFGHIJKLMNOPQRSTUVWXYZ";
       especiales = [8, 46, 45, 95];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(caracteres.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
	
function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toUpperCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÑABCDEFGHIJKLMNOPQRSTUVWXYZÑ";
       especiales = [8, 32];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

function soloFecha(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       numeros = "0123456789/-";
       especiales = [8];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(numeros.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       numeros = "0123456789";
       especiales = [8];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(numeros.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
	
function promedio(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       numeros = "0123456789";
       especiales = [8, 46];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(numeros.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
	
function tipoDeSangre(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "aboABO+-";
       especiales = [8, 32];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
	
function telefonos(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       numeros = "0123456789-";
       especiales = [8];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(numeros.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
}

function pass(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toUpperCase();
       caracteres = "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ0123456789._-";
       especiales = [8, 32, 46];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(caracteres.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }