<?php
    echo "hahah";
    if (isset($_GET["modal_id"]))
    {
        $stat = $_GET["modal_id"];

        switch ($stat)
        {
            case 'new_employee':
                break;
            case 'edit_employee':
                break;
            case 'delete_employee':
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
        echo "baqnana";
    }
?>

<div class="modal-body" style="padding:0">
 <div class="modal-header" style="margin-bottom:25px;">
 <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 <h4 class="modal-title" style="color:white">Title</h4>
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