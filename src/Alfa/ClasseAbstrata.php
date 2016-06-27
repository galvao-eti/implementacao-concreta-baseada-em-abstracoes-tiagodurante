<?php
    namespace Alfa;

    abstract class ClasseAbstrata implements Abstracao\Entidade
    {
        public static $bd;
        public $nome;

        public function __construct(BaseBD $baseBD)
        {
            self::$bd = $baseBD;
        }

        abstract public function setNome($nome);
        abstract public function getNome();
        abstract public function create($colunas, $valores);
        abstract public function retrieve($colunas, $clausula);
        abstract public function update($colunas, $valores, $clausula);
        abstract public function delete($clausula);
    }
?>
