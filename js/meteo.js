// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal
var img = document.getElementById("myImg");

img.onclick = function(){
    modal.style.display = "block";
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
        modal.style.display = "none";
    }

// Get informations of weather in website
var css_file=document.createElement("link");
css_file.setAttribute("rel","stylesheet");
css_file.setAttribute("type","text/css");
css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-160x275.css?v=0.0.1');
document.getElementsByTagName("head")[0].appendChild(css_file);
function setWidgetData(data) {
    if(typeof(data) != 'undefined' && data.results.length > 0) {
        for(var i = 0; i < data.results.length; ++i) {
            var objMainBlock = document.getElementById('m-booked-bl-simple-week-vertical-37080');
            if(objMainBlock !== null) {
                var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type);
                objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null)
                    objMainBlock.appendChild(copyBlock);
            }
        }
    } else {
        alert('data=undefined||data.results is empty');
    }
}
