<?php
class Endereço 
{
    private  $cidade;
    private  $bairro;
    private  $rua;
    private  $numero;

    Public function __construct(string $cidade, string $bairro, string $rua, string $numero){
    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->rua = $rua;
    $this->numero = $numero;
    }

    public function recuperaCidade(): string {
        return $this->cidade;
    }
    
    public function recuperaBairro(): string {
        return $this->bairro;
    }
    public function recuperaRua(): string {
        return $this->rua;
    }

    public function recuperaNumero(): string {
        return $this->numero;
    }



}