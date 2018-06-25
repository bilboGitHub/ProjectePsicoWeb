<?php

// require_once "/Applications/MAMP/htdocs/ProjectePsicoWeb/Data/data_FAQ.php"; //<--apple
require_once "../Data/data_contacte.php"; //<--windows

class business_contacte {
    private $id_contacte;
    private $nom_contacte;
    private $cognoms_contacte;
    private $email_contacte;
    private $data_contacte;


    public function __construct ($id_contacte=null, $nom_contacte=null, $cognoms_contacte=null, $email_contacte=null, $data_contacte=null) {
        $this->id_contacte = $id_contacte;
        $this->nom_contacte = $nom_contacte;
        $this->cognoms_contacte = $cognoms_contacte;
        $this->email_contacte = $email_contacte;        
        $this->data_contacte = $data_contacte;      
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


    public function Llistar(&$error) {  //error:exactly 1 expected in
        $objDatacontacte = new datacontacte();
        $arrayRegistres = $objDatacontacte->Llistar($error);
        
        if (!$arrayRegistres)
        	return false;
        else {
        	$arraycontacte = array();
        	foreach ($arrayRegistres as $registre) {
        		$objcontacte = new business_contacte($registre['id_contacte'] ,$registre['nom_contacte'] ,$registre['cognoms_contacte'] ,$registre['email_contacte'] ,$registre['data_contacte'] );
        		$arraycontacte[]=$objcontacte;
        	}

        	return $arraycontacte;

        } 
        	
    }

    // public function Listar(&$error) {
    //     $objDataPais = new Acces();
    //     $arrayRegistres = $objDataPais->Listar($error);
        
    //     if (!$arrayRegistres)
    //         return false;
    //     else {
    //         $arrayPaissos = array();
    //         foreach ($arrayRegistres as $registre) {
    //             $objPais = new Pais($registre['IDpais'], $registre['nombre'], $registre['continente'], $registre['region'], $registre['superficie'], $registre['ano_indep'], $registre['poblacion'], $registre['experanza_vida'], $registre['PNB'], $registre['codigo'] );
    //             $arrayPaissos[]=$objPais;
    //         }

    //         return $arrayPaissos;

    //     } 
    // }

    public function selectcontacte() {
        $objDatacontacte = new datacontacte();
        $arrayRegistres = $objDatacontacte->selectcontacte();
        return $arrayRegistres;
    }

    // selectFAQ-->
    // public function selectContinents() {
    //     $objDataPais = new Acces();
    //     $arrayRegistres = $objDataPais->selectContinents();
    //     return $arrayRegistres;
    // }


    public function mostrarcontactePerID($ID) {
        $objDatacontacte = new datacontacte();
        $arrayRegistres = $objDatacontacte->mostrarcontactePerID($ID);
        
        if (!$arrayRegistres)
            return false;
        else {
            $arraycontacte = array();
            foreach ($arrayRegistres as $registre) {
                $objcontacte = new business_contacte($registre['id_contacte'] ,$registre['nom_contacte'] ,$registre['cognoms_contacte'] ,$registre['email_contacte'] ,$registre['data_contacte']);
                $arraycontacte[]=$objcontacte;
            }
            return $arraycontacte;
        }        
    }

    // public function mostrarPaisPerContinent($continent) {
    //     $objDataPais = new Acces();
    //     $arrayRegistres = $objDataPais->mostrarPaisPerContinent($continent);
        
    //     if (!$arrayRegistres)
    //         return false;
    //     else {
    //         $arrayPais = array();
    //         foreach ($arrayRegistres as $registre) {
    //             $objPais = new Pais($registre['IDpais'], $registre['nombre'], $registre['continente'], null, $registre['superficie'], $registre['ano_indep'], null, null, null, null);
    //             $arrayPais[]=$objPais;
    //         }
    //         return $arrayPais;
    //     }        
    // }

    public function selectPais() {

        $objDataPais = new Acces();
        $arrayRegistres = $objDataPais->selectPais();
        return $arrayRegistres;
    }

    public function mostrarPais() {
        $objDataPais = new Acces();
        $arrayRegistres = $objDataPais->mostrarPais();
        
        if (!$arrayRegistres)
            return false;
        else {
            $arrayPais = array();
            foreach ($arrayRegistres as $registre) {
                $objPais = new Pais($registre['IDpais'], null, null, null, null, null, null, null, null, null);
                $arrayPais[]=$objPais;
            }
            return $arrayPais;
        }        
    }

    public function cercarPerID(&$error, $id_contacte) {
        $objDatacontacte = new datacontacte();

        $registre = $objDatacontacte->cercarPerID($error, $id_contacte);
        if ($registre) 
            return new business_contacte($id_contacte, $registre['nom_contacte'], $registre['cognoms_contacte'], $registre['email_contacte'], $registre['data_contacte']);
        else 
            return false;
    }

    // public function cercarPerIDpais(&$error, $IDpais) {
    //     $objDataPais = new Acces();

    //     $registre = $objDataPais->cercarPerIDpais($error, $IDpais);
    //     if ($registre) 
    //         return new Pais($IDpais, $registre['nombre'], $registre['continente'], $registre['region'], $registre['superficie'], $registre['ano_indep'], $registre['poblacion'], $registre['experanza_vida'], $registre['PNB'], $registre['codigo']);
    //     else 
    //         return false;
    // }

    public function Insertar(&$error) {
        $objDatacontacte = new datacontacte();
        $resultat = $objDatacontacte->Insertar($error, $this->id_contacte, $this->nom_contacte, $this->cognoms_contacte, $this->email_contacte, $this->data_contacte );
        return $resultat;
    }

    // public function Insertar(&$error) {
    //     $objDataPais = new Acces();
    //     $resultat = $objDataPais->Insertar($error, $this->IDpais, $this->nom, $this->continent, $this->regio,$this->superficie, $this->any_indep, $this->poblacio, $this->vida, $this->PNB, $this->codi );
    //     return $resultat;
    // }

    public function Modificar(&$error) {
        $objDatacontacte = new datacontacte();
        $resultat = $objDatacontacte->Modificar($error, $this->id_contacte, $this->nom_contacte, $this->cognoms_contacte, $this->email_contacte, $this->data_contacte );
        return $resultat;
    }

    // public function Modificar(&$error) {
    //     $objDataPais = new Acces();
    //     $resultat = $objDataPais->Modificar($error,$this->IDpais, $this->nom, $this->continent, $this->regio, $this->superficie, $this->any_indep, $this->poblacio, $this->vida, $this->PNB, $this->codi);
    //     return $resultat;
    // }
  
    public function Eliminar(&$error){
        $objDatacontacte = new datacontacte();
        $resultat = $objDatacontacte->Eliminar($error, $this->id_contacte);
        return $resultat;
    }

    // public function Eliminar(&$error){
    //     $objDataPais = new Acces();
    //     $resultat = $objDataPais->Eliminar($error,$this->IDpais);
    //     return $resultat;
    // }

}

?>