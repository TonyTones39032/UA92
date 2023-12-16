document.addEventListener("DOMContentLoaded", function () {
    var addButton = document.getElementById("addButton");
    var newTaskInput = document.getElementById("new-task");
    var incompleteTasksHolder = document.getElementById("incomplete-tasks");
    var completedTasksHolder = document.getElementById("completed-tasks");
    var clearButton = document.getElementById("clear");
  
    function createNewTaskElement(taskString) {
      var listItem = document.createElement("li");
      var checkBox = document.createElement("input");
      var label = document.createElement("label");
      var editInput = document.createElement("input");
      var editButton = document.createElement("button");
      var deleteButton = document.createElement("button");
  
      checkBox.type = "checkbox";
      label.textContent = taskString;
      editInput.type = "text";
      editButton.textContent = "Edit";
      deleteButton.textContent = "Delete";
  
      listItem.appendChild(checkBox);
      listItem.appendChild(label);
      listItem.appendChild(editInput);
      listItem.appendChild(editButton);
      listItem.appendChild(deleteButton);
  
      return listItem;
    }
  
    function addTask() {
      var listItem = createNewTaskElement(newTaskInput.value);
      incompleteTasksHolder.appendChild(listItem);
      bindTaskEvents(listItem, taskCompleted);
  
      newTaskInput.value = "";
    }
  
    function editTask() {
      var listItem = this.parentNode;
      var editInput = listItem.querySelector("input[type=text]");
      var label = listItem.querySelector("label");
  
      var containsClass = listItem.classList.contains("editMode");
  
      if (containsClass) {
        label.textContent = editInput.value;
      } else {
        editInput.value = label.textContent;
      }
  
      listItem.classList.toggle("editMode");
    }
  
    function deleteTask() {
      var listItem = this.parentNode;
      var ul = listItem.parentNode;
      ul.removeChild(listItem);
    }
  
    function taskCompleted() {
      var listItem = this.parentNode;
      completedTasksHolder.appendChild(listItem);
      bindTaskEvents(listItem, taskIncomplete);
    }
  
    function taskIncomplete() {
      var listItem = this.parentNode;
      incompleteTasksHolder.appendChild(listItem);
      bindTaskEvents(listItem, taskCompleted);
    }
  
    function completeTask() {
      var listItem = this.parentNode;
      completedTasksHolder.appendChild(listItem);
      bindTaskEvents(listItem, taskIncomplete);
    }
  
    function clearCompletedTasks() {
      completedTasksHolder.innerHTML = "";
    }
  
    function bindTaskEvents(taskItem, checkBoxEventHandler) {
      var checkBox = taskItem.querySelector("input[type=checkbox]");
      var editButton = taskItem.querySelector("button.edit");
      var deleteButton = taskItem.querySelector("button.delete");
  
      editButton.onclick = editTask;
      deleteButton.onclick = deleteTask;
      checkBox.onchange = checkBoxEventHandler;
    }
  
    addButton.addEventListener("click", addTask);
    clearButton.addEventListener("click", clearCompletedTasks);
  
    for (var i = 0; i < incompleteTasksHolder.children.length; i++) {
      bindTaskEvents(incompleteTasksHolder.children[i], taskCompleted);
    }
  
    for (var i = 0; i < completedTasksHolder.children.length; i++) {
      bindTaskEvents(completedTasksHolder.children[i], taskIncomplete);
    }
  });
  