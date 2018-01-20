/*jshint browser:true */
/*global $ */(function()
{
 "use strict";
 /*
   hook up event handlers 
 */
 function register_event_handlers()
 {
    
    
     /* button  #btnmenu */
    
    
        /* button  #btnmenu */
    $(document).on("click", "#btnmenu", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_2"));  
         return false;
    });
    
        /* button  #btn_back_vehicle */
    $(document).on("click", "#btn_back_vehicle", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* graphic button  #btn_menu */
    $(document).on("click", "#btn_menu", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_2"));  
         return false;
    });
    
        /* button  #btn_menu */
    $(document).on("click", "#btn_menu", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_2"));  
         return false;
    });
    

      $(document).on("click", "#btn_vehicle", function(evt)
    {
         /*global activate_page */
         activate_page("#vehicle_page"); 
         return false;
    });
             /* button  #btn_back_vehicle */
    $(document).on("click", "#btn_back_vehicle", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    }
	
	
	
 document.addEventListener("app.Ready", register_event_handlers, false);
})();




