<?php
require_once "db_connection.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];

    $sql = "INSERT INTO tasks (title, description, due_date) VALUES ('$title', '$description', '$due_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa adicionada com sucesso!";
    } else {
        echo "Erro ao adicionar a tarefa: " . $conn->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
 
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $tasks = [];
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
        echo json_encode($tasks);
    } else {
        echo "Nenhuma tarefa encontrada.";
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "PUT") {
  
    parse_str(file_get_contents("php://input"), $put_vars);
    $taskId = $put_vars['id'];

    $sql = "UPDATE tasks SET completed = 1 WHERE id = $taskId";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa marcada como concluída com sucesso!";
    } else {
        echo "Erro ao marcar a tarefa como concluída: " . $conn->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "DELETE") {
 
    parse_str(file_get_contents("php://input"), $delete_vars);
    $taskId = $delete_vars['id'];

    $sql = "DELETE FROM tasks WHERE id = $taskId";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa excluída com sucesso!";
    } else {
        echo "Erro ao excluir a tarefa: " . $conn->error;
    }
}
?>
