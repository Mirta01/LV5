var obj;
$( document ).ready(function(){
    LoadEmployees();
});


function LoadEmployees()
{
    $.ajax({
        url: 'json.php?json_id=get_all_employees',
        type: 'GET',
        success: function (oData)
        {
            var tbodyRef = $('#tableZaposlenici tbody');
            oData.forEach(function(el){
                tbodyRef.append('<tr><td>'+ el.emp_no +'</td><td>' + el.birth_date +'</td><td>'+ el.first_name +'</td><td>'+ el.last_name +'</td><td>'+ el.gender +'</td><td>'+ el.hire_date + 
                '</td><td class=\"glyphicon glyphicon-edit\" onclick=\"GetModal(\'modals.php?modal_id=edit_employee&emp_no='+ el.emp_no +'&birth_date='+ el.birth_date + '&first_name='+ el.first_name +'&last_name='+ el.last_name +'&gender='+ el.gender + '\')\" style=\"display:table-cell\">' +
                '</td><td class=\"glyphicon glyphicon-trash\" onclick=\"GetModal(\'modals.php?modal_id=delete_employee&emp_no='+ el.emp_no + '&first_name='+ el.first_name +'&last_name='+ el.last_name + '\')\" style=\"display:table-cell\"></td></tr>')
            });
            
        }
    });
}


function NewEmployee() {
    
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "NewEmployee",
            "birth_date": $("#new-birth_date").val(),
            "first_name": $("#new-first_name").val(),
            "last_name": $("#new-last_name").val(),
            "gender": $("#new-gender").val(),
            "hire_date": $("#new-hire_date").val()
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

function UpdateEmployee(nEmployeeID){
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "UpdateEmployee",
            "emp_no": nEmployeeID,
            "birth_date": $('#edit-birth_date').val(),
            "first_name": $('#edit-first_name').val(),
            "last_name": $('#edit-last_name').val(),
            "gender": $('#edit-gender').val(),
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

function DeleteEmployee(nEmployeeID){
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "DeleteEmployee",
            "emp_no": nEmployeeID,
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
