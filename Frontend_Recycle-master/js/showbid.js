$( document ).ready(function() {
    ViewWaste()
});


function ViewWaste(){
var articleData;
(function() {
var newsAPI = "http://localhost/backend/api.php?module=ShowBid&task=listAll";
$.getJSON( newsAPI)
.done(function( data ) {
if(data.status==200){
$("#newslist").empty();
eventList = data.data;
$.each( eventList, function( i, waste ) {
        var type = $("<h1>")
        type.html(waste.wastename);
        var quantity=$("<p><b>").html(waste.username);
            var location = $("<i>").html(waste.bid_amount);
              
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