<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
if (strlen($_GET['nome']) > 3 && is_numeric($_GET['età']) && stripos($_GET['mail'], '@') !== false) {
    echo "Accesso Consentito";
} else {
    echo "Accesso Negato";
}
?>