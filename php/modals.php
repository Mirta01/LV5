<?php
include "connection.php";

    $title = "";
    if (isset($_GET["modal_id"]))
    {
        $stat = $_GET["modal_id"];
        
        switch ($stat)
        {
            case 'new_employee':
                $title = "New employee";
                $sQuery = "SELECT * FROM employees LIMIT 25;";
                $oRecord = $Connection->query($sQuery);
                $aEmployees = array();
                break;
            case 'edit_employee':
                $title = "Edit employee";
                break;
            case 'delete_employee':
                $title = "Delete employee";
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
 <h4 class="modal-title"><?php echo $title; ?></h4>
 </div>
 <form class="form-horizontal">
 <div class="form-group">
 <label class="col-md-3 control-label">Label</label>
 <div class="col-md-8"><input type="text" class="form-control" placeholder="" /></div>
 </div>
 </form>
 <div class="modal-footer">
 <button type="button" class="btn btn-success btn-s" onclick="">Spremi</button>
 <button type="button" class="btn btn-success btn-s" datadismiss="modal">Zatvori</button>
 </div>
</div>