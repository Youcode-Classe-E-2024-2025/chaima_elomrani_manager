<?php
include("controllers/affichage_commentaire.php");

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    include('config/connexion.php');

    $sql = "DELETE FROM avis WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Record deleted successfully";
        header("Location: index.php?page=comments");
        exit;
        
    } else {
        echo "Error deleting record: ". $conn->error;
    }
    $stmt->close();
    $conn->close();
}
