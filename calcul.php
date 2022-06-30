<?php
    if(isset($_POST['submit'])){
        $prenom = $_POST['prenom'];
        $jourNaissance = $_POST['jourNaissance'];
        $moisNaissance = $_POST['moisNaissance'];
        $actualYear = date("Y");
        $today = time();
        $targetDays = mktime(0,0,0,$moisNaissance,$jourNaissance,$actualYear);
        $diff_days = ( $targetDays - $today);
        $days = ($diff_days/86400);
        $days = $days < 0 ? ceil($days) + 365 : ceil($days);
        $prenom = $prenom === '' ? 'Cher utilisateur ' : $prenom ;
        $resultat = ", votre anniversaire est dans $days jours.";
    }
?>