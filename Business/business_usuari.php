<?php

// require_once "/Applications/MAMP/htdocs/ProjectePsicoWeb/Data/data_FAQ.php"; //<--apple
require_once "../Data/data_contacte.php"; //<--windows
// id_contacte --> id_usuari // email_usuari --> email_usuari // contrasenya_usuari --> contrasenya_usuari // tipus_usuari --> tipus_usuari
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
        $objDatacontacte = new datacontacte();
        $arrayRegistres = $objDatacontacte->Llistar($error);
        
        if (!$arrayRegistres)
        	return false;
        else {
        	$arraycontacte = array();
        	foreach ($arrayRegistres as $registre) {
        		$objcontacte = new business_contacte($registre['id_usuari'] ,$registre['email_usuari'] ,$registre['contrasenya_usuari'] ,$registre['tipus_usuari'] );
        		$arraycontacte[]=$objcontacte;
        	}

        	return $arraycontacte;

        } 
        	
    }

    public function selectcontacte() {
        $objDatacontacte = new datacontacte();
        $arrayRegistres = $objDatacontacte->selectcontacte();
        return $arrayRegistres;
    }

    public function mostrarcontactePerID($ID) {
        $objDatacontacte = new datacontacte();
        $arrayRegistres = $objDatacontacte->mostrarcontactePerID($ID);
        
        if (!$arrayRegistres)
            return false;
        else {
            $arraycontacte = array();
            foreach ($arrayRegistres as $registre) {
                $objcontacte = new business_contacte($registre['id_usuari'] ,$registre['email_usuari'] ,$registre['contrasenya_usuari'] ,$registre['tipus_usuari'] );
                $arraycontacte[]=$objcontacte;
            }
            return $arraycontacte;
        }        
    }

    public function cercarPerID(&$error, $id_usuari) {
        $objDatacontacte = new datacontacte();

        $registre = $objDatacontacte->cercarPerID($error, $id_usuari);
        if ($registre) 
            return new business_contacte($id_usuari, $registre['email_usuari'],$registre['contrasenya_usuari'] ,$registre['tipus_usuari'] );
        else 
            return false;
    }
    
    public function Insertar(&$error) {
        $objDatacontacte = new datacontacte();
        $resultat = $objDatacontacte->Insertar($error, $this->email_usuari, $this->contrasenya_usuari, $this->tipus_usuari );
        return $resultat;
    }

    public function Modificar(&$error) {
        $objDatacontacte = new datacontacte();
        $resultat = $objDatacontacte->Modificar($error, $this->id_usuari, $this->email_usuari,  $this->contrasenya_usuari, $this->tipus_usuari );
        return $resultat;
    }

    public function Eliminar(&$error){
        $objDatacontacte = new datacontacte();
        $resultat = $objDatacontacte->Eliminar($error, $this->id_usuari);
        return $resultat;
    }

}

?>