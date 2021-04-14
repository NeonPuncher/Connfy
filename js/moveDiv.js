function LoadDivs() {
    divs = document.getElementsByTagName("div");

    for (div of divs) div.onpointerdown = onpointerdown;            
    document.onpointermove = onpointermove;
    document.onpointerup = onpointerup;
                
        canvas.width = screen.width;
        canvas.height = screen.height;
                
        var the_moving_div = ''; 
        var the_last_mouse_position = { x:0, y:0 };

        function onpointerdown(e) {
            the_moving_div            = e.target.id;      // remember which div has been selected 
            the_last_mouse_position.x = e.clientX;        // remember where the mouse was when it was clicked
            the_last_mouse_position.y = e.clientY;
            e.target.style.border = "2px solid blue";     // highlight the border of the div
                
            var divs = document.getElementsByTagName("div");
            e.target.style.zIndex = divs.length;          // put this div  on top
            var i = 1; for (div of divs) if (div.id != the_moving_div) div.style.zIndex = i++;   // put all other divs behind the selected one
        }
                
        function onpointermove(e) {
            if (the_moving_div == "") return;
            var d = document.getElementById(the_moving_div);
            d.style.left = d.offsetLeft + e.clientX - the_last_mouse_position.x + "px";     // move the div by however much the mouse moved
            d.style.top  = d.offsetTop  + e.clientY - the_last_mouse_position.y + "px";
            the_last_mouse_position.x = e.clientX;                                          // remember where the mouse is now
            the_last_mouse_position.y = e.clientY;
        }
                
        function onpointerup(e) {
            if (the_moving_div == "") return;
            document.getElementById(the_moving_div).style.border = "none";             // hide the border again
            the_moving_div = "";
        }
}


