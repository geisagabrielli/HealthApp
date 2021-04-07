<?php

namespace App\Entity;

use \App\Db\localhost;
use \PDO;

class Proc{

  /**
   * Identificador único do procedimento
   * @var integer
   */
  public $id;

  /**
   * Nome do Procedimento
   * @var string
   */
  public $name;

  /**
   * Tipo > Procedimento ou Exame
   * @var string
   */
  public $typeproc;

  /**
   * Tipo Procedimental > Laboratorial ou Imagem
   * @var string(s/n)
   */
  public $typeproc1;

  
  /**
   * Método responsável por cadastrar um novo procedimento no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR O NOME DO PROCEDIMENTO NO BANCO
    $obDatabase = new localhost('proc');
    $this->id = $obDatabase->insert([
                                      'id'    => $this->id,
                                      'typeproc' => $this->typeproc,
                                      'name'     => $this->name,
                                      'typeproc1'=> $this->typeproc1,
                                      ]);

  

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar um procedimento no banco
   * @return boolean
   */
  public function atualizar(){
    return (new localhost('proc'))->update('id'    => $this->id,[
                                                                
                                      'typeproc' => $this->typeproc,
                                      'name'     => $this->name,
                                      'typeproc1' => $this->typeproc1,
                                       ]);
  }

  /**
   * Método responsável por excluir um procedimento no banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('proc'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter o procedimento no banco
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getProc($where = null, $order = null, $limit = null){
    return (new Database('proc'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar um procedimento com base em seu ID
   * @param  integer $profregister
   * @return User
   */
  public static function getProc($id){
    return (new Database('proc'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}