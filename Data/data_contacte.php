<?php

// require_once '/Applications/MAMP/htdocs/ProjectePsicoWeb/Data/conexion.php'; //<--apple
require_once 'conexion.php'; //<--windows

class datacontacte {

    const TAULA = 'contacte';

    public function Llistar(&$error) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT id_contacte, nom_contacte, cognoms_contacte, email_contacte, data_contacte, telefon_contacte, missatge_contacte FROM ' . self::TAULA);
        $resultat = $consulta->execute();

        if (!$resultat)
            $error=($consulta->errorInfo())[2];
        else
            $arrayRegistres = $consulta->fetchAll();
        
        $conexion = null;
        
        return $arrayRegistres;
    }

    public function selectcontacte() {
        $connexio = new conexion();
        $consulta = $connexio->prepare('SELECT id_contacte FROM ' . self::TAULA);
        $consulta->execute();
        $arrayRegistres = $consulta->fetchAll();
        $conexion = null;
        return $arrayRegistres;
    }

    public function mostrarcontactePerID($ID) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TAULA . ' WHERE id_contacte like :id');
        $consulta->bindParam(':id', $ID);
        $consulta->execute();
        $arrayRegistres = $consulta->fetchAll();
        $conexion = null;
        return $arrayRegistres;
    }

    // public function selectPais() {
    //     $connexio = new Connexio();
    //     $consulta = $connexio->prepare('SELECT * FROM ' . self::TAULA);
    //     $consulta->execute();
    //     $arrayRegistres = $consulta->fetchAll();
    //     $connexio = null;

    //     return $arrayRegistres;
    // }

    public function cercarPerID(&$error, $id_contacte) {
        $registre=array();
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TAULA . ' WHERE id_contacte = :id_contacte');
        $consulta->bindParam(':id_contacte', $id_contacte); 
        $resultat=$consulta->execute();
        $conexion = null;

        if (!$resultat)
            $error=($consulta->errorInfo())[2];
        else
            $registre = $consulta->fetch();

        return $registre;
    }

    public function Insertar(&$error, $nom_contacte, $cognoms_contacte, $email_contacte, $telefon_contacte, $missatge_contacte) {
        $conexion = new conexion();
        
        $consulta = $conexion->prepare('INSERT INTO ' . self::TAULA . ' ( nom_contacte, cognoms_contacte, email_contacte, telefon_contacte, missatge_contacte) VALUES(:nom_contacte, :cognoms_contacte, :email_contacte, :telefon_contacte, :missatge_contacte)');
        
        $consulta->bindParam(':nom_contacte', $nom_contacte);
        $consulta->bindParam(':cognoms_contacte', $cognoms_contacte);
        $consulta->bindParam(':email_contacte', $email_contacte);
        $consulta->bindParam(':telefon_contacte', $telefon_contacte);
        $consulta->bindParam(':missatge_contacte', $missatge_contacte);

        $resultat = $consulta->execute();
        $conexion = null;

        if (!$resultat)
            $error=($consulta->errorInfo())[2];

        return $resultat;
    }

    public function Modificar(&$error, $id_contacte, $nom_contacte, $cognoms_contacte, $email_contacte, $data_contacte, $telefon_contacte, $missatge_contacte ) {
        $conexion = new conexion();

        $consulta = $conexion->prepare('UPDATE ' . self::TAULA . ' SET nom_contacte = :nom_contacte, cognoms_contacte = :cognoms_contacte, email_contacte = :email_contacte, data_contacte = :data_contacte, telefon_contacte = :telefon_contacte, missatge_contacte = :missatge_contacte WHERE id_contacte= :id_contacte');

        $consulta->bindParam(':id_contacte', $id_contacte);
        $consulta->bindParam(':nom_contacte', $nom_contacte);
        $consulta->bindParam(':cognoms_contacte', $cognoms_contacte);
        $consulta->bindParam(':email_contacte', $email_contacte);
        $consulta->bindParam(':data_contacte', $data_contacte);
        $consulta->bindParam(':telefon_contacte', $telefon_contacte);
        $consulta->bindParam(':missatge_contacte', $missatge_contacte);

        $resultat = $consulta->execute();
        $conexion = null;

        if (!$resultat)
            $error=($consulta->errorInfo())[2];

        return $resultat;
    }

    public function Eliminar(&$error, $id_contacte) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TAULA . ' WHERE id_contacte= :id_contacte' );
        $consulta->bindParam(':id_contacte', $id_contacte);
        $resultat=$consulta->execute();
        $conexion = null;

        if (!$resultat)
            $error=($consulta->errorInfo())[2];
        else
            $registre = $consulta->fetch();

        return $resultat;
    }

}

?>