#PHP4Noobs
The noob friendly PHP library.

## What does it do?
PHP4Noobs aims to simplify common tasks within PHP such as writing to files, connecting to and using a database, etc.

## How do I get it?
`composer require coderiekelt/php4noobs`

### What the hell is composer?
The package manager you need to install this PHP library.

#### What is a package manager?
Are you sure you are supposed to be doing PHP?

## Samples
Simple usage of the database class
```
$db = new PHP4Noobs\Database();

// Establish a connection
$db->connect("localhost", "username", "password", "database", $port=3306);

// Insert a row
$db->insert("users", "'username', 'password', 'email'", "'test', 'test', 'test'");

// Print some strings for all users
while($row = $db->fetchArray("users")) {
	echo $row['username'] . "<br>";
}

// Close the database connection
$db->close();
```

There's nothing else in this library right now other than the Database class.

## Standards
This library may or may not be PSR compliant, but then again it's for beginners so who gives a shit?
