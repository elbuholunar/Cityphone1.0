<?php

class ORM {  
    private static $database;
    protected static $table;
    function __construct() {
        self::getConnection();
    }
    private static function getConnection() {
        require_once ('Database.php');
        self::$database = Database::getConnection(DB_PROVIDER, DB_HOST, DB_USER, DB_PASSWORD, DB_DB);
    }
    public static function find($id) {
        $results = self::where('id', $id);
        return $results[0];
    }
    public static function where($field, $value) {
        $obj = null;
        self::getConnection();
        $query = "SELECT * FROM " . static ::$table . " WHERE " . $field . " = ?";
        $results = self::$database->execute($query, null, array($value));
        if ($results) {
            $class = get_called_class();
            for ($i = 0;$i < sizeof($results);$i++) {
                $obj[] = new $class($results[$i]);
            }
        }
        return $obj;
    }
    public static function all($order = null) {
        $objs = null;
        self::getConnection();
        $query = "SELECT * FROM " . static ::$table;
        if ($order) {
            $query.= $order;
        }
        $results = self::$database->execute($query, null, null);
        if ($results) {
            $class = get_called_class();
            foreach ($results as $index => $obj) {
                $objs[] = new $class($obj);
            }
        }
        return $objs;
    }
    public function save($data_modelo) {
        //$values = get_object_vars($this);
        $values = $data_modelo;

        $filtered = null;

        foreach ($values as $key => $value) {
            if ($value !== null && $value !== '' && strpos($key, 'obj_') === false && $key !== 'id') {
                if ($value === false) {
                    $value = 0;
                }
                $filtered[$key] = $value;
            }
        }
        $columns = array_keys($filtered);
        if (!empty($values['id'])) {
            $columns = join(" = ?, ", $columns);
            $columns.= ' = ?';
            $query = "UPDATE " . static ::$table . " SET $columns WHERE id =" . $values['id'];
        } else {
            $params = join(", ", array_fill(0, count($columns), "?"));
            $columns = join(", ", $columns);
            $query = "INSERT INTO " . static ::$table . " ($columns) VALUES ($params)";
        }
        
        $result = self::$database->execute($query, null, $filtered);
        if ($result) {
            $message=(!empty($values['id']))? self::$database->numRows($result) : self::$database->getInsertedID();
            $result = array('error' => false, 'message' => $message);
        } else {
            $result = array('error' => true, 'message' => self::$database->getError());
        }
        return $result;
    }
    public static function findCustom($campos, $field){
        $obj = null;
        $camposTable = implode(',', $campos);
        self::getConnection();
        
        $query = 'SELECT '.$camposTable." FROM ".static ::$table . ' WHERE 1';
        $vlrs  = array();
        
        foreach ($field as $campo => $vlr) {
            $query .= ' AND '.$campo.' = ? ';
            $vlrs[] = $vlr;
        }

        $results = self::$database->execute($query, null, $vlrs);
        if ($results) {

            $class = get_called_class();

            for ($i = 0;$i < sizeof($results);$i++) {
                $obj[] = new $class($results[$i]);
            }
        }
        return $obj;
    }
    public function delete($campo='', $value)
    {
        $query = 'DELETE  FROM '.static ::$table . ' WHERE '.$campo.' = ?';
        $result = self::$database->execute($query, null, array($value));
        if ($result) {
            $result = array('error' => false, 'message' => self::$database->numRows($result));
        } else {
            $result = array('error' => true, 'message' => self::$database->getError());
        }
        return $result;   
    }
}
?>