<!DOCTYPE html>
<html>
<head>
    <title>Hello</title>
</head>
<body>
    <h1 class="h1">Hello, Vite!</h1>

    @vite(['resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            window.Echo.channel("trades_1").listen("NewTrade", (e)=>{
                $(".h1").append(e.trade);
                console.log(e);
            })
        });
    </script>
</body>
</html>
