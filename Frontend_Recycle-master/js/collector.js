function addInfo(){
window.location ="addInfo.html";
}

function back(){
window.location ="managerdashboard.html";
}
function viewCollectedWasteformanager(){
window.location = "viewWaste.html"
}

function viewBid(){
window.location = "bid.html"
}

// inserting time by the collector
function add(){
$(document).ready(function(){
$('#userForm').submit(function(){

// show that something is loading
$('#response').html("<b>Loading response...</b>");

$.post('http://localhost/backend/api.php?module=time&task=storeAll', $(this).serialize(), function(data){

// show the response
$('#response').html(data);
alert("succesfully added");

}).fail(function() {

// just in case posting your form failed
alert( "Posting failed." );

});

// to prevent refreshing the whole page page
return false;

});
});
}

// logging out

function Logout(){
        // localStorage.removeItem('collector');
        //  window.location= "../index.html";
          // alert("Successfully Logged out!!");
          window.location ="viewInfo.html";
                    }


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

                            // function setUpdateData(event) {
                            // var i = event.data.param1;
                            // var eventName = eventList[i].eventName;
                            // var eventId = eventList[i].eventId;
                            // var eventLocation = eventList[i].eventLocation;
                            // var eventDes = eventList[i].eventDes;
                            // var eventDate = eventList[i].eventDate;
                            // var eventPrice = eventList[i].eventPrice;
                            // console.log(eventList[i]);
                            // $("#eventId").val(eventId);
                            // $("#eventName").val(eventName);
                            // $("#eventLocation").val(eventLocation);
                            // $("#eventDes").val(eventDes);
                            // $("#eventDate").val(eventDate);
                            // $("#eventPrice").val(eventPrice);
                            // }
  function backEvent(){
                            window.location="managerdashboard.html";
                            }


  function doFunction(){
  	        localStorage.removeItem('collector');
         window.location= "../index.html";
          alert("Successfully Logged out!!");

  }

function viewWaste(){
    window.location="viewWaste.html";
}

function viewCollectedWaste(){
    window.location="collected.html";
}

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

    



        
        var type = $("<h1>").html(waste.wasteType);
        var quantity=$("<p><b>").html(waste.wasteQuantity);
            var location = $("<i>").html(waste.wasteLocation);
              
                        var listitem = $("<li>");
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