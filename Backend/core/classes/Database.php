<?php

namespace core\classes;

use Exception;
use PDO;

class Database
{
    private $connection;

    private function connect()
    {
        $this->connection = new PDO(
            'mysql:' .
                'host=' . MYSQL_SERVER . ';' .
                'dbname=' . MYSQL_DATABASE . ';' .
                'charset=' . MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASSWORD,
            array(PDO::ATTR_PERSISTENT => true)
        );

        //DEBUG DISPLAY CONFIGURATION
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    private function disconnect()
    {
        $this->connection = null;
    }

    //A parametrização da query é uma proteção contra sql injection
    public function select($sql, $params = null)
    {
        //Verifica se a query é um SELECT através de REGEX
        if (!preg_match("/^SELECT/i", $sql)) {
            // die('Base de Dados - Não é uma instrução SELECT.');
            throw new Exception('Base de Dados - Não é uma instrução SELECT.');
        }

        $this->connect();
        $result = null;
        try {
            if (!empty($params)) {
                $statement = $this->connection->prepare($sql);
                $statement->execute($params);
                $result = $statement->fetchAll(PDO::FETCH_CLASS); //Retornado o resultado da consulta em formato de classe
            }

            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (\PDOException $e) {
            return false;
        }

        return $result;
        $this->disconnect();
    }

    //A parametrização da query é uma proteção contra sql injection
    public function insert($sql, $params = null)
    {


        //Verifica se a query é um SELECT através de REGEX
        if (!preg_match("/^INSERT/i", $sql)) {
            // die('Base de Dados - Não é uma instrução INSERT.');
            throw new Exception('Base de Dados - Não é uma instrução INSERT.');
        }

        $this->connect();



        try {
            if (!empty($params)) {
                $statement = $this->connection->prepare($sql);
                $statement->execute($params);
                return;
            }

            $statement = $this->connection->prepare($sql);
            $statement->execute();
        } catch (\PDOException $e) {
            return false;
        }
        $this->disconnect();
    }

    //A parametrização da query é uma proteção contra sql injection
    public function delete($sql, $params = null)
    {

        //Verifica se a query é um SELECT através de REGEX
        if (!preg_match("/^DELETE/i", $sql)) {
            // die('Base de Dados - Não é uma instrução DELETE.');
            throw new Exception('Base de Dados - Não é uma instrução DELETE.');
        }

        $this->connect();

        try {
            if (!empty($params)) {
                $statement = $this->connection->prepare($sql);
                $statement->execute($params);
            }

            $statement = $this->connection->prepare($sql);
            $statement->execute();
        } catch (\PDOException $e) {
            return false;
        }
        $this->disconnect();
    }

    //A parametrização da query é uma proteção contra sql injection
    public function update($sql, $params = null)
    {

        //Verifica se a query é um SELECT através de REGEX
        if (!preg_match("/^UPDATE/i", $sql)) {
            // die('Base de Dados - Não é uma instrução UPDATE.');
            throw new Exception('Base de Dados - Não é uma instrução UPDATE.');
        }

        $this->connect();

        try {
            if (!empty($params)) {
                $statement = $this->connection->prepare($sql);
                $statement->execute($params);
            }

            $statement = $this->connection->prepare($sql);
            $statement->execute();
        } catch (\PDOException $e) {
            return false;
        }
        $this->disconnect();
    }

    //A parametrização da query é uma proteção contra sql injection
    public function statement($sql, $params = null)
    {

        //Verifica se é uma instrução diferente das anteriores
        if (preg_match("/^(SELECT|INSERT|UPDATE|DELETE)/i", $sql)) {
            // die('Base de Dados - Não é uma instrução UPDATE.');
            throw new Exception('Base de Dados - Instrução inválida.');
        }

        $this->connect();

        try {
            if (!empty($params)) {
                $statement = $this->connection->prepare($sql);
                $statement->execute($params);
            }

            $statement = $this->connection->prepare($sql);
            $statement->execute();
        } catch (\PDOException $e) {
            return false;
        }
        $this->disconnect();
    }
}
