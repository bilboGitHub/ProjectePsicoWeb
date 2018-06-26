<?php

// require_once '/Applications/MAMP/htdocs/ProjectePsicoWeb/Data/conexion.php'; //<--apple
require_once 'conexion.php'; //<--windows
// id_contacte --> id_usuari // email_contacte --> email_usuari // telefon_contacte --> contrasenya_usuari // missatge_contacte --> tipus_usuari
class datausuari {

    const TAULA = 'usuari';
    id_usuari
    public function Llistar(&$error) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT id_usuari, email_usuari, contrasenya_usuari, tipus_usuari FROM ' . self::TAULA);
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
        $consulta = $connexio->prepare('SELECT id_usuari FROM ' . self::TAULA);
        $consulta->execute();
        $arrayRegistres = $consulta->fetchAll();
        $conexion = null;
        return $arrayRegistres;
    }

    public function mostrarcontactePerID($ID) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TAULA . ' WHERE id_usuari like :id');
        $consulta->bindParam(':id', $ID);
        $consulta->execute();
        $arrayRegistres = $consulta->fetchAll();
        $conexion = null;
        return $arrayRegistres;
    }

    public function cercarPerID(&$error, $id_usuari) {
        $registre=array();
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TAULA . ' WHERE id_usuari = :id_usuari');
        $consulta->bindParam(':id_usuari', $id_usuari); 
        $resultat=$consulta->execute();
        $conexion = null;

        if (!$resultat)
            $error=($consulta->errorInfo())[2];
        else
            $registre = $consulta->fetch();

        return $registre;
    }

    public function Insertar(&$error, $email_usuari, $contrasenya_usuari, $tipus_usuari) {
        $conexion = new conexion();
        
        $consulta = $conexion->prepare('INSERT INTO ' . self::TAULA . ' ( email_usuari, contrasenya_usuari, tipus_usuari) VALUES(:email_usuari, :contrasenya_usuari, :tipus_usuari)');
        
        $consulta->bindParam(':email_usuari', $email_usuari);
        $consulta->bindParam(':contrasenya_usuari', $contrasenya_usuari);
        $consulta->bindParam(':tipus_usuari', $tipus_usuari);

        $resultat = $consulta->execute();
        $conexion = null;

        if (!$resultat)
            $error=($consulta->errorInfo())[2];

        return $resultat;
    }

    public function Modificar(&$error, $id_usuari, $email_usuari, $contrasenya_usuari, $tipus_usuari ) {
        $conexion = new conexion();

        $consulta = $conexion->prepare('UPDATE ' . self::TAULA . ' SET email_usuari = :email_usuari, contrasenya_usuari = :contrasenya_usuari, tipus_usuari = :tipus_usuari WHERE id_usuari= :id_usuari');

        $consulta->bindParam(':id_usuari', $id_usuari);
        $consulta->bindParam(':email_usuari', $email_usuari);
        $consulta->bindParam(':contrasenya_usuari', $contrasenya_usuari);
        $consulta->bindParam(':tipus_usuari', $tipus_usuari);

        $resultat = $consulta->execute();
        $conexion = null;

        if (!$resultat)
            $error=($consulta->errorInfo())[2];

        return $resultat;
    }

    public function Eliminar(&$error, $id_usuari) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TAULA . ' WHERE id_usuari= :id_usuari' );
        $consulta->bindParam(':id_usuari', $id_usuari);
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