<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1:3306;dbname=mytodo', 'marcos', 'password');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}