var jq = jQuery.noConflict();
jq(document).ready(function() {
    jq('#add').click(function(){
         var soluong= jq("#opt").val();

         var id=jq("input[type=hidden]").val();
        // // alert (soluong+ "  " +rowid);

        // alert(id);
         jq.ajax({
            url:'shoppingcart/'+id+'?page=sanpham&soluong='+soluong,
            type:"GET",
            cache:false,
            data:{
                "id":id,
                "soluong":soluong,
            },
            success:function(data){
                if(data=="ok"){
                    window.location="../gio_hang";
                }
            }

        });
    });
});
//delay
jq("div.alert").delay(7000).slideUp();






