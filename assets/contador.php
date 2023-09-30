<?php

if (empty($_SESSION['quinto']) && !empty($_SESSION['primo'])) {
    $_SESSION['quinto'] = $_SESSION['primo'];

} else if (empty($_SESSION['quarto']) && !empty($_SESSION['primo'])) {
    $_SESSION['quarto'] = $_SESSION['primo'];

} else if (empty($_SESSION['terzo']) && !empty($_SESSION['primo'])) {
    $_SESSION['terzo'] = $_SESSION['primo'];

} else if (empty($_SESSION['secondo']) && !empty($_SESSION['primo'])) {
    $_SESSION['secondo'] = $_SESSION['primo'];

} else {
    //echo 'lito';
} 

//$_SESSION=array(); 


 if (!empty($_SESSION['secondo']['nombre'])) {
    //echo '<br>'.'Segundo: '.$_SESSION['secondo']['nombre'];
    //echo 'deberia funcionar?';
    header("Location:  ./assets/resultados.php");
}
if (!empty($_SESSION['terzo']['nombre'])) {
    echo '<br>'.'Tercero: '.$_SESSION['terzo']['nombre'];
}
if (!empty($_SESSION['quarto']['nombre'])) {
    echo '<br>'.'Cuarto: '.$_SESSION['quarto']['nombre'];
}
if (!empty($_SESSION['quinto']['nombre'])) {
    echo '<br>'.'Quinto: '.$_SESSION['quinto']['nombre'].'<br>';
}
if (!empty($_SESSION['primo']['nombre'])) {
    echo '<br>'.'Primero: '.$_SESSION['primo']['nombre'];
}









?>