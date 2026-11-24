<?php;
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
    //...dates section
$sql = "SELECT start_date FROM tasks";
$result = $conn->query($sql);
$input_type = array("text","date",);
function getStartDate($start_date) {
    return $start_date;
}
$sql = "SELECT due_date FROM tasks";
$result = $conn->query($sql);
$input_type = array("text","date",);
function getDueDate($due_date) {
    return $due_date;
}
//...status section
$sql = "SELECT status FROM tasks";
$result = $conn->query($sql);
$s= "not started";
$t= "in progress";
$u= "completed";
if ($status == 0) {
    echo $s;     
}
    elseif ($status == 1) {
    echo $t;
}
    elseif ($status == 2 ) {
        echo $u;
    }
?>