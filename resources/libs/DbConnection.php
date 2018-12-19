<?php
/**
 * Class nay giup ket noi den database
 * 
 * @author: datnm
 * @date
 * @version
 */
    class resources_libs_DbConnection {
        protected $username="root";
        protected $password="";
        protected $host="localhost";
        protected $database = "bookshop";
        protected $tableName = "users";
        protected $queryParams = [];
        protected static $connectionInstance = null;
    
        public function __construct() {
            $this->connect();
        }

        /**
         * 
         * @return new PDOs
         */
        public function connect() {
            if (self::$connectionInstance === null) {
                try {
                    self::$connectionInstance = new PDO('mysql::host='.$this->host.';dbname='.$this->database,
                        $this->username,$this->password);
                    self::$connectionInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    self::$connectionInstance->exec("SET NAMES 'utf8';");
                } catch (Exception $ex) {
                    echo "ERROR: ".$ex->getMessage();
                    die();
                }
            }
            return self::$connectionInstance;
        }

        /**
         * 
         * @param type $sql
         * @param type @param
         * @return type
         */
        public function query($sql, $param = []) {
            $q = self::$connectionInstance->prepare($sql);
            
            if (is_array($param) && $param) {
                $q->execute($param);
            } else {
                $q->execute();
            }
            return $q;
        }

        public function buildQueryParams($params = []) {
            // var_dump($params); die();
            $default = [
                "select" => "*",
                "where" => "",
                "other" => "",
                "params" => "",
                "field" => "",
                "value" => []
            ];

            $this->queryParams = array_merge($default, $params);
            return $this;
        }
        
        public function buidCondition($condition) {
            if(trim($condition)) {
                return "where ".$condition;
            } else {
                return "";
            }
        }

        public function select() {
            $sql = "select ".$this->queryParams["select"]." from ".$this->tableName.
                " ".$this->buidCondition($this->queryParams["where"])." ".$this->queryParams["other"];
            // var_dump($sql);die(); 
            $query = $this->query($sql, $this->queryParams["params"]);
            
            // var_dump($query->fetchAll(PDO::FETCH_ASSOC)); die();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function selectOne() {
            $this->queryParams["other"] = "limit 1";
            // // var_dump($this->queryParams);die(); 
            $data = $this->select();
            if ($data) {
                return $data[0];
            }
            return [];
        }

        public function insert() {
            $sql = "insert into ".$this->tableName." ".$this->queryParams["field"]; 
            // var_dump($sql);
            // var_dump($this->queryParams["value"]); die();
            $result = $this->query($sql, $this->queryParams["value"]);
            if ($result) {
                return self::$connectionInstance->lastInsertId();
            } else {
                return FALSE;
            }
        }

        public function update() {
            $sql = "update ".$this->tableName." set ".$this->queryParams["value"]." ".
                $this->buidCondition($this->queryParams["where"])." ".$this->queryParams["other"];
                // var_dump($sql); die();
            return $this->query($sql, $this->queryParams["params"]);
        }

        public function delete() {
            $sql = "delete from ".$this->tableName." ".
                $this->buidCondition($this->queryParams["where"])." ".$this->queryParams["other"];
            return $this->query($sql, $this->queryParams["params"]);
        }
    }
