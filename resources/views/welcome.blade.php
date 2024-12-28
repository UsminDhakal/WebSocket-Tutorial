<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">

        <input type="text" id="message">
        <button class="buttom">Fire Event</button>
    </body>

    @vite(['resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {


            $(".buttom").click(function () {
                $.ajax({
                    type: "get",
                    url: "{{ route('subscribed') }}",
                    data: {
                        message: $("#message").val()
                    },
                    success: function (response) {
                        console.log("Ifred");
                    }
                });
            });
           

            // setTimeout(() => {

                console.log("Hello");
                window.Echo.channel("trades").listen("NewTrade", (e) => {
                    console.log(e);
                    alert(e.trade);
                });
            // }, 1000);
        });
    </script>
</html>
