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
                tbodyRef.append('<tr><td>'+ el.emp_no +'</td><td>' + el.birth_date +'</td><td>'+ el.first_name +'</td><td>'+ el.last_name +'</td><td>'+ el.gender +'</td><td>'+ el.hire_date +'</td><td class=\"glyphicon glyphicon-edit\" onclick=\"GetModal(\'modals.php?modal_id=edit_employee\')\" style=\"display:table-cell\"></td><td class=\"glyphicon glyphicon-trash\" onclick=\"GetModal(\'modals.php?modal_id=delete_employee\')\" style=\"display:table-cell\"></td></tr>')
            });
            
        }
    });
}
