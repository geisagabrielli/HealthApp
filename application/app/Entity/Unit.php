<?php

namespace App\Entity;

use \App\Db\localhost;
use \PDO;

class Unit{

  /**
   * Identificador único da unidade
   * @var integer
   */
  public $unitcod;

  /**
   * Tipo de Unidade
   * @var string
   */
  public $kindplace;

  /**
   * Estado da unidade
   * @var string
   */
  public $state;

  /**
   * Endereço da unidade
   * @var string(s/n)
   */
  public $address;

  /**
   * Especialidades da unidade
   * @var string
   */
  public $specialit;

  /**
   * Método responsável por cadastrar uma nova unidade no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR A UNIDADE NO BANCO
    $obDatabase = new Database('unidade');
    $this->id = $obDatabase->insert([
                                      'unitcod'    => $this->unitcod,
                                      'kindplace' => $this->kindplace,
                                      'state'     => $this->state,
                                      'address'      => $this->address,
                                      'specialit' => $this->specialit,
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar uma unidade no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('unit'))->update('id = '.$this->unitcod,[
                                                                'kindplace' => $this->kindplace,
                                                                 'state'     => $this->state,
                                                                  'address'      => $this->address,
                                                                  'specialit' => $this->specialit,
                                                              ]);
  }

  /**
   * Método responsável por excluir uma  unidade no banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('unit'))->delete('id = '.$this->unitcode);
  }

  /**
   * Método responsável por obter as unidades no banco
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getUnit($where = null, $order = null, $limit = null){
    return (new Database('unit'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar uma unidade com base em seu ID
   * @param  integer $unitcod
   * @return Unit
   */
  public static function getUnit($unitcod){
    return (new Database('unit'))->select('id = '.$unitcod)
                                  ->fetchObject(self::class);
  }

}