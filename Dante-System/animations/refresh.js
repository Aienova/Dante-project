

   function load_js()
   {
      var head= document.getElementsByTagName('head')[0];
      var script= document.createElement('script');
      script.src= './animations/router.js';
      head.appendChild(script);
   }
   load_js();

   
