<div class="container" style="padding-top:10px;">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-6"><h2>Completed Tasks</h2></div>
                <div class="col-md-8 ">
                    <a href="<?php echo base_url() . 'Todo/deleteCompletedTasks' ?>" class="btn btn-primary">Delete All Completed Tasks</a>
                </div>
                <div class="col-md-4 ">
                    <a href="<?php echo base_url() . 'Todo/index' ?>" class="btn btn-primary">Go Back to All Tasks</a>
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