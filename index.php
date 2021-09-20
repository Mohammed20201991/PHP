<?php

define('DB_HOST', 'localhost');
define('DB_DATABASE', 'ac_sys');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

// CRUD
// READ: find($id) / all()
// UPDATE
// DELETE
// CREATE

use Models\User;
use Models\Student;
use Models\UserType;

spl_autoload_register(function($className){
	echo $className;
	$path = __DIR__ . "/{$className}.php";
	// / MacOS, Linux
	// \ Windows
	require_once str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $path);
	// require str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $path);

});

$users = User::all();
// $users = Student::all();

// print_r($users);

// die;



// $user = User::find(2);
// $user->update([
// 	'user_phone' => 234234234,
// 	'user_name' => 'Kamal Mourad',
// 	'user_email' => 'kamal.mourad@gmail.com'
// ]);

// $stude nt = Student::find(3);
// $student->update([
// 	'stinfo_name1' => 'Sarah',
// 	'stinfo_name2' => 'Tarek',
// ]);

// $student->delete();
// print_r($student);

// $user = User::create([
// 	'user_name' => 'Joe',
// 	'user_email' => 'joe@gmail.com',
// 	'user_pass' => password_hash('123456', PASSWORD_DEFAULT),
// 	'user_type' => 1,
// 	'user_phone' => 3123123,
// 	'user_desc' => 'description',
// 	'user_notes' => 'notes',
// 	'user_job' => 'user job',
// ]);

// print_r($user);

// die;

// if (!empty($user)) {
// 	print_r($user->user_email);
// }

// $student = Student::find(1);
// print_r($student);

// users: id
// students: id
// comments: id

// $users = User::all();
$students = Student::all();
// print_r($users);
?>

<!DOCTYPE html>
<html>
<head>
	<title>OOP - Database</title>
</head>
<body>
	<table style="width: 100%;">
		<thead>
			<tr>
				<td>#</td>
				<td>Name</td>
				<td>Email</td>
				<td>Phone</td>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($users as $index => $user) {
			?>
			<tr>
				<td><?php echo $index + 1; ?></td>
				<td><?php echo $user->user_name; ?></td>
				<td><?php echo $user->user_email; ?></td>
				<td><?php echo $user->user_phone; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<table style="width: 100%;">
		<thead>
			<tr>
				<td>#</td>
				<td>Name</td>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($students as $index => $student) {
			?>
			<tr>
				<td><?php echo $index + 1; ?></td>
				<td><?php echo $student->getFullName(); ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>


