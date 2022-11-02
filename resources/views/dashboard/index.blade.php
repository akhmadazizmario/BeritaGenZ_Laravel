@extends('dashboard.layouts.main')

@section('container')
    <section id="hero-slider" class="hero-slider "style="background-color: #B6E3CE">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 mt-3">

                    <div class="">
                        <div
                            class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3">
                            <h4 class="h4 ">Welcome back {{ auth()->user()->name }}, in <br>
                                <center>
                                    <strong> My Dashboard
                                    </strong>
                                </center>
                            </h4>
                        </div>
                        <h5 class="mt-2" align="center">
                            <?php
                            date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                            echo date('G:i') . ' WIB - '; // menampilkan jam sekarang
                            ?>
                            <script>
                                var h = (new Date()).getHours();
                                var m = (new Date()).getMinutes();
                                var s = (new Date()).getSeconds();
                                if (h >= 4 && h < 10) document.writeln("Selamat pagi 👋");
                                if (h >= 10 && h < 15) document.writeln("Selamat siang 👋");
                                if (h >= 15 && h < 18) document.writeln("Selamat sore 👋");
                                if (h >= 18 || h < 4) document.writeln("Selamat malam 👋");
                            </script>
                        </h5>
                        <div class="mt-5 mb-3">
                            <center>
                                <img src="/img/Untitled.png" alt="" width="450vh">
                            </center>
                        </div>
                        <br><br>
                    </div>
                </div>

                <div class=" col-md-5 mt-2 mb-3">
                    <div class="">
                        <div class="container mt-2 bg-white">
                            <link rel='stylesheet'
                                href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />


                            <div id='calendar'></div>

                            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                            <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
                            <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
                            <script>
                                $(document).ready(function() {
                                    // page is now ready, initialize the calendar...
                                    $('#calendar').fullCalendar({
                                        // put your options and callbacks here
                                    })
                                });
                            </script>
                            <br>
                        </div>


                    </div>



                </div>
            </div>
        </div>
    </section>
@endsection
