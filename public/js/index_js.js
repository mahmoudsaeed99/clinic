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