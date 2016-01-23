!function ($) {

  /** Set up initial load and load on option updates (.pl-trigger will fire this) */  /** Set up initial load and load on option updates (.pl-trigger will fire this) */
  $( '.expand-toggle' ).on('template_ready', function(){

    $.expand-toggle.init( $(this) )

  })

  
  $(document).ready(function () {
    $('.pl-expand-toggle').on('click', function(event){
    	event.preventDefault();
    	// create expand variables
    	var expand = $(this);
    	var expandContent = expand.next('.pl-expand-content');
    	
    	// toggle expand link open class
    	expand.toggleClass("open");
    	// toggle expand content
    	expandContent.slideToggle(350);
    	
    });
});

   $(document).ready(function () {
    $('.pl-expandshortcode-toggle').on('click', function(event){
    	event.preventDefault();
    	// create expandshortcode variables
    	var expandshortcode = $(this);
    	var expandshortcodeContent = expandshortcode.next('.pl-expandshortcode-content');
    	
    	// toggle expandshortcode link open class
    	expandshortcode.toggleClass("open");
    	// toggle expandshortcode content
    	expandshortcodeContent.slideToggle(350);
    	
    });
});


}(window.jQuery);
