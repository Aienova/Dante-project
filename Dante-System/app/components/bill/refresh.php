

<script >


var component = "bill";

$('#'+component).mouseover(function(){


console.log('Touche moi'+component);


$.ajax({
      url : './app/components/'+component+'/layout.php',
      type : 'post',
      success: function(data) {

        
       $('#panel').html(data);
      },
      error: function() {
       $('#panel').text('An error occurred');
      }
  });




});


</script>