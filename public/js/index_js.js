
var teethContainer = ["" , "one" , "two", "three" , "four" , "five" , "six" , "seven" , "eight" , "nine" , "ten",
                    "eleven" , "twelve" , "thirteen" ,"fourteen" , "fiftenn" , "sixteen" , "seventeen" ,"eighteen" , "ninteen",
                    "twenty" , "twentyone" , "twentytwo" , "twentythree" , "twentyfour" ,  "twentyfive" , "twentysix" , "twentyseven",
                    "twentyeight" , "twentynine" , "thirty" , "thirtyone" , "thirtytwo"]

colorTemp = `<div class="color">
        <span class="color-item"  onclick="changeColor(this)" style="background-color:white"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:#f8b6a8"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:yellow"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:#a7e8c8"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:#00d2ff"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:#000232"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:#e69f31"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:#0bcd74"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:#620062"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:#B8860B"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:#abacab"></span>
        <span class="color-item"  onclick="changeColor(this)" style="background-color:#FF1493"></span>
        </div>`;
$(".test").mouseenter(
    function (e) {
        $(this).append(colorTemp);
        console.log($(this).position().top)
        $(".color").css("top",$(this).position().top+130);  
        $(this).children().last().show();
    }
);
$(".test").mouseleave(
    function () {
        $(this).children().last().hide();
    }
);
function changeColor(e) {
    var c = $(e).css("background-color");
    $(e).parent().parent().children("img").css("background-color", c)
    var id = $(e).parent().parent().children("img").attr("id");
    var name = teethContainer[id];
    var patient  = document.getElementById ("patientID").textContent
    var type = ""
    if(id > 16){
        type = "lower"
    }
    else{
        type = "upper"
    }
    $.ajax({
        type :"GET",
        url :"http://127.0.0.1:8000/patient/change/color/"+patient+"/"+type+"/"+name+"/"+c+"",
        data:(patient , type , name , c),
        success: function() {
            console.log("Value added");
          }
    })

}

function save() {
    var imgs = Array.from(document.getElementsByClassName("test"));
    for (var i = 0; i < imgs.length; i++) {
        var c = $(imgs[i]).children("img").css("background-color");
        console.log(c);
    }
}
function deleteService(){
    var id  = document.getElementById ( "id" ).innerText
    console.log(id)
    $.ajax({
        type :"GET",
        url :"http://127.0.0.1:8000/admin/service/delete/"+id+"",
        data:id,
        success: function() {
            console.log("Value added");
          }
    })
    
}


function addService(id){
    console.log(id);
    var price = document.getElementById ("price"+id).innerText
    var patient  = document.getElementById ("patientID").textContent
    $.ajax({
        type :"GET",
        url :"http://127.0.0.1:8000/patient/add/service/"+patient+"/"+id+"",
        data:(patient , id),
        success: function() {
            window.alert("service added");
          }
    })
    $.ajax({
        type :"GET",
        url :"http://127.0.0.1:8000/patient/add/money/"+patient+"/"+price+"",
        data:(patient , price),
    })



}

function bookDate(){
    var patient  = document.getElementById ("patientID").textContent
    var date = document.getElementById("bookDate").value
    $.ajax({
        type :"GET",
        url :"http://127.0.0.1:8000/patient/bookDate/"+patient+"/"+date+"",
        data:(patient , date),
        success: function() {
            window.alert("create booking");
          }
    })
    for(var i = 0 ; i < 10000000 ; i++){

    }
    
}

function changeCommit(id){
    $.ajax({
        type :"GET",
        url :"http://127.0.0.1:8000/admin/bookChange/"+id+"",
        data:id,
        success: function() {
            window.alert("change booking");
            location.reload();
          }
    })
}