document.addEventListener("DOMContentLoaded", function() {
    const taskForm = document.getElementById("task-form");
    const taskList = document.getElementById("task-list");

    
    fetchTasks();

    
    taskForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        
        const title = taskForm.querySelector("#title").value;
        const description = taskForm.querySelector("#description").value;
        const dueDate = taskForm.querySelector("#due_date").value;

        
        addTask(title, description, dueDate);
    });


    function fetchTasks() {
        fetch("tasks.php")
            .then(response => response.json())
            .then(tasks => {
                renderTasks(tasks);
            })
            .catch(error => console.error("Erro ao carregar tarefas:", error));
    }

  
    function renderTasks(tasks) {
        taskList.innerHTML = ""; // Limpar lista antes de renderizar novamente

        tasks.forEach(task => {
            const li = document.createElement("li");
            li.textContent = `${task.title} - ${task.description} - ${task.due_date}`;

            if (task.completed) {
                li.classList.add("completed");
            }

            
            const deleteButton = document.createElement("button");
            deleteButton.textContent = "Excluir";
            deleteButton.classList.add("delete-button");
            deleteButton.addEventListener("click", function(event) {
                event.stopPropagation(); // Impede que o evento de clique se propague para o elemento pai (li)
                deleteTask(task.id);
            });

            li.appendChild(deleteButton);
            taskList.appendChild(li);
        });
    }

   
    function addTask(title, description, dueDate) {
        const formData = new FormData();
        formData.append("title", title);
        formData.append("description", description);
        formData.append("due_date", dueDate);

        fetch("tasks.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(message => {
            console.log(message);
            fetchTasks(); 
        })
        .catch(error => console.error("Erro ao adicionar tarefa:", error));
    }

 
    function markTaskAsCompleted(taskId) {
        fetch("tasks.php", {
            method: "PUT",
            body: `id=${taskId}`
        })
        .then(response => response.text())
        .then(message => {
            console.log(message);
            fetchTasks(); 
        })
        .catch(error => console.error("Erro ao marcar tarefa como concluída:", error));
    }

   
    function deleteTask(taskId) {
        fetch("tasks.php", {
            method: "DELETE",
            body: `id=${taskId}`
        })
        .then(response => response.text())
        .then(message => {
            console.log(message);
            fetchTasks(); 
        })
        .catch(error => console.error("Erro ao excluir tarefa:", error));
    }
});
