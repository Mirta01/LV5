<?php
include "connection.php";

    $title = "";
    $modalContent = "";
    $function = "";

    if (isset($_GET["modal_id"]))
    {
        $stat = $_GET["modal_id"];
        
        switch ($stat)
        {
            case 'new_employee':
                $title = "New employee";
                $modalContent = '<div class="form-group">
                        <label class="col-md-3 control-label">Birth date</label>
                        <div class="col-md-8"><input type="date" class="form-control" id="new-birth_date"/></div>
                        <label class="col-md-3 control-label">First name</label>
                        <div class="col-md-8"><input type="text" class="form-control" id="new-first_name"/></div>
                        <label class="col-md-3 control-label">Last name</label>
                        <div class="col-md-8"><input type="text" class="form-control" id="new-last_name"/></div>
                        <label class="col-md-3 control-label">Gender</label>
                        <div class="col-md-8"><input type="text" class="form-control" id="new-gender"/></div>
                        <label class="col-md-3 control-label">Hire Date</label>
                        <div class="col-md-8"><input type="date" class="form-control" id="new-hire_date"/></div>
                    </div>';
                $function = "NewEmployee()";
                
                break;
            case 'edit_employee':
                $title = "Edit employee";
                $modalContent = '<div class="form-group">
                     <label class="col-md-3 control-label">Datum Rođenja</label>
                    <div class="col-md-8"><input type="date" id="edit-birth_date" value="'.$_GET['birth_date'].'" class="form-control" placeholder="" /></div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-3 control-label">Ime</label>
                    <div class="col-md-8"><input type="text" id="edit-first_name" value="'.$_GET['first_name'].'" class="form-control" placeholder="" /></div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-3 control-label">Prezime</label>
                    <div class="col-md-8"><input type="text" value="'.$_GET['last_name'].'" id="edit-last_name" class="form-control" placeholder="" /></div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-3 control-label">spol</label>
                    <div class="col-md-8"><input type="text" id="edit-gender" value="'.$_GET['gender'].'" class="form-control" placeholder="" /></div>
                    </div>';
                $function = "UpdateEmployee(".$_GET['emp_no'].")";
                break;
            case 'delete_employee':
                $title = "Delete employee";
                $modalContent = "Sigurni ste da želite obrisati zaposlenika ".$_GET['first_name']." ".$_GET['last_name']."?";
                $function = "DeleteEmployee(".$_GET['emp_no'].")";
                break;
            case 'new_department':
                break;
            case 'edit_department':
                break;
            case 'delete_department':
                break;
            default:
                break;
        }
    }
    else
    {
        echo "";
    }
?>

<div class="modal-body" style="padding:0">
    <div class="modal-header" style="margin-bottom:25px;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title"><?php echo $title; ?></h2>
    </div>
    <form class="form-horizontal">
        <?php echo $modalContent; ?>
    </form>
    <div class="modal-footer">
        <button type="button" class="btn btn-success btn-s" onclick="<?php echo $function; ?>">Spremi</button>
        <button type="button" class="btn btn-success btn-s" data-dismiss="modal">Zatvori</button>
    </div>
</div>