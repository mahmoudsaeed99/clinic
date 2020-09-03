<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{asset('js/index_js.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/ajax.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script>
        $("#operation").click(function() {
    $(".operator").slideToggle(1000);
    $(".book").hide(1000);
})
$("#book").click(function() {
    $(".book").slideToggle(1000);
    $(".operator").hide(1000);
})
$(".imgList").click(function(e){
    var imgSrc = $(this).attr("src");
    console.log(imgSrc)
    $(".imgDis").attr("src",imgSrc);
})

    </script>
</body>

</html>