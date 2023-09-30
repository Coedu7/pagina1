<!-- empleados femeninos -->
<!-- hombres casados y que ganen  +2500 -->
<!-- viudas que ganan mas de 1000 -->
<!-- edad promedio de hombres -->




<?php
session_start();

$primo = $_SESSION['primo'];
$secondo = $_SESSION['secondo'];
$terzo = $_SESSION['terzo'];
$quarto = $_SESSION['quarto'];
$quinto = $_SESSION['quinto'];

// include_once('assets/contador.php');holaprimo

$fem = 0;
$casDin = 0;
$viuMid = 0;
$suma = 0;
$contador = 0;
$promedio = 0;

for ($i=0; $i < 5; $i++) { 
    switch ($i) {
        case '0':
            if ($primo['genero']=='f') {
                $fem++;
                if ($primo['estado']=='v' && $primo['sueldo']!='s') {
                    $viuMid++;
                }                
            } else if ($primo['genero']=='m') {
                $suma += intval($primo['edad']);
                $contador++;
                if ($primo['sueldo'] == 'l' && $primo['estado']=='c') {
                    $casDin++;
                }                
            }
            break;
        case '1':
            if ($secondo['genero']=='f') {
                $fem++;
                if ($secondo['estado']=='v' && $secondo['sueldo']!='s') {
                    $viuMid++;
                }                
            } else if ($secondo['genero']=='m') {
                $suma += intval($secondo['edad']);
                $contador++;
                if ($secondo['sueldo'] == 'l' && $secondo['estado']=='c') {
                    $casDin++;
                }                
            }            
            break;
        case '2':
            if ($terzo['genero']=='f') {
                $fem++;
                if ($terzo['estado']=='v' && $terzo['sueldo']!='s') {
                    $viuMid++;
                }                
            } else if ($terzo['genero']=='m') {
                $suma += intval($terzo['edad']);
                $contador++;
                if ($terzo['sueldo'] == 'l' && $terzo['estado']=='c') {
                    $casDin++;
                }                
            }
            break;
        case '3':
            if ($quarto['genero']=='f') {
                $fem++;
                if ($quarto['estado']=='v' && $quarto['sueldo']!='s') {
                    $viuMid++;
                }                
            } else if ($quarto['genero']=='m') {
                $suma += ($quarto['edad']);
                $contador++;
                if ($quarto['sueldo'] == 'l' && $quarto['estado']=='c') {
                    $casDin++;
                }                
            }
            break;
        case '4':
            if ($quinto['genero']=='f') {
                $fem++;
                if ($quinto['estado']=='v' && $quinto['sueldo']!='s') {
                    $viuMid++;
                }                
            } else if ($quinto['genero']=='m') {
                $suma += $quinto['edad'];
                $contador++;
                if ($quinto['sueldo'] == 'l' && $quinto['estado']=='c') {
                    $casDin++;
                }                
            }
            break;
    }
}

echo 'La cantidad de empleados femeninos es: '.$fem;
echo '<br>'.'La cantidad de hombres casados que ganan mas de 2500 Bs. es: '. $casDin;
echo '<br>'.'La cantidad de viudas que ganan mas de 1000 Bs. es: '.$viuMid;
if ($contador != 0) {
    $promedio = $suma/$contador;
    echo '<br>'.'La edad promedio de los trabajadores masculinos es: '.$promedio;
} else {
    echo '<br>'.'No hay trabajadores masculinos';
}
echo '<a href="../index.php">Regresar</a>';

$_SESSION = array();
?>
