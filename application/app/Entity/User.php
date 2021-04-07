<?php

namespace App\Entity;

use \App\Db\localhost;
use \PDO;

class User{

  /**
   * Identificador único do usuário
   * @var integer
   */
  public $profregister;

  /**
   * E-mail
   * @var string
   */
  public $email;

  /**
   * Primeiro nome do usuário
   * @var string
   */
  public $name;

  /**
   * Sobrenome do usuário
   * @var string(s/n)
   */
  public $surname;

  /**
   * Profissão do usuário
   * @var string
   */
  public $profission;

  /**
   * Tipo de acesso para o usuário no sistema
   * @var string
   */
  public $accesskind;

  /**
   * Local de trabalho do usuário
   * @var string
   */
  public $place;

    /**
   * Horário de trabalho do usuário
   * @var string
   */
  public $timeattend;

  /**
   * Senha de acesso ao sistema do usuário
   * @var string
   */
  public $password;

 /**
   * Situação do acesso do usuário
   * @var string
   */
  public $situation;
  /**
   * Método responsável por cadastrar um novo usuário no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR O USUARIO NO BANCO
    $obDatabase = new localhost('usuarios');
    $this->id = $obDatabase->insert([
                                      'profregister'    => $this->profregister,
                                      'email' => $this->email,
                                      'name'     => $this->name,
                                      'surname'      => $this->surname,
                                      'profission' => $this->profission,
                                      'accesskind' => $this->accesskind,
                                      'place' => $this->place,
                                      'timeattend' => $this->timeattend,
                                      'password' => $this->password,
                                      'situation' => $this->situation,
                                    ]);

  

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar um usuario no banco
   * @return boolean
   */
  public function atualizar(){
    return (new localhost('usuarios'))->update('profregister'    => $this->profregister,[
                                                                
                                      'email' => $this->email,
                                      'name'     => $this->name,
                                      'surname'      => $this->surname,
                                      'profission' => $this->profission,
                                      'accesskind' => $this->accesskind,
                                      'place' => $this->place,
                                      'timeattend' => $this->timeattend,
                                      'password' => $this->password,
                                      'situation' => $this->situation,
                                                              ]);
  }

  /**
   * Método responsável por excluir um usuario no banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('usuarios'))->delete('id = '.$this->profregister);
  }

  /**
   * Método responsável por obter os usuarios no banco
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getUser($where = null, $order = null, $limit = null){
    return (new Database('usuarios'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar um usuario com base em seu ID
   * @param  integer $profregister
   * @return User
   */
  public static function getUser($profregister){
    return (new Database('usuarios'))->select('id = '.$profregister)
                                  ->fetchObject(self::class);
  }

}