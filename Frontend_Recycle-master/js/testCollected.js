$( document ).ready(function() {
    ViewWaste()
});


function ViewWaste(){
var articleData;
(function() {
var newsAPI = "http://localhost/backend/api.php?module=collector&task=listAll";
$.getJSON( newsAPI)
.done(function( data ) {
if(data.status==200){
$("#newslist").empty();
eventList = data.data;
$.each( eventList, function( i, waste ) {
        var type = $("<h1 id='".concat(waste.wastename,"/",waste.quantity,"/",waste.location,"'>"))
        type.html(waste.wastename);
        var quantity=$("<p><b>").html(waste.quantity);
            var location = $("<i>").html(waste.location);
              
                        var listitem = $("<li>")
                            listitem.append(type);
                            listitem.append(quantity);
                            listitem.append(location);
                            
                           
                            $("#newslist").append(listitem);
                            
                            });
                            $("#newslist").listview("refresh");
                            }
                            
                            });
                            })();
                            }