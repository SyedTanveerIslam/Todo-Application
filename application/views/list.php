<div class="container" style="padding-top:10px;">
    <div class="row">
        <div class="col-md-8">
            <div class="col-6"><h2>All Tasks</h2></div>
            <div class="row">
                <div class="col-6 col-md-4 ">
                    <a href="<?php echo base_url() . 'Todo/create' ?>" class="btn btn-primary">Add Tasks</a>
                </div>
                <div class="col-6 col-md-4 ">
                    <a href="<?php echo base_url() . 'Todo/activeTasks' ?>" class="btn btn-primary">Active Tasks</a>
                </div>
                <div class="col-6 col-md-4 ">
                    <a href="<?php echo base_url() . 'Todo/completedTasks' ?>" class="btn btn-primary">Completed Tasks</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">

        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>Task Title</th>
                    <th>Task Description</th>
                </tr>

                <?php
                if (!empty($task)) {
                    foreach ($task as $tasks) {
                        ?>
                        <tr>
                            <td><?php echo $tasks['task_title'] ?></td>
                            <td><?php echo $tasks['task_description'] ?></td>
                            <td>
                                <a href="<?php echo base_url() . 'Todo/edit/' . $tasks['task_id'] ?>" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url() . 'Todo/delete/' . $tasks['task_id'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">Records not found</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>