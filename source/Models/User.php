<?php

namespace Source\Models;

use Source\Core\Model;


/**
 * Class User
 * @package Source\Models
 */
class User extends Model
{

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("users", ["id"], ["pes_nome", "resp_nome", "telefone1"]);
    }

    /**
     * @return array|mixed|Model|null
     */


    /**
     * @param string $pesNome
     * @param string $respNome
     * @param string $email
     * @param string $telefone1
     * @param string $telefone2
     * @param string|null $document
     * @return User
     */
    public function bootstrap(
        string $pesNome,
        string $respNome,
        string $email,
        string $telefone1,
        string $telefone2




    ): User {
        $this->pes_nome = $pesNome;
        $this->resp_nome = $respNome;
        $this->email = $email;
        $this->telefone1 = $telefone1;
        $this->telefone2 = $telefone2;


        return $this;
    }


    /**
     * @param string $email
     * @param string $columns
     * @return null|User
     */
    public function findByEmail(string $email, string $columns = "*"): ?User
    {
        $find = $this->find("email = :email", "email={$email}", $columns);
        return $find->fetch();
    }

    /**
     * @param string $pes_nome
     * @param string $columns
     * @return User|null
     */
    public function findMyAluno(string $pes_nome, string $columns = "*"): ?User
    {
        $find = $this->find("pes_nome = :pes_nome", "pes_nome={$pes_nome}", $columns);
        return $find->fetch();
    }


    /**
     * @return string
     */
    public function fullName(): string
    {
    return "{$this->pes_nome}";
    }


    /**
     * @return string|null
     */
    public function photo(): ?string
    {
        if ($this->photo && file_exists(__DIR__ . "/../../" . CONF_UPLOAD_DIR . "/{$this->photo}")) {
            return $this->photo;
        }

        return null;
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        if (!$this->required()) {
            $this->message->warning("Nome do Aluno , Nome do Responsável e telefone são obrigatórios");
            return false;
        }

        if (!is_email($this->email)) {
            $this->message->warning("O e-mail informado não tem um formato válido");
            return false;
        }

        /**if (!is_passwd($this->password)) {
            $min = CONF_PASSWD_MIN_LEN;
            $max = CONF_PASSWD_MAX_LEN;
            $this->message->warning("A senha deve ter entre {$min} e {$max} caracteres");
            return false;
        } else {
            $this->password = passwd($this->password);
        }

        /** User Update */
        if (!empty($this->id)) {
            $userId = $this->id;

            /**if ($this->find("email = :e AND id != :i", "e={$this->email}&i={$userId}", "id")->fetch()) {
                $this->message->warning("O e-mail informado já está cadastrado");
                return false;
            }**/


            $this->update($this->safe(), "id = :id", "id={$userId}");
            if ($this->fail()) {
                $this->message->error("Erro ao atualizar, verifique os dados");
                return false;
            }
        }

        /** User Create */
        if (empty($this->id)) {
            /**if ($this->findByEmail($this->email, "id")) {
                $this->message->warning("O e-mail informado já está cadastrado");
                return false;
            }**/

            if ($this->findMyAluno($this->pes_nome, "id")){

                $this->message->warning("O Aluno ($this->pes_nome) já foi cadastrado sistema");
                return false;

            }

            $userId = $this->create($this->safe());
            if ($this->fail()) {
                $this->message->error("Erro ao cadastrar, verifique os dados");
                return false;
            }
        }

        $this->data = ($this->findById($userId))->data();
        return true;
    }
}