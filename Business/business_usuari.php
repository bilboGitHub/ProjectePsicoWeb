<?php

// require_once "/Applications/MAMP/htdocs/ProjectePsicoWeb/Data/data_usuari.php"; //<--apple
require_once "../Data/data_usuari.php"; //<--windows
// id_contacte --> id_usuari // email_contacte --> email_usuari // telefon_contacte --> contrasenya_usuari // missatge_contacte --> tipus_usuari
// business_contacte --> business_usuari // datacontacte --> datausuari
class business_usuari {

    private $id_usuari;
    private $email_usuari;
    private $contrasenya_usuari;
    private $tipus_usuari;


    public function __construct ($id_usuari=null, $email_usuari=null, $contrasenya_usuari=null, $tipus_usuari=null) {
        $this->id_usuari = $id_usuari;
        $this->email_usuari = $email_usuari;
        $this->contrasenya_usuari = $contrasenya_usuari;        
        $this->tipus_usuari = $tipus_usuari;     
    }


    public function getid_usuari() {
        return $this->id_usuari;
    }

    public function setid_usuari($id_usuari) {
        $this->id_usuari = $id_usuari;
    }

    public function getemail_usuari() {
        return $this->email_usuari;
    }

    public function setemail_usuari($email_usuari) {
        $this->email_usuari = $email_usuari;
    }

    public function getcontrasenya_usuari() {
        return $this->contrasenya_usuari;
    }

    public function setcontrasenya_usuari($contrasenya_usuari) {
        $this->contrasenya_usuari = $contrasenya_usuari;
    }

    public function gettipus_usuari() {
        return $this->tipus_usuari;
    }

    public function settipus_usuari($tipus_usuari) {
        $this->tipus_usuari = $tipus_usuari;
    }


    public function Llistar(&$error) {  //error:exactly 1 expected in
        $objdatausuari = new datausuari();
        $arrayRegistres = $objdatausuari->Llistar($error);
        
        if (!$arrayRegistres)
        	return false;
        else {
        	$arrayusuari = array();
        	foreach ($arrayRegistres as $registre) {
        		$objusuari = new business_usuari($registre['id_usuari'] ,$registre['email_usuari'] ,$registre['contrasenya_usuari'] ,$registre['tipus_usuari'] );
        		$arrayusuari[]=$objusuari;
        	}

        	return $arrayusuari;

        } 
        	
    }

    public function selectusuari() {
        $objdatausuari = new datausuari();
        $arrayRegistres = $objdatausuari->selectusuari();
        return $arrayRegistres;
    }

    public function mostrarusuariPerID($ID) {
        $objdatausuari = new datausuari();
        $arrayRegistres = $objdatausuari->mostrarusuariPerID($ID);
        
        if (!$arrayRegistres)
            return false;
        else {
            $arrayusuari = array();
            foreach ($arrayRegistres as $registre) {
                $objusuari = new business_usuari($registre['id_usuari'] ,$registre['email_usuari'] ,$registre['contrasenya_usuari'] ,$registre['tipus_usuari'] );
                $arrayusuari[]=$objusuari;
            }
            return $arrayusuari;
        }        
    }

    public function cercarPerID(&$error, $id_usuari) {
        $objdatausuari = new datausuari();

        $registre = $objdatausuari->cercarPerID($error, $id_usuari);
        if ($registre) 
            return new business_usuari($id_usuari, $registre['email_usuari'], $registre['contrasenya_usuari'] ,$registre['tipus_usuari'] );
        else 
            return false;
    }

    public function cercarperemail(&$error, $email_usuari) {
        $objdatausuari = new datausuari();

        $registre = $objdatausuari->cercarperemail($error, $email_usuari);
        if ($registre) 
            return new business_usuari($registre['id_usuari'] , $email_usuari, $registre['contrasenya_usuari'] , $registre['tipus_usuari'] );
        else 
            return false;
    }


    
    public function Insertar(&$error) {
        $objdatausuari = new datausuari();
        $resultat = $objdatausuari->Insertar($error, $this->email_usuari, $this->contrasenya_usuari, $this->tipus_usuari );
        return $resultat;
    }

    public function Modificar(&$error) {
        $objdatausuari = new datausuari();
        $resultat = $objdatausuari->Modificar($error, $this->id_usuari, $this->email_usuari,  $this->contrasenya_usuari, $this->tipus_usuari );
        return $resultat;
    }

    public function Eliminar(&$error){
        $objdatausuari = new datausuari();
        $resultat = $objdatausuari->Eliminar($error, $this->id_usuari);
        return $resultat;
    }

}

?>