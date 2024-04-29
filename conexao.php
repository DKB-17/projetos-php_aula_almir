<?php

    class Conexao{
        private static $dbNome = 'laboratorio'; // nome correspondente ao banco criado
        private static $dbHost = 'localhost'; // caminho correspondente ao banco
        private static $dbUsuario = 'root'; // usuario para acesso do servidor
        private static $dbSenha = ''; 

        private static $cont = null;

        public static function conectar(){
            if (self::$cont == null){
                try{
                    //PDO PHP DATA OBJECT = Class de conexao do banco
                    //self::$cont = new PDO("mysql:host=localhost;dbname=laboratorio", "root", ""); // codigo cumbado, acaba imposibilitando a mudanco do mesmo assim impedindo mudancao do codigo
                    self::$cont = new PDO("mysql:host=". self::$dbHost. ";dbname=". self::$dbNome, self::$dbUsuario, self::$dbSenha);
                }
                catch (\PDOException $exception){
                    die ($exception->getMessage())
                }
            }
            return self::$cont;
        }

        public static function desconectar(){
            self::$cont = null;
        }

    }

?>