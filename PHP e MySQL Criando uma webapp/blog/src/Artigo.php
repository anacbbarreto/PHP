<?php

class Artigo
{

private $mysql

    public function __construct(mysqli $mysql){
        $this->mysql = $mysql
    }

    public function exibirTodos(): array
    {

        $resultado = $this->mysql->query('SELECT id, titulo, conteudo FROM artigos');
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);

        
        return $artigos;
    }

    public function encontrarPorId(String $id){
    $selecionaArtigo = $this->mysql->prepare("SELECT id, titulo, conteudo FROM artigo WHERE id = ?");
    $selecionaArtigo->bind_param('s', $id);
    $selecionaArtigo->execute();
    $selecionaArtigo->get_result()->fetch_assoc();
    return $artigo
    

    }

}