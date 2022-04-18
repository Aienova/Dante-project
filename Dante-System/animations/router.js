/*
  Copyright 2019 Google LLC

  Use of this source code is governed by an MIT-style
  license that can be found in the LICENSE file or at
  https://opensource.org/licenses/MIT.
*/




function navto(_url){







  
  
  $.ajax({
      url : './app/components/'+_url+'/layout.php',
      type : 'post',
      success: function(data) {

        
       $('#panel').html(data);
      },
      error: function() {
       $('#panel').text('An error occurred');
      }
  });


  

console.log(_url);









              }

              
  

          










  
  

