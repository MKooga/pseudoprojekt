<!doctype html>
<html lang="en">
<head>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<button onclick="myFunction()">Tere maailm.</button>
<button id="parem">Luba parem klõps</button>
<button id="toggle">Näita/peida pilti</button>
<button id="red">red</button>
<button id="green">green</button>
<button id="blue">blue</button>

<a href="javascript:linkKHK();">tere maailm</a>
<a href="javascript:linkEi();">jääme siia</a>
<img src="https://www.petfinder.com/wp-content/uploads/2012/11/140272627-grooming-needs-senior-cat-632x475.jpg" id="cat"/>

<script>
    function myFunction() {
        alert("Tere maailm!");
    }
</script>
<script>
    function linkKHK() {
        alert("Tere maailm!");
        window.location="http://www.khk.ee";
    }
</script>
<script>
    function linkEi() {
        alert("jääme siia");
        event.preventDefault()
        window.location="http://www.khk.ee";

    }
</script>
<script>
$('#cat').on({
'click': function(){
$('#cat').attr('src','http://bedandbiscuitspetretreat.co.uk/Dog.jpg');
}
});
</script>
<script>
    $(document).ready(function() {
        $("#red").click(function() {
            $color=$(this).html();
            $("body").css("background-color",$color);
        });
        $("#green").click(function() {
            $color=$(this).html();
            $("body").css("background-color",$color);
        });
        $("#blue").click(function() {
            $color=$(this).html();
            $("body").css("background-color",$color);
        });
    });
    $bool=false;
    $(document).ready(function() {
        $(document).bind("contextmenu",function(e){

                return false;
        });
        });

</script>
<script>
    $(document).ready(function(){
        $("#parem").bind("click", function(){

            $(document).ready(function(){
                $(document).unbind("contextmenu");
                // OR
                $(document).bind("contextmenu",function(e){
                    return true;
                });
            });
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#toggle").click(function(){
            $("img").toggle();
        });
    });
</script>


</body>
</html>
