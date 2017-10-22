$(document).ready(function(){
    
    
    function viewData(idnum){
        
        $.ajax({
            
            type: "GET",
            url : "function/data.php",
            data: {id = idnum},
            success: function(data){
                
                $('#jawab_forum').html(data);
                
            }
            
        });
        
    }
    
    $("#tanggapi_forum").click(function(e){
        
        e.preventDefault();
        
        var id    = $("#id_forum").val();
        var email = $("#email_forum").val();
        var jawab = $("#jawaban_forum").val();
        
        $.ajax({
            
            type: "POST",
            url : "function/tambah.php?tambah=forum",
            data: "id_forum="+id+"&email_forum="+email+"&jawaban_forum="+jawab,
            success: function(data){
                alert("sukses");
            }
            
        });
        
    });
    
});