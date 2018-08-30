<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>
        <!-- vue的挂载点-->
        <div id='app'>

            <!--使用我们建立的组件-->

            <example></example>
        </div>
        <!-- <div id="ipp">
            @{{ message }}
        </div> -->
        <!--载入打包后的js-->
        <script src="/js/app.js"></script>
    
        <!-- <script>
            var app = new Vue({
                el: "#ipp",
                data: {
                    message: 'this the project with vue and laravel'
                }
            })
        </script> -->
    </body>

</html>
