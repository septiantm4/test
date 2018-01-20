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
	 $(document).on("click", "#btn_group", function(evt)
    {
         /*global activate_page */
         activate_page("#group_page"); 
         return false;
    });
             /* button  #btn_back_vehicle */
    $(document).on("click", "#btn_back_vehicle", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* graphic button  #btn_refresh */
    $(document).on("click", "#btn_refresh", function(evt)
    {
        /* your code goes here */ 
         location.reload();
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
	 
	     $(document).on("click", "#vehicle_1", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($("sidebar_vehicle"));  
         return false;
    });
    
  
    
        /* button  #btn-back-user */
    
    
        /* button  #btn_back_group */
    $(document).on("click", "#btn_back_group", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });

        /* button  Button */
    $(document).on("click", ".uib_w_19", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* graphic button  #btn_user */
   
    
        /* button  #btn_back_user */
    $(document).on("click", "#btn_back_user", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
    
        /* button  #btn_logout */
    $(document).on("click", "#btn_logout", function(evt)
    {
        /* your code goes here */ 
         return false;
    });
    
        /* button  Back */
    $(document).on("click", ".uib_w_21", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* graphic button  #btn_user */
    $(document).on("click", "#btn_user", function(evt)
    {
         /*global activate_page */
         activate_page("#user_page"); 
         return false;
    });
    
        /* button  #btn_back_user */
    $(document).on("click", "#btn_back_user", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });

 $(document).on("click", "#btn_logout", function(evt)
    {
         /*global activate_page */
    window.open("../login.html"); 
    });
    
	 
    
    }
 document.addEventListener("app.Ready", register_event_handlers, false);
})();




