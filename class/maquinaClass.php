<?php
chdir(__DIR__);
require_once '../app/conf.php';


class Maquina {
    private $id;
    private $serial;
    private $modelo;
    private $fabricante;
    private $data;
    private $sistema;
    private $observacao;

    public function criar($bd){
       $stmt = $bd->prepare("INSERT INTO maquinas (serial, modelo, fabricante, data, sistema_operacional, observacoes)
         VALUES (:serial, :modelo, :fabricante, :data, :sistema_operacional, :observacoes)");

        $valores[':serial'] = "12456456";
        $valores[':modelo'] = "Galaxy";
        $valores[':fabricante'] = "Samsung";
        $valores[':data'] = "23/06/1999";
        $valores[':sistema'] = "Android";
        $valores[':observacao'] = "Teste";
        
        
        
        if($stmt->execute($valores)){
            /*header('Location: listar-maquina.php?gravado=1');*/
            header('Location: maquina-cadastrado.php?gravado=1');
        } else {
            echo "<br><br> Erro, Nao consegui gravar no banco";
        }
        
    }

    public function listar(){
        
    }

    public function apagar(){

    }

    public function editar(){

    }

    public function redireciona(){
        header('Location: ../maquina-cadastrado.php?gravado=1');
    }
}

$teste = new Maquina;
//$teste->redireciona();
$teste->criar($bd);