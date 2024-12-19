<?php
include("affichage_rooms.php");

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    include('config/connexion.php');

    $sql = "DELETE FROM salle WHERE id_salle = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Record deleted successfully";
        header("Location: index.php?page=rooms_management");
        exit;
        
    } else {
        echo "Error deleting record: ". $conn->error;
    }
    $stmt->close();
    $conn->close();
}
