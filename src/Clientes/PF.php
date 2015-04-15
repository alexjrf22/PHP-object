<?php
namespace Clientes;

use Clientes\Cliente;
use Clientes\iPF;

/**
 * Class PF
 * 
 * Pessoa Física
 */
class PF extends Cliente implements iPF
{
    /**
     * CPF
     * 
     * @var string
     */
    protected $cpf;

    /**
     * Retorna o CPF
     * 
     * @return string CPF
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Seta o CPF
     * 
     * @param string $cpf
     * @return \PF Pessoa Física
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        
        return $this;
    }
}