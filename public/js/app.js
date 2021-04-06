$(document).ready(function(){
   
    $("#check_ajax").click(function(){
     
        var data_id=$(this).attr('data-id');
          
        data={id:data_id};
        // alert(data);
        $.ajax({
            url:'?mod=page&action=update',//trang xử lí mặc định hiện tại
            method: 'POST',//Post hoặc GET, mặc định là GET
            data: data,//Dữ liệu truyền lên sever
            dataType:'text', //html, text, script hoặc json
            success:function (data){
                alert(data);
            },
            error:function(xhr,ajaxOption, throwError){
                alert(xhr.status);
                alert(throwError);
            }
        });
        return false;
    });

});