<?php

try {
     $db = new PDO("mysql:host=localhost;dbname=myblog", "root", "");
     $db->query("SET CHARACTER SET utf8");
} catch ( PDOException $e ){
     print $e->getMessage();
}

?>