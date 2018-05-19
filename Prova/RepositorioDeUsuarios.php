<?php 
require_once("./Sessao.php");
require_once("Usuario.php");

class RepositorioDeUsuarios{
    private $usuarios;

    public function RepositorioDeUsuarios()
    {
        $this->carregarVetor();
    }

    private function carregarVetor()
    {
        $sessao = Sessao::getInstance();
        $this->usuarios = array();
        $user = new Usuario("Administrador", "admin", "admin", "11111111");
        $this->usuarios[] = $user;
    }
    private function salvarAlteracoesDoVetor(){
        Sessao::getInstance()->salvar("VETOR_USUARIOS_PARA_TESTES",$this->usuarios);
    }
    public function buscarPorIdUsuario($idUsuario) {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->getIdUsuario() == $idUsuario)
            {
                return $usuario;
            }
        }
        return null;
    }
}
?>