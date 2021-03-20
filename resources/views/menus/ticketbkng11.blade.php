<!---
/****
*@ticket generation
*@Arsha
*@date
*@13/03/2021
******/
---->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
    body {
    background-color: #000000
}

.bg-blue {
    background: blue
}

.dotted-line {
    border: 1px dashed #fff
}

.img-fluid {
    width: 114px;
    height: auto
}

.bg-top {
    background: #8E24AA
}
</style>
</head>
<body>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body d-flex flex-column justify-content-between text-white p-0">
                    <div class="p-4 bg-top">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex flex-column justify-content-between align-items-center">
                                <h1>IND</h1><span class="mb-2">Indianapolis</span><span>Thu, Aug 17</span><span>07:00 PM</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center"><i class="fa fa-plane fa-3x"></i></div>
                            <div class="d-flex flex-column justify-content-between align-items-center">
                                <h1>CDG</h1><span class="mb-2">Paris</span><span>Thu, Aug 17</span><span>03:00 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-danger p-4">
                        <div class="d-flex flex-column justify-content-between">
                            <div class="d-flex flex-row justify-content-between text-center">
                                <div><span class="d-block font-weight-bold">Flight</span><span>NJ-045</span></div>
                                <div><span class="d-block font-weight-bold">Gate</span><span>12</span></div>
                                <div><span class="d-block font-weight-bold">Terminal</span><span>B</span></div>
                                <div><span class="d-block font-weight-bold">Boarding Time</span><span>7:00 AM</span></div>
                            </div>
                            <div class="doted-lines">
                                <hr class="dotted-line">
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <div class="d-flex flex-column">
                                    <div><span class="d-block font-weight-bold">Passenger</span><span>Eric Rigs</span></div>
                                    <div class="mt-3"><span class="d-block font-weight-bold">Seat</span><span>7C</span></div>
                                    <div class="mt-3"><span class="d-block font-weight-bold">Amount</span><span>3000/-</span></div>
                                </div>
                                <div class="d-flex flex-column justify-content-between"><img class="img-fluid" src="https://i.imgur.com/DlgOLIW.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<html>