$(document).ready(function(){ 
            $("#sortby").change(function() {
    var sortby= $( "#sortby option:selected" ).val();
    
    var url = new URL(window.location.href);
url.searchParams.set('sortby',sortby);
window.location.href = url.href;
    });
    });

$(document).ready(function(){ 
            $("#id_color").click(function() {
    var color= $( "#id_color option:selected" ).val();
    $.ajax({
        url: 'product_details.php',
        type: 'POST',
        data: {option_color : color},
        success: function() {
            console.log("Data sent!");
        }
    });
            });});
        
   $(document).ready(function(){      
            $("#id_size").click(function() {
    var size= $( "#id_size option:selected" ).val();
    $.ajax({
        url: 'product_details.php',
        type: 'POST',
        data: {option_size : size},
        success: function() {
            console.log("Data sent!");
        }
    });
    
            });
            });