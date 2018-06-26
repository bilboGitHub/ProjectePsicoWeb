<?php

// require_once "/Applications/MAMP/htdocs/ProjectePsicoWeb/Data/data_FAQ.php"; //<--apple
require_once "../Data/data_FAQ.php"; //<--windows

class business_FAQ {
    
    private $id_FAQ;
    private $pregunta_FAQ;
    private $resposta_FAQ;
    private $categoria_FAQ;
    private $data_FAQ;


    public function __construct ($id_FAQ=null, $pregunta_FAQ=null, $resposta_FAQ=null, $categoria_FAQ=null, $data_FAQ=null) {
        $this->id_FAQ = $id_FAQ;
        $this->pregunta_FAQ = $pregunta_FAQ;
        $this->resposta_FAQ = $resposta_FAQ;
        $this->categoria_FAQ = $categoria_FAQ;        
        $this->data_FAQ = $data_FAQ;      
    }


    public function getId_FAQ() {
        return $this->id_FAQ;
    }

    public function setId_FAQ($id_FAQ) {
        $this->id_FAQ = $id_FAQ;
    }

    public function getPregunta_FAQ() {
        return $this->pregunta_FAQ;
    }

    public function setPregunta_FAQ($pregunta_FAQ) {
        $this->pregunta_FAQ = $pregunta_FAQ;
    }

    public function getResposta_FAQ() {
        return $this->resposta_FAQ;
    }

    public function setResposta_FAQ($resposta_FAQ) {
        $this->resposta_FAQ = $resposta_FAQ;
    }

    public function getCategoria_FAQ() {
        return $this->categoria_FAQ;
    }

    public function setCategoria_FAQ($categoria_FAQ) {
        $this->categoria_FAQ = $categoria_FAQ;
    }

    public function getData_FAQ() {
        return $this->data_FAQ;
    }

    public function setData_FAQ($data_FAQ) {
        $this->data_FAQ = $data_FAQ;
    }


    public function Llistar(&$error) {  //error:exactly 1 expected in
        $objDataFAQ = new dataFAQ();
        $arrayRegistres = $objDataFAQ->Llistar($error);
        
        if (!$arrayRegistres)
        	return false;
        else {
        	$arrayFAQ = array();
        	foreach ($arrayRegistres as $registre) {
        		$objFAQ = new business_FAQ($registre['id_FAQ'] ,$registre['pregunta_FAQ'] ,$registre['resposta_FAQ'] ,$registre['categoria_FAQ'] ,$registre['data_FAQ'] );
        		$arrayFAQ[]=$objFAQ;
        	}

        	return $arrayFAQ;

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

    public function selectFAQ() {
        $objDataFAQ = new dataFAQ();
        $arrayRegistres = $objDataFAQ->selectFAQ();
        return $arrayRegistres;
    }

    // selectFAQ-->
    // public function selectContinents() {
    //     $objDataPais = new Acces();
    //     $arrayRegistres = $objDataPais->selectContinents();
    //     return $arrayRegistres;
    // }


    public function mostrarFAQPerID($ID) {
        $objDataFAQ = new dataFAQ();
        $arrayRegistres = $objDataFAQ->mostrarFAQPerID($ID);
        
        if (!$arrayRegistres)
            return false;
        else {
            $arrayFAQ = array();
            foreach ($arrayRegistres as $registre) {
                $objFAQ = new business_FAQ($registre['id_FAQ'] ,$registre['pregunta_FAQ'] ,$registre['resposta_FAQ'] ,$registre['categoria_FAQ'] ,$registre['data_FAQ']);
                $arrayFAQ[]=$objFAQ;
            }
            return $arrayFAQ;
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

    public function cercarPerID(&$error, $id_FAQ) {
        $objDataFAQ = new dataFAQ();

        $registre = $objDataFAQ->cercarPerID($error, $id_FAQ);
        if ($registre) 
            return new business_FAQ($id_FAQ, $registre['pregunta_FAQ'], $registre['resposta_FAQ'], $registre['categoria_FAQ'], $registre['data_FAQ']);
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
        $objDataFAQ = new dataFAQ();
        $resultat = $objDataFAQ->Insertar($error, $this->pregunta_FAQ, $this->resposta_FAQ, $this->categoria_FAQ );
        return $resultat;
    }

    // public function Insertar(&$error) {
    //     $objDataPais = new Acces();
    //     $resultat = $objDataPais->Insertar($error, $this->IDpais, $this->nom, $this->continent, $this->regio,$this->superficie, $this->any_indep, $this->poblacio, $this->vida, $this->PNB, $this->codi );
    //     return $resultat;
    // }

    public function Modificar(&$error) {
        $objDataFAQ = new dataFAQ();
        $resultat = $objDataFAQ->Modificar($error, $this->id_FAQ, $this->pregunta_FAQ, $this->resposta_FAQ, $this->categoria_FAQ, $this->data_FAQ );
        return $resultat;
    }

    // public function Modificar(&$error) {
    //     $objDataPais = new Acces();
    //     $resultat = $objDataPais->Modificar($error,$this->IDpais, $this->nom, $this->continent, $this->regio, $this->superficie, $this->any_indep, $this->poblacio, $this->vida, $this->PNB, $this->codi);
    //     return $resultat;
    // }
  
    public function Eliminar(&$error){
        $objDataFAQ = new dataFAQ();
        $resultat = $objDataFAQ->Eliminar($error, $this->id_FAQ);
        return $resultat;
    }

    // public function Eliminar(&$error){
    //     $objDataPais = new Acces();
    //     $resultat = $objDataPais->Eliminar($error,$this->IDpais);
    //     return $resultat;
    // }

}

?>