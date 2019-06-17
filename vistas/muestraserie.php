<?php 

        include("../clases/Serie.php");
        include("../controladores/CSerie.php");

        $codigodoc=1; //$_POST["codtipodocumento"];
        $codigoalma = 1;

        $arreglo=array();
        $cserie=new CSerie();
        $serie=$cserie->Busca_Serie($codigodoc, $codigoalma);      
      
            $arreglo[] = [         
                "codSerie"=>$serie->getIdserie(),
                "serie"=>$serie->getSerie(), 
                "numeracion"=>$serie->getNumeracion(), 
                "nombreimpresora"=>$serie->getNombreimpresora(), 
                "papersize"=>$serie->getPapersize(), 
                "preimpreso"=>$serie->getPreimpreso()
            ];
      
        //echo json_encode($arreglo);
        print_r($arreglo);
 
?>