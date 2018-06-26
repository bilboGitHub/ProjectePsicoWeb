<?php

// require_once "/Applications/MAMP/htdocs/ProjectePsicoWeb/Data/data_FAQ.php"; //<--apple
require_once "../Data/data_contacte.php"; //<--windows

class business_contacte {

    private $id_contacte;
    private $nom_contacte;
    private $cognoms_contacte;
    private $email_contacte;
    private $data_contacte;
    private $telefon_contacte;
    private $missatge_contacte;


    public function __construct ($id_contacte=null, $nom_contacte=null, $cognoms_contacte=null, $email_contacte=null, $data_contacte=null, $telefon_contacte=null, $missatge_contacte=null) {
        $this->id_contacte = $id_contacte;
        $this->nom_contacte = $nom_contacte;
        $this->cognoms_contacte = $cognoms_contacte;
        $this->email_contacte = $email_contacte;        
        $this->data_contacte = $data_contacte;
        $this->telefon_contacte = $telefon_contacte;        
        $this->missatge_contacte = $missatge_contacte;     
    }


    public function getId_contacte() {
        return $this->id_contacte;
    }

    public function setId_contacte($id_contacte) {
        $this->id_contacte = $id_contacte;
    }

    public function getnom_contacte() {
        return $this->nom_contacte;
    }

    public function setnom_contacte($nom_contacte) {
        $this->nom_contacte = $nom_contacte;
    }

    public function getcognoms_contacte() {
        return $this->cognoms_contacte;
    }

    public function setcognoms_contacte($cognoms_contacte) {
        $this->cognoms_contacte = $cognoms_contacte;
    }

    public function getemail_contacte() {
        return $this->email_contacte;
    }

    public function setemail_contacte($email_contacte) {
        $this->email_contacte = $email_contacte;
    }

    public function getData_contacte() {
        return $this->data_contacte;
    }

    public function setData_contacte($data_contacte) {
        $this->data_contacte = $data_contacte;
    }

    public function gettelefon_contacte() {
        return $this->telefon_contacte;
    }

    public function settelefon_contacte($telefon_contacte) {
        $this->telefon_contacte = $telefon_contacte;
    }

    public function getmissatge_contacte() {
        return $this->missatge_contacte;
    }

    public function setmissatge_contacte($missatge_contacte) {
        $this->missatge_contacte = $missatge_contacte;
    }


    public function Llistar(&$error) {  //error:exactly 1 expected in
        $objDatacontacte = new datacontacte();
        $arrayRegistres = $objDatacontacte->Llistar($error);
        
        if (!$arrayRegistres)
        	return false;
        else {
        	$arraycontacte = array();
        	foreach ($arrayRegistres as $registre) {
        		$objcontacte = new business_contacte($registre['id_contacte'] ,$registre['nom_contacte'] ,$registre['cognoms_contacte'] ,$registre['email_contacte'] ,$registre['data_contacte'] ,$registre['telefon_contacte'] ,$registre['missatge_contacte'] );
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
                $objcontacte = new business_contacte($registre['id_contacte'] ,$registre['nom_contacte'] ,$registre['cognoms_contacte'] ,$registre['email_contacte'] ,$registre['data_contacte'] ,$registre['telefon_contacte'] ,$registre['missatge_contacte'] );
                $arraycontacte[]=$objcontacte;
            }
            return $arraycontacte;
        }        
    }

    // public function selectPais() {

    //     $objDataPais = new Acces();
    //     $arrayRegistres = $objDataPais->selectPais();
    //     return $arrayRegistres;
    // }

    // public function mostrarPais() {
    //     $objDataPais = new Acces();
    //     $arrayRegistres = $objDataPais->mostrarPais();
        
    //     if (!$arrayRegistres)
    //         return false;
    //     else {
    //         $arrayPais = array();
    //         foreach ($arrayRegistres as $registre) {
    //             $objPais = new Pais($registre['IDpais'], null, null, null, null, null, null, null, null, null);
    //             $arrayPais[]=$objPais;
    //         }
    //         return $arrayPais;
    //     }        
    // }

    public function cercarPerID(&$error, $id_contacte) {
        $objDatacontacte = new datacontacte();

        $registre = $objDatacontacte->cercarPerID($error, $id_contacte);
        if ($registre) 
            return new business_contacte($id_contacte, $registre['nom_contacte'], $registre['cognoms_contacte'], $registre['email_contacte'], $registre['data_contacte'] ,$registre['telefon_contacte'] ,$registre['missatge_contacte'] );
        else 
            return false;
    }
    
    public function Insertar(&$error) {
        $objDatacontacte = new datacontacte();
        $resultat = $objDatacontacte->Insertar($error, $this->id_contacte, $this->nom_contacte, $this->cognoms_contacte, $this->email_contacte, $this->data_contacte, $this->telefon_contacte, $this->missatge_contacte );
        return $resultat;
    }

    public function Modificar(&$error) {
        $objDatacontacte = new datacontacte();
        $resultat = $objDatacontacte->Modificar($error, $this->id_contacte, $this->nom_contacte, $this->cognoms_contacte, $this->email_contacte, $this->data_contacte, $this->telefon_contacte, $this->missatge_contacte );
        return $resultat;
    }

    public function Eliminar(&$error){
        $objDatacontacte = new datacontacte();
        $resultat = $objDatacontacte->Eliminar($error, $this->id_contacte);
        return $resultat;
    }

}

?>