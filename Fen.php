<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alf Magne Kalleland
 * Date: 23.12.12
 * Time: 20:08
 */
class Fen extends LudoDbTable
{

    protected $config = array(
        'table' => 'Fen',
        'idField' => 'id',
        'lookupField' => 'fen',
        'columns' => array(
            'id' => 'int auto_increment not null primary key',
            'fen' => 'varchar(128)'
        )
    );

    public function populate($fen){
        parent::populate($fen);
        if(!$this->getId()){
            $this->setFen($fen);
            $this->commit();
        }
    }

    protected function getValidId($fen){
        $fen = explode(" ", $fen);
        return $fen[0]." ". $fen[1]." ". $fen[2];
    }

    public function setFen($fen){
        $this->setValue('fen', $this->getValidId($fen));
    }
}