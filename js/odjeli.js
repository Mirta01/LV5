var obj;
$( document ).ready(function(){
    LoadDepartments();
});


function LoadDepartments()
{
    $.ajax({
        url: 'json.php?json_id=get_all_departments',
        type: 'GET',
        success: function (oData)
        {
            console.log(oData);
            var tbodyRef = $('#tableZaposlenici tbody');
            oData.forEach(function(el){
                tbodyRef.append('<tr><td>'+ el.dept_no +'</td><td>' + el.dept_name +
                '</td><td class=\"glyphicon glyphicon-edit\" onclick=\"GetModal(\'modals.php?modal_id=edit_department&dept_no='+ el.dept_no +'&dept_name='+ el.dept_name + '\')\" style=\"display:table-cell\">' +
                '</td><td class=\"glyphicon glyphicon-trash\" onclick=\"GetModal(\'modals.php?modal_id=delete_department&dept_no='+ el.dept_no + '&dept_name='+ el.dept_name + '\')\" style=\"display:table-cell\"></td></tr>')
            });
            
        }
    });
}


function NewDepartment() {
    
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "NewDepartmente",
            "dept_name": $("#new-dept_name").val(),
        },
        success: function (oData)
        {
            if(oData != ""){
                console.log(oData);
            }else{
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, exception) {
            console.log("Ajax failure\n" + exception);
        },
        async: true
       });
}

function UpdateDepartment(nDepratmentID){
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "UpdateDepartmente",
            "dept_no": nDepratmentID,
            "dept_name": $('#edit-birth_date').val(),
        },

        success: function (oData)
        {
            if(oData != ""){
                console.log(oData);
            }else{
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, exception) {
            console.log("Ajax failure\n" + exception);
        },
        async: true
       });
}

function DeleteDepartment(nDepratmentID){
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "DeleteDepartmente",
            "dept_no": nDepratmentID,
        },

        success: function (oData)
        {
            if(oData != ""){
                console.log(oData);
            }else{
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, exception) {
            console.log("Ajax failure\n" + exception);
        },
        async: true
       });
}
