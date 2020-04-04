<?php

class Todo extends CI_controller {

    function index() {
        $this->load->model('Todo_model');
        $task = $this->Todo_model->taskdisplay();
        $data = array();
        $data['task'] = $task;
        $data['pageUrl'] = 'list';
        $this->load->view('layout', $data);
    }

    function activeTasks() {
        $this->load->model('Todo_model');
        $task = $this->Todo_model->activeTasks();
        $data = array();
        $data['task'] = $task;
        $data['pageUrl'] = 'activetasks';
        $this->load->view('layout', $data);
    }

    function completedTasks() {
        $this->load->model('Todo_model');
        $task = $this->Todo_model->completedTasks();
        $data = array();
        $data['task'] = $task;
        $data['pageUrl'] = 'completedtasks';
        $this->load->view('layout', $data);
    }

    function create() {

        $this->load->model('Todo_model');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $data['pageUrl'] = 'create';
            $this->load->view('layout', $data);
        } else {
            $formArray = array();
            $formArray['task_title'] = $this->input->post('title');
            $formArray['task_description'] = $this->input->post('description');

            $this->Todo_model->create($formArray);
            $this->session->set_flashdata('success', 'Record Added Successfully!');
            redirect('Todo/index');
        }
    }

    function edit($taskId) {
        $this->load->model('Todo_model');
        $task = $this->Todo_model->getTask($taskId);
        $data = array();
        $data['task'] = $task;

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $data['pageUrl'] = 'edit';
            $this->load->view('layout', $data);
            //$this->load->view('edit', $data);
        } else {
            $formArray = array();
            $formArray['task_title'] = $this->input->post('title');
            $formArray['task_description'] = $this->input->post('description');
            $formArray['is_active'] = $this->input->post('active');
            $this->Todo_model->updateTask($taskId, $formArray);
            $this->session->set_flashdata('success', 'Record Added Successfully!');
            redirect(base_url() . 'Todo/index');
        }
    }

    function delete($taskId) {
        $this->load->model('Todo_model');
        $task = $this->Todo_model->getTask($taskId);
        if (empty($task)) {
            redirect(base_url() . 'Todo/index');
        }
        $this->Todo_model->deleteTask($taskId);
        redirect(base_url() . 'Todo/index');
    }

    function deleteCompletedTasks() {
        $this->load->model('Todo_model');
        $this->Todo_model->deleteCompletedTasks();
        redirect(base_url() . 'Todo/index');
    }

}

?>