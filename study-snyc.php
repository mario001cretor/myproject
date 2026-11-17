<?php
require_once __DIR__ . '/connection.php';
//...users section
$sql = "SELECT id, name FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]."<br>";
        }
} else { 
    echo "register: 0 results";
}
//...task section
$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);
$input_type = array("text","PDF","image","zip","docx");
function getTaskName($task_name) {
    return $task_name;
}  
//...priority 
$questions = "null";
$x = "low";
$y = "medium";
$m = "high";
if ($questions <=5) {
    echo $x;     
}
    elseif ($questions >=5 && $questions <=10) {
    echo $y;
}
    elseif ($questions >=10 ) {
        echo $m;
    }
?> 
