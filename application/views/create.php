<script type="text/javascript">
//    $(document).ready(function () {
//        $("#errorTitle").hide();
//        $("#errorDescription").hide();
//
//        $("#title").focusout(function () {
//            checkTitle();
//        });
//        $("#description").focusout(function () {
//            checkDescription();
//        });
//        function checkTitle() {
//            var fTitle = ("#title").val();
//            if (fTitle !== '') {
//                $("#errorTitle").hide();
//                $("#title").css("border-bottom", "2px solid #34F458");
//            } else {
//                $("#errorTitle").html("should contain some title");
//                $("#errorTitle").show();
//                $("#description").css("border-bottom", "2px solid #F90A0A");
//            }
//        }
//        function checkDescription() {
//            var fDescription = ("#description").val();
//            if (fDescription !== '') {
//                $("#errorDescription").hide();
//                $("#title").css("border-bottom", "2px solid #34F458");
//            } else {
//                $("#errorDescription").html("should contain some description");
//                $("#errorDescription").show();
//                $("#description").css("border-bottom", "2px solid #F90A0A");
//            }
//        }
//        $("#createTask").submit(function () {
//            checkTitle();
//            checkDescription();
//        });
//    });
//    
    function addTask() {
        var title = $('#title').val();
        var description = $('#description').val();
        if (title === "" || description === "") {
            alert('Task Title is Required!!!...');
            return false;
        }
        $('#createTask').submit();
    }

</script>

<div class = "container" style = "padding-top:10px;">
    <h3> Add Tasks </h3>
    <form method = "post" id = "createTask" action = "<?php echo base_url() . 'Todo/create'; ?>">
        <div class = "row">
            <div class = "col-md-6">
                <div class = "form-group">
                    <label> Task Title </label>
                    <input type = "text" name = "title" id="title" value = "<?php echo set_value('title'); ?>" class = "form-control">
                    <span class = "help-block" id = "errorTitle"></span>
                </div>
                <div class = "form-group">
                    <label> Task Description </label>
                    <input type = "text" name = "description" id="description" value = "<?php echo set_value('description'); ?>" class = "form-control">
                    <span class = "help-block" id = "errorDescription"></span>
                </div>
                <div class = "form-group">
                    <button type="button" class = "btn btn-primary" onclick="addTask()">Add</button>
                    <a href = "<?php echo base_url() . 'Todo/index'; ?>" class = "btn-secondary btn">Cancel</a>
                </div>
            </div>
        </div>
    </form>
    
</div>
