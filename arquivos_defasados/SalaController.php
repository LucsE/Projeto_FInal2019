<?php
include 'SalaModel.php';
class SalaController{

    public function getSala_identificacao($id){
            $sala = new SalaModel();
            return $sala->consultar($id,"sala_identificacao","detalhes");    
    }
    
        public function getDepartamento($id){
                $sala = new SalaModel();
            return $sala->consultar($id,"departamento","imagens");
    }
    
        public function getVista_frontal1($id){
                $sala = new SalaModel();
            return $sala->consultar($id,"vista_frontal1","imagens");
    }
    
        public function getVista_frontal2($id){
                $sala = new SalaModel();
            return $sala->consultar($id,"vista_frontal2","imagens");
    }
    
        public function getVista_panoramica1($id){
                $sala = new SalaModel();
            return $sala->consultar($id,"vista_panoramica1","imagens");
    }
    
        public function getVista_panoramica2($id){
                $sala = new SalaModel();
            return $sala->consultar($id,"vista_panoramica2","imagens");
    }
    
        public function getVista_360($id){
                $sala = new SalaModel();
            return $sala->consultar($id,"vista_360","imagens");
    }
    public function getObjetivo($id){
        $sala = new SalaModel();
            return $sala->consultar($id,"objetivo","detalhes");
    }
    public function getTurmas_que_assistem($id){
        $sala = new SalaModel();
            return $sala->consultar($id,"turmas_que_assistem","detalhes");
    }

    public function getResponsavel($id){
        $sala = new SalaModel();
            return $sala->consultar($id,"responsavel","detalhes");
    }

    public function getHorario($id){
        $sala = new SalaModel();
            return $sala->consultar($id,"horario","detalhes");
    }
}

?>