$("#closeModal").click( function() { 
    $("#modal").hide(); 
} );
  
/* Compatibility Mode */
jQuery('#closeModal').on('click', function() {
   jQuery("#modal").hide();
});