<?php

class Database extends PDO {

    public function __construct() {
        parent::__construct(DATABASE_TYPE . ':host=' . DATABASE_HOST . ';dbname=' . DATABASE_NAME, DATABASE_USER, DATABASE_PASS);
    }

    public function select($sql, $values = array(), $fetchMode = PDO::FETCH_ASSOC) {
        $query = $this->prepare($sql);

        foreach ($values as $key => $value) {
            $query->bindValue($key, $value);
        }

        if (!$query->execute()) {
            require_once CONTROLLER_FOLDER . 'error.php';
            $e = new error();
            $e->index();
            return;
        }

        return $query->fetchAll($fetchMode);
    }

    public function insert($table, $data) {
        $keys = implode('`,`', array_keys($data)); // 'val1`, `val2'
        $values = ':' . implode(', :', array_keys($data)); // ':val1, :val2';

        $query = $this->prepare("INSERT INTO $table ( `$keys` ) VALUES ( $values );");

        foreach ($data as $key => $value) {
            $query->bindValue($key, $value);
        }

        if (!$query->execute()) {
            require_once CONTROLLER_FOLDER . 'error.php';
            $e = new error();
            $e->index();
            return;
        }
        return $this->lastInsertId();
    }

    public function update($table, $data, $where) {
        ksort($data);

        $datastring = '';
        foreach ($data as $key => $value) {
            $datastring .= "`$key`=:$key, ";
        }
        $datastringcleaned = rtrim($datastring, ', ');

        $query = $this->prepare("UPDATE $table SET $datastringcleaned WHERE $where;");

        foreach ($data as $key => $value) {
            $query->bindValue($key, $value);
        }

        if (!$query->execute()) {
            require_once CONTROLLER_FOLDER . 'error.php';
            $e = new error();
            $e->index();
            return false;
        } else {
            return true;
        }
    }

    public function delete($table, $where, $limit = 1) {
        return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit;");
    }

}
