$(document).ready(function(){ 
            $("#sortby").change(function() {
    var sortby= $( "#sortby option:selected" ).val();
    
    var url = new URL(window.location.href);
url.searchParams.set('sortby',sortby);
window.location.href = url.href;
    });
    });