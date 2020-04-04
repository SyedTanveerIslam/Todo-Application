<!DOCTYPE html>
<html>
    <head>
        <title>Todo List</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    </head>
    <body>
        <div class="navbar navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">Todo List</a>
            </div>
        </div>

        <?php
        $this->load->view($pageUrl);
                
        ?>


    </body>
</html>