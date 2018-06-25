<?php

// require_once '/Applications/MAMP/htdocs/ProjectePsicoWeb/Data/conexion.php'; //<--apple
require_once 'conexion.php'; //<--windows

class datacontacte {

    const TAULA = 'contacte';

    public function Llistar(&$error) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT id_contacte, nom_contacte, cognoms_contacte, email_contacte, data_contacte FROM ' . self::TAULA);
        $resultat = $consulta->execute();

        if (!$resultat)
            $error=($consulta->errorInfo())[2];
        else
            $arrayRegistres = $consulta->fetchAll();
        
        $conexion = null;
        
        return $arrayRegistres;
    }

    // public function Listar(&$error) {
    //     $connexio = new Connexio();
    //     $consulta = $connexio->prepare('SELECT IDpais, nombre, continente, region, superficie, ano_indep, poblacion, experanza_vida, PNB, codigo FROM ' . self::TAULA);
    //     $resultat = $consulta->execute();

    //     if (!$resultat)
    //         $error=($consulta->errorInfo())[2];
    //     else
    //         $arrayRegistres = $consulta->fetchAll();
        
    //     $connexio = null;

    //     return $arrayRegistres;
    // }

    public function selectcontacte() {
        $connexio = new conexion();
        $consulta = $connexio->prepare('SELECT id_contacte FROM ' . self::TAULA);
        $consulta->execute();
        $arrayRegistres = $consulta->fetchAll();
        $conexion = null;
        return $arrayRegistres;
    }

    // selectFAQ-->
    // public function selectContinents() {
    //     $connexio = new Conexio();
    //     $consulta = $connexio->prepare('SELECT DISTINCT continente FROM ' . self::TAULA);
    //     $consulta->execute();
    //     $arrayRegistres = $consulta->fetchAll();
    //     $conexion = null;
    //     return $arrayRegistres;
    // }

    public function mostrarcontactePerID($ID) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TAULA . ' WHERE id_contacte like :id');
        $consulta->bindParam(':id', $ID);
        $consulta->execute();
        $arrayRegistres = $consulta->fetchAll();
        $conexion = null;
        return $arrayRegistres;
    }

    // public function mostrarPaisPerContinent($continent) {
    //     $connexio = new Connexio();
    //     $consulta = $connexio->prepare('SELECT * FROM ' . self::TAULA . ' WHERE continente like :conti');
    //     $consulta->bindParam(':conti', $continent);
    //     $consulta->execute();
    //     $arrayRegistres = $consulta->fetchAll();
    //     $connexio = null;
    //     return $arrayRegistres;
    // }

    public function selectPais() {
        $connexio = new Connexio();
        $consulta = $connexio->prepare('SELECT * FROM ' . self::TAULA);
        $consulta->execute();
        $arrayRegistres = $consulta->fetchAll();
        $connexio = null;

        return $arrayRegistres;
    }

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

    // public function cercarPerIDpais(&$error, $IDpais) {
    //     $connexio = new Connexio();
    //     $consulta = $connexio->prepare('SELECT IDpais, nombre, continente, region, superficie, ano_indep, poblacion, experanza_vida, PNB, codigo FROM ' . self::TAULA . ' WHERE IDpais = :IDpais');
    //     $consulta->bindParam(':IDpais', $IDpais); 
    //     $resultat=$consulta->execute();
    //     $connexio = null;

    //     if (!$resultat)
    //         $error=($consulta->errorInfo())[2];
    //     else
    //         $registre = $consulta->fetch();

    //     return $registre;
    // }

    public function Insertar(&$error, $id_contacte, $nom_contacte, $cognoms_contacte, $email_contacte, $data_contacte) {
        $conexion = new conexion();
        
        $consulta = $conexion->prepare('INSERT INTO ' . self::TAULA . ' (id_contacte, nom_contacte, cognoms_contacte, email_contacte, data_contacte) VALUES(:id_contacte, :nom_contacte, :cognoms_contacte, :email_contacte, :data_contacte)');
        
        $consulta->bindParam(':id_contacte', $id_contacte);
        $consulta->bindParam(':nom_contacte', $nom_contacte);
        $consulta->bindParam(':cognoms_contacte', $cognoms_contacte);
        $consulta->bindParam(':email_contacte', $email_contacte);
        $consulta->bindParam(':data_contacte', $data_contacte);

        $resultat = $consulta->execute();
        $conexion = null;

        if (!$resultat)
            $error=($consulta->errorInfo())[2];

        return $resultat;
    }

    // public function Insertar(&$error, $IDpais, $nom, $continent, $regio, $superficie, $any_indep, $poblacio, $vida, $PNB, $codi) {
    //     $connexio = new Connexio();
        
    //     $consulta = $connexio->prepare('INSERT INTO ' . self::TAULA . ' (IDpais, nombre, continente, region, superficie, ano_indep, poblacion, experanza_vida, PNB, codigo) VALUES(:IDpais, :nom, :continent, :regio, :superficie, :any_indep, :poblacio, :vida, :PNB, :codi)');
        
    //     $consulta->bindParam(':IDpais', $IDpais);
    //     $consulta->bindParam(':nom', $nom);
    //     $consulta->bindParam(':continent', $continent);
    //     $consulta->bindParam(':regio', $regio);
    //     $consulta->bindParam(':superficie', $superficie);
    //     $consulta->bindParam(':any_indep', $any_indep);
    //     $consulta->bindParam(':poblacio', $poblacio);
    //     $consulta->bindParam(':vida', $vida);
    //     $consulta->bindParam(':PNB', $PNB);
    //     $consulta->bindParam(':codi', $codi);

    //     $resultat = $consulta->execute();
    //     $connexio = null;

    //     if (!$resultat)
    //         $error=($consulta->errorInfo())[2];

    //     return $resultat;
    // }

    public function Modificar(&$error, $id_contacte, $nom_contacte, $cognoms_contacte, $email_contacte, $data_contacte ) {
        $conexion = new conexion();

        $consulta = $conexion->prepare('UPDATE ' . self::TAULA . ' SET nom_contacte = :nom_contacte, cognoms_contacte = :cognoms_contacte, email_contacte = :email_contacte, data_contacte = :data_contacte WHERE id_contacte= :id_contacte');

        $consulta->bindParam(':id_contacte', $id_contacte);
        $consulta->bindParam(':nom_contacte', $nom_contacte);
        $consulta->bindParam(':cognoms_contacte', $cognoms_contacte);
        $consulta->bindParam(':email_contacte', $email_contacte);
        $consulta->bindParam(':data_contacte', $data_contacte);

        $resultat = $consulta->execute();
        $conexion = null;

        if (!$resultat)
            $error=($consulta->errorInfo())[2];

        return $resultat;
    }

    // public function Modificar(&$error, $IDpais, $nom, $continent, $regio, $superficie, $any_indep, $poblacio, $vida, $PNB, $codi) {
    //     $connexio = new Connexio();

    //     $consulta = $connexio->prepare('UPDATE ' . self::TAULA . ' SET nombre = :nom, continente = :continent, region = :regio, superficie = :superficie, ano_indep = :any_indep, poblacion = :poblacio, experanza_vida = :vida, PNB = :PNB, codigo = :codi WHERE IDpais = :IDpais');

    //     $consulta->bindParam(':IDpais', $IDpais);
    //     $consulta->bindParam(':nom', $nom);
    //     $consulta->bindParam(':continent', $continent);
    //     $consulta->bindParam(':regio', $regio);
    //     $consulta->bindParam(':superficie', $superficie);
    //     $consulta->bindParam(':any_indep', $any_indep);
    //     $consulta->bindParam(':poblacio', $poblacio);
    //     $consulta->bindParam(':vida', $vida);
    //     $consulta->bindParam(':PNB', $PNB);
    //     $consulta->bindParam(':codi', $codi);

    //     $resultat = $consulta->execute();
    //     $connexio = null;

    //     if (!$resultat)
    //         $error=($consulta->errorInfo())[2];

    //     return $resultat;
    // }

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

    // public function Eliminar(&$error, $IDpais) {
    //     $connexio = new Connexio();
    //     $consulta = $connexio->prepare('DELETE FROM ' . self::TAULA . ' WHERE IDpais= :IDpais' );
    //     $consulta->bindParam(':IDpais', $IDpais);
    //     $resultat=$consulta->execute();
    //     $connexio = null;

    //     if (!$resultat)
    //         $error=($consulta->errorInfo())[2];
    //     else
    //         $registre = $consulta->fetch();

    //     return $resultat;
    // }

}

?>