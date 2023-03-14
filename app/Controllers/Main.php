<?php

namespace App\Controllers;

class Main extends BaseController

   

// conectar à base de dados mostrando os dados da planilha 'metricas semanais' criada >
// >na base de dados de SQL do Laragon

// nesse caso o teste de inserção de dados na base SQL foi manual

{
    public function index(){

  $db = \Config\Database::connect();
  $resultados = $db->query("SELECT * FROM  metricassemanais")->getResultObject();
  $db->close();

  echo '<pre>';
  print_r($resultados);

    }
}
