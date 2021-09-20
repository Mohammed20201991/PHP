<?php

namespace Models;

class Student extends Model {

	protected static $table = 'student_info';

	protected static $primaryKey = 'stinfo_id';

	public function getFullName() {
		return $this->stinfo_name1 . ' ' . $this->stinfo_name2 . ' ' . $this->stinfo_name3 . ' ' . $this->stinfo_name4;
	}
}