//confirm
function delete_confirm()
 { 
    var result = confirm("Bạn có thực sự muốn xóa không?");    
    if(result)
    {
        return true;
    }    
    return false;
 }
$("div.alert").delay(3000).slideUp();