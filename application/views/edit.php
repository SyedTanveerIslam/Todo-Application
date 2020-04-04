<div class="container" style="padding-top:10px;">
    <h3>Update Tasks</h3>
    <form method="post" name="createUser" action="<?php echo base_url() . 'Todo/edit/' . $task['task_id']; ?>">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Task Title</label>
                    <input type="text" name="title" value="<?php echo set_value('title', $task['task_title']); ?>" class="form-control">
                    <?php echo form_error('title'); ?>
                </div>
                <div class="form-group">
                    <label>Task Description</label>
                    <input type="text" name="description" value="<?php echo set_value('description', $task['task_description']); ?>" class="form-control">
                    <?php echo form_error('description'); ?>
                </div>
                <div class="form-group">
                    <label>Is the Task Still Active?(1/0)</label>
                    <input type="text" name="active" value="<?php echo set_value('active', $task['is_active']); ?>" class="form-control">
                    <?php echo form_error('description'); ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Update</button>
                    <a href="<?php echo base_url() . 'Todo/index'; ?>" class="btn-secondary btn">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>

