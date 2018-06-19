<?php

require_once 'conexion.php';

class dataFAQ {

    const TAULA = 'faq';

    public function Llistar(&$error) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT id_FAQ, pregunta_FAQ, resposta_FAQ, categoria_FAQ, data_FAQ FROM ' . self::TAULA);
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

    public function selectFAQ() {
        $connexio = new conexion();
        $consulta = $connexio->prepare('SELECT id_FAQ FROM ' . self::TAULA);
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

    public function mostrarFAQPerID($ID) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TAULA . ' WHERE id_FAQ like :id');
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

    public function cercarPerID(&$error, $id_FAQ) {
        $registre=array();
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TAULA . ' WHERE id_FAQ = :id_FAQ');
        $consulta->bindParam(':id_FAQ', $id_FAQ); 
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

    public function Insertar(&$error, $id_FAQ, $pregunta_FAQ, $resposta_FAQ, $categoria_FAQ, $data_FAQ) {
        $conexion = new conexion();
        
        $consulta = $conexion->prepare('INSERT INTO ' . self::TAULA . ' (id_FAQ, pregunta_FAQ, resposta_FAQ, categoria_FAQ, data_FAQ) VALUES(:id_FAQ, :pregunta_FAQ, :resposta_FAQ, :categoria_FAQ, :data_FAQ)');
        
        $consulta->bindParam(':id_FAQ', $id_FAQ);
        $consulta->bindParam(':pregunta_FAQ', $pregunta_FAQ);
        $consulta->bindParam(':resposta_FAQ', $resposta_FAQ);
        $consulta->bindParam(':categoria_FAQ', $categoria_FAQ);
        $consulta->bindParam(':data_FAQ', $data_FAQ);

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

    public function Modificar(&$error, $id_FAQ, $pregunta_FAQ, $resposta_FAQ, $categoria_FAQ, $data_FAQ ) {
        $conexion = new conexion();

        $consulta = $conexion->prepare('UPDATE ' . self::TAULA . ' SET pregunta_FAQ = :pregunta_FAQ, resposta_FAQ = :resposta_FAQ, categoria_FAQ = :categoria_FAQ, data_FAQ = :data_FAQ WHERE id_FAQ= :id_FAQ');

        $consulta->bindParam(':id_FAQ', $id_FAQ);
        $consulta->bindParam(':pregunta_FAQ', $pregunta_FAQ);
        $consulta->bindParam(':resposta_FAQ', $resposta_FAQ);
        $consulta->bindParam(':categoria_FAQ', $categoria_FAQ);
        $consulta->bindParam(':data_FAQ', $data_FAQ);

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

    public function Eliminar(&$error, $id_FAQ) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TAULA . ' WHERE id_FAQ= :id_FAQ' );
        $consulta->bindParam(':id_FAQ', $id_FAQ);
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