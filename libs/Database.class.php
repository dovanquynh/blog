<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 8/21/18
 * Time: 3:37 PM
 */

class Database extends PDO
{
    private $host = DB_HOST;
    private $port = DB_PORT;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_DBNAME;

    private $_db;
    private $stmt;
    private $error;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname;
        $options = array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        try {
            $this->_db = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $err) {
            echo $err->getMessage();
            $this->error = $err->getMessage();
        }
    }

    public function query($sql)
    {
        $this->stmt = $this->_db->prepare($sql);
    }

    /**
     * @param $params_array
     */
    public function bind($params_array)
    {
        foreach ($params_array as $param => $value) {
            $type = isset($p['type']) ? $p['type'] : NULL;
            if (is_null($type)) {
                switch (true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }
            $this->stmt->bindValue($param, $value, $type);
        }
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    /**
     * @param $tableName
     * @param $data
     * @return bool|string
     */
    public function insert($tableName, $data)
    {
        $fields = array_keys($data);
        $params = ':' . implode(',:', $fields);
        $fields = implode(',', $fields);
        $sql = "INSERT INTO $tableName ($fields) VALUES ($params)";
        $this->query($sql);
        $data = $this->renameKey($data, ':');
        $this->bind($data);
        try {
            $this->execute();
        } catch (PDOException $err) {
            return $err->getMessage();
        }
        return true;
    }

    /**
     * @param $tableName
     * @param $data
     * @param $where
     * @return bool|string
     */
    public function update($tableName, $data, $where)
    {
        $fields = array_keys($data);
        $query = $this->createQuery($fields);
        $fields2 = array_keys($where);
        $condition = $this->createCondition($fields2);
        $sql = "UPDATE $tableName SET $query WHERE $condition";
        $this->query($sql);
        $data = $this->renameKey($data, ':');
        $where = $this->renameKey($where, ':_');
        $this->bind($data);
        $this->bind($where);
        try {
            $this->execute();
        } catch (PDOException $err) {
            return $err->getMessage();
        }
        return true;

    }

    public function delete($tableName, $where)
    {
        $fields = array_keys($where);
        $condition = $this->createCondition($fields);
        $sql = "DELETE FROM $tableName WHERE $condition";
        $this->query($sql);
        $where = $this->renameKey($where, ':_');
        $this->bind($where);
        try {
            $this->execute();
        } catch (PDOException $err) {
            return $err->getMessage();
        }
        return true;
    }

    private function createQuery($fields)
    {
        $query = [];
        for ($i = 0; $i < count($fields); $i++) {
            $query[] = $fields[$i] . '=:' . $fields[$i];
        }
        return implode(',', $query);
    }

    private function createCondition($fields)
    {
        $query = [];
        for ($i = 0; $i < count($fields); $i++) {
            $query[] = $fields[$i] . '=:_' . $fields[$i];
        }
        return implode(',', $query);
    }

    private function renameKey($arr, $prefix)
    {
        foreach ($arr as $key => $value) {
            $arr[':' . $key] = $value;
            unset($arr[$key]);
        }
        return $arr;
    }

    public function findAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOne()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertId($name = null)
    {
        return $this->_db->lastInsertId();
    }
}