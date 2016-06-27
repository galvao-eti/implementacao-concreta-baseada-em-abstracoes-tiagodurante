<?php
    namespace Alfa;

    class GerenciadorBD implements Abstracao\SGBD
    {
        private $endereco;
        private $porta;
        private $usuario;
        private $senha;

        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }

        public function setPorta($porta)
        {
            $this->porta = $porta;
        }

        public function setUsuario($usuario)
        {
            $this->usuario = $usuario;
        }

        public function setSenha($senha)
        {
            $this->senha = $senha;
        }

        public function getSenha()
        {
           return $this->senha;
        }

        public function getUsuario()
        {
           return $this->usuario;
        }

        public function getPorta()
        {
           return $this->porta;
        }

        public function getEndereco()
        {
           return $this->endereco;
        }
    }
?>
