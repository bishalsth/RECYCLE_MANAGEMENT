$( document ).ready(function() {
    ViewWaste()
});


function ViewWaste(){
var articleData;
(function() {
var newsAPI = "http://localhost/backend/api.php?module=waste&task=listAll";
$.getJSON( newsAPI)
.done(function( data ) {
if(data.status==200){
$("#newslist").empty();
eventList = data.data;
$.each( eventList, function( i, waste ) {
        var type = $("<h1 id='".concat(waste.wasteType,"/",waste.wasteQuantity,"/",waste.wasteLocation,"'>"))
        type.html(waste.wasteType);
        var collect = $("<h2 class='collectorhead' ' id='".concat(waste.wasteType,"/",waste.wasteQuantity,"/",waste.wasteLocation,"'>"))
        collect.html("Collect");
        var quantity=$("<p><b>").html(waste.wasteQuantity);
            var location = $("<i>").html(waste.wasteLocation);
              
                        var listitem = $("<li>")
                            listitem.append(type);
                            listitem.append(collect);
                            listitem.append(quantity);
                            listitem.append(location);
                            
                           
                            $("#newslist").append(listitem);
                            
                            });
                            $("#newslist").listview("refresh");
                            }
                            
                            });
                            })();
                            }