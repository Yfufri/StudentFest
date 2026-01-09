<?php

function subscribeUser($conn,$mail)
{
    $sql = "INSERT INTO `newsletter`(`Mail_Utilisateur`) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si",$mail);
    $stmt->execute();
    $id = $stmt->insert_id;
    $stmt->close();
    return $id;
}

?>