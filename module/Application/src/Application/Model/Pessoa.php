<?php
namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pessoa")
 */
class Pessoa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $nome;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $descricao;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $dataCadastro;
    
    public function __construct()
    {
        $this->dataCadastro = new \DateTime();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}
