<?php 
require_once("Sessao.php");
require_once("Pessoa.php");
// Classe responsável pela persistência e captura dos dados dos produtos
class RepositorioDePessoas{
    private $pessoas;

    public function RepositorioDePessoas(){
        $this->carregarVetor();
    }

    private function carregarVetor()
    {
        /* Caso já tenha sido salvo o VETOR_PRODUTOS_PARA_TESTES na sessão, ele então, 
         * é recuperado para ser usado pelo repositório.
         * Caso contrário, se ainda não tenha sido salvo, significa que é a primeira vez
         * que o programa é usado por esse usuário, e com isso o vetor $produtos é inicializado
         * como vazio para começar a ser utilizado e salvo posteriormente.
         */ 
        $sessao = Sessao::getInstance();
        if ($sessao->existe("VETOR_PESSOAS_PARA_TESTES"))
        {
            $this->pessoas = $sessao->recuperar("VETOR_PESSOAS_PARA_TESTES");
        }
        else{
            $this->pessoas = array();
        }
    }
    // método responsável por salvar o vetor na sessão;
    // sempre que o vetor for alterado, deve ser salvo na sessão por esse método.
    private function salvarAlteracoesDoVetor()
    {
        Sessao::salvar("VETOR_PESSOAS_PARA_TESTES", $this->pessoas);
    }

    public function adicionar(Pessoa $pessoa)
    {
        $this->pessoas[] = $pessoa;
        //ao altarar o vetor, é salvo a alteração feita na sessão
        $this->salvarAlteracoesDoVetor();
    }
    public function atualizar(Pessoa $pessoaAtualizada, $nomeAntigo)
    {
        foreach($this->pessoas as $pessoa){
            if($pessoa->nome == $nomeAntigo){
                $pessoa->nome = $pessoaAtualizada->nome;
                $produto->email = $pessoaAtualizada->email;
                break;
            }
        }
        $this->salvarAlteracoesDoVetor();
    }
    public function remover($nome)
    {
        foreach($this->pessoas as $key=>$pessoa){
            if($pessoa->nome == $nomeExcluir){
                unset($this->pessoa[$key]);
                $this->salvarAlteracoesDoVetor();
                break;
            }
        }
    }
    public function buscarTodos():Array
    {
        /* por ter sido iniciado na inicialização da instância
         * caso não haja produtos no vetor, o retorno não é não 
         * um valor nulo mas sim, um array vazio.
        */
        return $this->pessoas;
    }
    public function buscarPorNome($nome)
    {
        foreach ($this->pessoas as $pessoa) {
            if ($pessoa->nome == $nome)
            {
                return $pessoa;
            }
        }
        return null;
    }
}
?>