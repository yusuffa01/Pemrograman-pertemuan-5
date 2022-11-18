function selectprodi(){
    var x = document.getElementById("mahasiswa").value;

    $.ajax({
        url:"main.php",
        method: "POST",
        data:{
            id : x
        },
        success:function(data){
            $("#ans").html(data);
        }
    })

}