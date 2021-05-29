<?php

class MySQL
{
    const HOST = 'localhost';
    const USER = 'samuel';
    const PASS = 'ixc123';
    const DATABASE = 'app_evolution';

    public function connectDB()
    {
        return new mysqli(self::HOST, self::USER, self::PASS, self::DATABASE);
    }


    public function getAll($DB, $tabela)
    {
        return $DB->query("SELECT * FROM $tabela");
    }


    public function getOneByKey($DB, $campos, $tabela, $id)
    {
        return $DB->query("SELECT $campos FROM $tabela WHERE id = $id");
    }


    public function deleteByID($DB, $tabela, $id)
    {
        return $DB->query("DELETE FROM $tabela WHERE id = $id");
    }

}
