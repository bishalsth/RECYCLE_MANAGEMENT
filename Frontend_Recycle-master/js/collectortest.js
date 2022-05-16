$( document ).ready(function() {
    myFunction()
});


function myFunction(){
var articleData;
(function() {
var newsAPI = "http://localhost/backend/api.php?module=time&task=listAll";
$.getJSON( newsAPI)
.done(function( data ) {
if(data.status==200){
$("#newslist").empty();
eventList = data.data;
$.each( eventList, function( i, time ) {

    
    var Deletebutton =$("<a>").attr("href","#delete")
    .attr("data-transition","slidedown").html("Delete")
    .click({param1: i}, setDeleteData);

    // var updatebutton =$("<a>").attr("href","#update")
    //     .attr("data-transition","slidedown").html("Update")
    //     .click({param1: i}, setUpdateData);
        
        var date = $("<h1>").html(time.date);
        var location=$("<p><b>").html(time.location);
            var time = $("<i>").html(time.time);
              
                        var listitem = $("<li>");
                            listitem.append(date);
                            listitem.append(location);
                            listitem.append(time);
                            
                            // listitem.append(updatebutton);
                            listitem.append(Deletebutton);
                            $("#newslist").append(listitem);
                            
                            });
                            $("#newslist").listview("refresh");
                            }
                            
                            });
                            })();
                            }



  function setDeleteData(time){
                            var i = time.data.param1;
                            
                            var timeId = eventList[i].timeId;
                            $("#eventId").val(timeId);
                            }