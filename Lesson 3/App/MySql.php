<?php

namespace app;
class MySql
{
    private $connection;

    public function __construct(string $host, string $user, string $password, string $database)
    {
        $this->connection = mysqli_connect(
            $host,
            $user,
            $password,
            $database
        );
    }

    public function getItem(string $sql)
    {
        $result = mysqli_query($this->connection, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function getItemArray(string $sql)
    {
        $result = mysqli_query($this->connection, $sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function execute(string $sql)
    {
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }
}