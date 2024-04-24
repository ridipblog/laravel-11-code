$(document).ready(function(){
    // ---------------- admin login --------------------
    $(document).on('submit','#admin-login-form',async function(e){
        e.preventDefault();
        var form_data=new FormData($(this)[0]);
        $.ajax({
            type:'post',
            url:"/admin-login",
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data:form_data,
            dataType:"json",
            contentType:false,
            processData:false,
            success:function(result){
                console.log(result);
            },error:function(data){
                console.log(data);
            }
        });
    });
    // ---------------- admin update bank name ------------------
    $(document).on('click','#bank_btn',function(){
        var bank_name=$('#bank_name').val();
        console.log(bank_name);
        $.ajax({
            type:'post',
            url:'/admin-bank-name',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                bank_name:bank_name
            },
            success:function(result){
                console.log(result);
            },error:function(data){
                console.log(data);
            }
        });
    });
    // ---------------- admin update account name --------------
    $(document).on('click','#account_btn',function(){
        var account_name=$('#account_name').val();
        console.log(account_name);
        $.ajax({
            type:'post',
            url:'/admin-update-account',
            data:{
                account_name:account_name
            },
            success:function(result){
                console.log(result);
            },error:function(data){
                console.log(data);
            }
        });
    });
});
