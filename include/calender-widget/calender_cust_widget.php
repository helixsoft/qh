<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/include/calender-widget/calendar.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/include/calender-widget/yahoo-dom-event.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/include/calender-widget/calendar-min.js"></script>
<!-- Dependency --> 
<script src="http://yui.yahooapis.com/2.9.0/build/yahoo/yahoo-min.js" ></script>
 
<!-- Event source file -->
<script src="http://yui.yahooapis.com/2.9.0/build/event/event-min.js" ></script>
<div class="yui-skin-sam">
    <div id="cal1Container"></div>
		<script type="text/javascript">
            YAHOO.namespace("example.calendar");
            YAHOO.example.calendar.init = function() {
                YAHOO.example.calendar.cal1 = new YAHOO.widget.Calendar("cal1","cal1Container");
                YAHOO.example.calendar.cal1.render();
				YAHOO.example.calendar.cal1.selectEvent.subscribe(calender_pop_up, YAHOO, true);
            }
            YAHOO.util.Event.onDOMReady(YAHOO.example.calendar.init);
			function myFn(){
				alert("ddddd");	
			}
        </script>
    <div style="clear:both" ></div>
</div>