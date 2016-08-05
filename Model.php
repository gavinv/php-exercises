<?php

class Model {

	private $attributes = [];
	protected static $table;

	public function __set($key, $value)
    {
        $this->attributes[$key] = $value;
    }
    public function __get($key)
    {
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }

        return null;
    }
    public static function getTableName() 
    {
        return static::$table;
    }
}

$model = new Model();
$model->key = 'gavin';
print_r($model);