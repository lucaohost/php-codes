<?php 
require_once("Sessao.php");
require_once("Tarefa.php");

class RepositorioDeTarefas{
    private $tarefas;

    public function RepositorioDeTarefas(){
        $this->carregarVetor();
    }

    private function carregarVetor(){
        $sessao = Sessao::getInstance();
        if ($sessao->existe("VETOR_TAREFAS_PARA_TESTES"))
        {
            $this->tarefas = $sessao->recuperar("VETOR_TAREFAS_PARA_TESTES");
        }
        else{
            $this->tarefas = array();
        }
    }
    private function salvarAlteracoesDoVetor(){
        Sessao::salvar("VETOR_TAREFAS_PARA_TESTES", $this->tarefas);
    }

    public function adicionar(Tarefa $tarefa){
        $this->tarefas[] = $tarefa;
        $this->salvarAlteracoesDoVetor();
    }
    public function concluir($descricao){
        foreach($this->tarefas as $key=>$tarefa){
            if($tarefa->descricao == $descricao){
                unset($this->tarefas[$key]);
                $this->salvarAlteracoesDoVetor();
                break;
            }
        }
    }
    public function buscarTodos():Array{
        return $this->tarefas;
    }
}
?>