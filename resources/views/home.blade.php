<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/home/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    @livewireStyles
    <title>Sock</title>
</head>
<!-- body -->

<body class="main-layout">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{ Auth::user()->name }}</span><span
                        class="text-black-50">{{ Auth::user()->email }}</span><span> <a
                            href="{{ route('logout') }}">Logout</a> </span>
                    <span> <button class="tablinks" onclick="openCity(event, 'Tokyo')"><i class="material-icons">history</i></button></span>
                    <div id="Tokyo" class="tabcontent">
                        <h3>Tokyo</h3>
                        <p>Tokyo is the capital of Japan.</p>
                      </div>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    @livewire('home-livewire')

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                        Experience</span><span class="border px-3 p-1 add-experience"><i
                            class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input
                        type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text"
                        class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>



    @livewireScripts
    <script>
        var btnCompanies = document.getElementById("send_report");

        btnCompanies.onclick = function() {
            window.alert("Successfully send to admins✅");
        }
    </script>
</body>

</html>
