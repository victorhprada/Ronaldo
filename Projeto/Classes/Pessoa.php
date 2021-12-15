<?php

abstract class Pessoa
{
    protected string $nome;
    protected string $email;
    protected int $idade;

    public function __construct(string $nome, string $email, string $idade)
    {
        $this->$nome;
        $this->$email;
        $this->$idade;
    }

    public function getNome($name): string
    {
        return $this->nome;
    }

    public function getEmail($email): string
    {
        return $this->email;
    }

    public function getIdade($idade): int
    {
        return $this->idade;
    }
}