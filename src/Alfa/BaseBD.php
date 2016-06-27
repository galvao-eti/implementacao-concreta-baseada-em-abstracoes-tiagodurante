<?php
    namespace Alfa;

    class BaseBD implements Abstracao\BasedeDados
    {
          private $nome;
          private $gerenciador;
          public $conexao;

          function __construct($nome, GerenciadorBD $gerenciador)
          {
               $this->nome = $nome;
               $this->gerenciador = $gerenciador;
          }

          public function setNome($nome)
          {
                $this->nome = $nome;
          }

          public function getNome()
          {
                return $this->nome;
          }

          public function conectar()
          {
                if ($this->nome == 'mysql') {
                      $this->conexao = mysqli_connect($this->gerenciador->getEndereco(), $this->gerenciador->getUsuario(), $this->gerenciador->getSenha(), $this->nome);
                      if (!$this->conexao) {
                          throw new \Exception(mysqli_connect_error());
                      }
                      echo $this->nome.' - metodo conectar()<hr>';
                }
          }

          public function desconectar()
          {
                if ($this->conexao) {
                    mysqli_close($this->conexao);
                    $this->conexao = NULL;
                }
                echo $this->nome.' - metodo desconectar()<hr>';
          }
    }
?>
