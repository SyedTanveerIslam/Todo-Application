<?php

class Todo_model extends CI_model {

    function create($formArray) {
        $this->db->insert('task_chores', $formArray);
    }

    function taskdisplay() {
        return $task = $this->db->get('task_chores')->result_array();
    }

    function getTask($taskId) {
        $this->db->where('task_id', $taskId);
        return $task = $this->db->get('task_chores')->row_array();
    }

    function updateTask($taskId, $formArray) {
        $this->db->where('task_id', $taskId);
        $this->db->update('task_chores', $formArray);
    }

    function deleteTask($taskId) {
        $this->db->where('task_id', $taskId);
        $this->db->delete('task_chores');
    }

    function activeTasks() {
        $this->db->where('is_active', 1);
        return $task = $this->db->get('task_chores')->result_array();
    }

    function completedTasks() {
        $this->db->where('is_active', 0);
        return $task = $this->db->get('task_chores')->result_array();
    }

    function deleteCompletedTasks() {
        $this->db->where('is_active', 0);
        $this->db->delete('task_chores');
    }

}

?>