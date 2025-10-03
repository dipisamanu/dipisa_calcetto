<?php
class CampoDaCalcio
{
    private string $nome;
    private int $spettatori;
    private string $url;
    public function __construct(string $nome, int $spettatori, string $url){
        $this->nome = $nome;
        $this->spettatori = $spettatori;
        $this->url = $url;
    }
}
