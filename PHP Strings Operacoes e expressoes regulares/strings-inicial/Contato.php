<?php

namespace App\Alura;

class Contato
{
    private $email;
    private $endereco;
    private $cep;
    private $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
{
    $this->email = $email;

    if ($this->validaEmail($email) !== false) {
        $this->setEmail($email);
    } else {
        $this->setEmail("Email inválido");
    }

    if ($this->validaTelefone($telefone)) {
        $this->setTelefone($telefone);
    } else {
        $this->setTelefone("Telefone inválido");
    }

    $this->endereco = $endereco;
    $this->cep = $cep;
}

   
    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, "@");

        if ($posicaoArroba === false) {
            return "Usuario Inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    public function getEmail(): string
{
    return $this->email;
}

public function validaEmail(string $email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

public function getEnderecoCep(): string
{
    $enderecoCep = [$this->endereco, $this->cep];
    return implode(" - ", $enderecoCep);
}

}

public function getTelefone(): string
{
    return $this->telefone;
}

private function validaTelefone(string $telefone): int
{
    //6455-7546
    return preg_match('/^[0-9]{4}-[0-9]{4}$/', $telefone, $encontrados);
}

private function setEmail(string $email): void
{
    $this->email = $email;
}

private function setTelefone(string $telefone): void
{
    $this->telefone = $telefone;
}

?>