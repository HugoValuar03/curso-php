<?php
    $arr = [
        "Carro" => 150000,
        "Cafeteira" => 1000,
        "Notebook" => 5000,
        "Celular" => 2000,
        "Mesa" => 500
    ];
    function maiorQue2500(){
        global $arr;
        $arrMaior = [];
        foreach($arr as $itens){
            if($itens > 2500){
                array_push($arrMaior, $itens);
            }
        }
        $implode_arrMaior = implode(", ", $arrMaior);
        return $implode_arrMaior;
    }

    print_r(maiorQue2500());