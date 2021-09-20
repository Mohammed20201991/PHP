<?php

namespace Models;

class Model {
	// related to Child
	protected $attributes = [];

 	// related to Child
	protected static $table = '';

	// related to Child
	protected static $primaryKey = '';

	// related to Model
	private static $connection = null;

	// related to Model
	private static function getConnection() {
		// singleton: Design pattern
		if (is_null(self::$connection)) {
			self::$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		}

		return self::$connection;
	}

	// related to Model
	private static function query($sql) {
		$query = mysqli_query(self::getConnection(), $sql);

		if (mysqli_error(self::getConnection())) {
			echo "Error with sql: {$sql}" . mysqli_error(self::getConnection());
			die;
		}

		return $query;
	}

	// related to Child class
	public static function find($id) {
		$modelTable = static::$table;
		$primaryKey = static::$primaryKey;

		$sql = "SELECT * FROM {$modelTable} WHERE {$primaryKey} = {$id} LIMIT 1";

		$query = self::query($sql);

		$result = mysqli_fetch_assoc($query);

		if (!empty($result)) {
			$model = new static;
			$model->attributes = $result;

			return $model;
		}

		return null;
	}

	// related to Child class
	public static function all() {
		$modelTable = static::$table;

		$sql = "SELECT * FROM {$modelTable}";
		$query = self::query($sql);

		$data = [];
		while ($row = mysqli_fetch_assoc($query)) {
			$model = new static;
			$model->attributes = $row;

			$data[] = $model;
		}

		return $data;
	}

	// related to Child class
	public static function create($data) {
		$table = static::getTableName();

		$columns = array_keys($data);
		$columns = implode(',', $columns);

		$values = array_values($data);
		$values = implode("','", $values);

		$sql = "INSERT INTO {$table} ({$columns}) VALUES('{$values}')";

		self::query($sql);

		$id = mysqli_insert_id(self::getConnection());

		return static::find($id);
	}

	// related to Child Object
	public function update($data) {
		$modelTable = static::$table;
		$primaryKey = static::$primaryKey;
		$primaryKeyValue = $this->{static::$primaryKey};

		$txt = [];
		foreach ($data as $column => $value) {
			$txt[] = "{$column} = '{$value}'";
		}

		$txt = implode(',', $txt);

		$sql = "UPDATE {$modelTable} SET {$txt} WHERE {$primaryKey} = {$primaryKeyValue}";
		$query = self::query($sql);
	}

	protected static function getTableName() {
		return static::$table;
	}

	protected static function getPrimaryKeyColumn() {
		return static::$primaryKey;
	}

	protected function getPrimaryKeyValue() {
		$name = static::getPrimaryKeyColumn();
		return $this->{$name};
	}

	public function delete() {
		$table = static::getTableName();
		$column = static::getPrimaryKeyColumn();
		$value = $this->getPrimaryKeyValue();

		$sql = "DELETE FROM {$table} WHERE {$column} = {$value}";

		self::query($sql);

		$this->attributes = [];
	}

	public function __get($key) {
		if (isset($this->attributes[$key])) {
			return $this->attributes[$key];
		}

		return null;
	}
}
