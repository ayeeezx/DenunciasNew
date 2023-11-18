<?php
class Crud
{ private $conn;
private $table_name = "sua_tabela";
public function __construct($db)
{
$this->conn = $db;
}
public function create($name, $age)
{
$query = "INSERT INTO " . $this->table_name . " (name, age) VALUES
(?, ?)";
$stmt = $this->conn->prepare($query); $stmt->execute([$name, $age]);
return $stmt;
}
public function read() {
$query = "SELECT * FROM " . $this->table_name;
$stmt = $this->conn->prepare($query);
$stmt->execute();
return $stmt;
}
public function update($id, $name, $age) {
$query = "UPDATE " . $this->table_name . " SET name = ?, age = ?
WHERE id = ?";
$stmt = $this->conn->prepare($query);
$stmt->execute([$name, $age, $id]);
return $stmt;
}
public function delete($id) {
$query = "DELETE FROM " . $this->table_name . " WHERE id = ?"; $stmt =
$this->conn->prepare($query);
$stmt->execute([$id]);
return $stmt;
}
}
?>