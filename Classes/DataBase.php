<?php
class Database
{
private $host = "seu_host"; private $db_name =
"seu_banco_de_dados";
private $username = "seu_usuario";
private $password = "sua_senha";
public $conn;
public function getConnection()
{
$this->conn = null;
try { $this->conn = new PDO("mysql:host=" . $this->host .
";dbname=" . $this->db_name, $this->username, $this->password);
}
catch(PDOException $exception)
{
echo "Erro de conexão: " . $exception->getMessage();
}
return $this->conn;
}
}
?>