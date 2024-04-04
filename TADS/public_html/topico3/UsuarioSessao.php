<?php

class UsuarioSessao{
    public $login;
    public $nome;

    public function salvar(?string $nome = null){//? quer dizer que o tipo do parâmetro é opcional (pode receber nulo)
        $this->nome = $nome;
        echo "<p> salvar </p>";
    }

    public function ler(): string{
        echo "<p> Ler UsuarioSessao </p>";
        return $this->nome;
    }

    public function __construct(?$login ,?$nome){
        $this->login = $login;
        $this->nome = $nome;
        echo "<p> Novo objeto </p>";
    }
}