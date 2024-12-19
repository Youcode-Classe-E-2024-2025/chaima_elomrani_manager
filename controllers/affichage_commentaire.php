<?php 

$sql = "SELECT avis.id, avis.commentaire FROM avis";

$result=$conn ->query($sql);

$comment=$result -> fetch_all(MYSQLI_ASSOC);