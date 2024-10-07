<?php

require_once 'config.php';

if (isset($_POST['query'])) {
    $inputText = $_POST['query'];

    $sql = "SELECT PN FROM user WHERE PN LIKE :PJN";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':PJN', '%' . $inputText . '%');
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($result) {
        foreach ($result as $row) {
            echo '<a class="list-group-item">' . $row['PN'] . '</a>';
        }
    }
}
 ?>