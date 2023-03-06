<?php

namespace spv\mi\core\classes\DB;


interface DBStaticInterface {

    public static function where($sqlWhere, array $params = []);

    public static function read(array $fields, $limits = []) : array;

    public static function insert($data) : bool;

    public static function delete(int $limit = null);

    public static function tableName() : string;

}