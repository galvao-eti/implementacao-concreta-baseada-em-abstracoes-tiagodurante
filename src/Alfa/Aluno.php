<?php
    namespace Alfa;

    class Aluno extends ClasseAbstrata
    {
        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function create($colunas, $valores)
        {
            $entidade = $this->getNome();
            $sql = "INSERT INTO $entidade (".implode(',', $colunas).") VALUES ('".implode("','", $valores)."')";
            $this->execQuery($sql);
        }

        public function retrieve($colunas, $clausula)
        {
            $entidade = $this->getNome();
            $sql = "SELECT ".implode(',', $colunas)." FROM $entidade WHERE ".implode(',', $clausula);
            $this->execQuery($sql);
        }

        public function update($colunas, $valores, $clausula)
        {
            $entidade = $this->getNome();
            $sql = "UPDATE $entidade SET ".implode(',', $valores)." WHERE ".implode(',', $clausula);
            $this->execQuery($sql);
        }

        public function delete($clausula)
        {
            $entidade = $this->getNome();
            $sql = "DELETE FROM $entidade WHERE ".implode(',', $clausula);
            $this->execQuery($sql);
        }

        private function execQuery($query)
        {
            if($result = mysqli_query(self::$bd->conexao, $query)) {
                echo 'Query '.$query.' executada com sucesso<br>';
                var_dump($result);
            } else {
                throw new \Exception(mysqli_error(self::$bd->conexao));
            }
        }
    }
?>
