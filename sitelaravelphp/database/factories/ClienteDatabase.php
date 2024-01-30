<?php
namespace Database\Factories;

class ClienteFactory
{
    public function doSelect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "sistemacadastrobalanco";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = $conn->query($sql);

        $conn->close();
        return $result;
    }

}

?>