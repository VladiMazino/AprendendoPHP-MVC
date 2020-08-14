<?php
class homeController extends Controller {
    

    public function index() {
        $fotos = new fotos();
        $dados['fotos'] = $fotos->getFotos();

      $this->loadTemplate('home', $dados);

    }
    public function sobre(){
      $dados = array();
      $this->loadTemplate('sobre', $dados);

    }

}
?>