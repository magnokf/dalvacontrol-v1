<?php


namespace Source\Models;


use Source\Core\Model;

/**
 * Class Responsa
 * @package Source\Models
 */
class Responsa extends Model
{

    /**
     * @var
     */
    public $confirmado;
protected $pes_nome;



    /**
     * Responsa constructor.
     */
    public function __construct()
    {
        parent::__construct('responsa', ['id'], ['confirmado' ]);
    }

    /**
     * @return mixed
     */
    public function getConfirmado()
    {
        return $this->confirmado;
    }

    /**
     * @param mixed $confirmado
     */
    public function setConfirmado($confirmado): void
    {
        $this->confirmado = $confirmado;
    }

    /**
     * @return mixed
     */
    public function getPesNome()
    {
        return $this->pes_nome;
    }

    /**
     * @param mixed $pes_nome
     */
    public function setPesNome($pes_nome): void
    {
        $this->pes_nome = $pes_nome;
    }


    /**
     * @return mixed
     */
    public function getRespNome()
    {
     return $this->resp_nome;
    }

    /**
     * @param mixed $resp_nome
     */
    public function setRespNome($resp_nome): void
    {
        $this->resp_nome = $resp_nome;
    }











    /**
     * @param string $pes_nome
     * @param string $columns
     * @return Responsa|null
     */
    public function findByAluno(string $pes_nome, string $columns = "*"): ?Responsa
    {
        $find = $this->find("pes_nome = :pes_nome", "pes_nome={$pes_nome}", $columns);
        return $find->fetch();

    }

    /**
     * @param string $resp_nome
     * @param string $colums
     * @return Responsa|null
     */
    public function findByResponsa(string $resp_nome, string $colums = "*"): ?Responsa
    {
        $findResponsa = $this->find("resp_nome = :resp_nome", "resp_nome={$resp_nome}", $colums);
        return $findResponsa->fetch();

    }


    /**
 * Update confirmado = 1 qdo user created
 */
    public function save(): bool
    {
        /** Responsa Update */

        if (!empty($this->id)) {

            $ResponsaId = $this->id;
            $this->update($this->safe(), "id =:id", "id = {$ResponsaId}");

            if ($this->fail()) {
                $this->message->error("Erro ao atualizar, verifique os dados");
                return false;
            }

        }
        $this->data = ($this->findById($ResponsaId))->data();
        return true;
    }



}