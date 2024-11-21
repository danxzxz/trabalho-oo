<?php

class Jogador{
    protected $nome;
    protected int $idade;
    protected $posicao;
    protected $nacionalidade;
    protected int $overall;
    protected int $nivelVelocidade;
    protected int $nivelChute;
    protected int $multa;
    protected $principalQualidade;


    

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of posicao
     */
    public function getPosicao()
    {
        return $this->posicao;
    }

    /**
     * Set the value of posicao
     */
    public function setPosicao($posicao): self
    {
        $this->posicao = $posicao;

        return $this;
    }

    /**
     * Get the value of nacionalidade
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set the value of nacionalidade
     */
    public function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Get the value of overall
     */
    public function getOverall()
    {
        return $this->overall;
    }

    /**
     * Set the value of overall
     */
    public function setOverall($overall): self
    {
        $this->overall = $overall;

        return $this;
    }

    /**
     * Get the value of nivelVelocidade
     */
    public function getNivelVelocidade()
    {
        return $this->nivelVelocidade;
    }

    /**
     * Set the value of nivelVelocidade
     */
    public function setNivelVelocidade($nivelVelocidade): self
    {
        $this->nivelVelocidade = $nivelVelocidade;

        return $this;
    }

    /**
     * Get the value of nivelChute
     */
    public function getNivelChute()
    {
        return $this->nivelChute;
    }

    /**
     * Set the value of nivelChute
     */
    public function setNivelChute($nivelChute): self
    {
        $this->nivelChute = $nivelChute;

        return $this;
    }

    

    /**
     * Get the value of multa
     */
    public function getMulta()
    {
        return $this->multa;
    }

    /**
     * Set the value of multa
     */
    public function setMulta($multa): self
    {
        $this->multa = $multa;

        return $this;
    }

    /**
     * Get the value of principalQualidade
     */
    public function getPrincipalQualidade()
    {
        return $this->principalQualidade;
    }

    /**
     * Set the value of principalQualidade
     */
    public function setPrincipalQualidade($principalQualidade): self
    {
        $this->principalQualidade = $principalQualidade;

        return $this;
    }
}