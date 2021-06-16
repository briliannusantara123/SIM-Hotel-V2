<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HOTEL Wikrama</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
         @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{$message}} <a href="/pesan">Print Bukti Booking</a></strong>
                        </div>
                      @endif
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span>Hotel Wikrama</span>
                </div>
                @if(Auth::check())
                <div class = "site-nav">
                    <span id = "nav-btn">Hai,{{auth()->user()->name}} <i class = "fas fa-bars"></i></span>
                </div>
                @else
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
                @endif
                
            </div>

            <div class = "head-bottom flex">
                <h2>Website Hotel Wikrama</h2>
                <h3>Kebahagiaan dan Kepuasan Anda Adalah Hal Utama Bagi Kami.</h3>
                
            </div>
        </header>
        <!-- end of header -->
                   
        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "#services">services</a></li>
                <li><a href = "#rooms">rooms</a></li>
                <li><a href = "#customers">customers</a></li>
            @if(Auth::check())
                <li><a href = "/pesan">Print Bukti Booking</a></li>
            @endif
            </ul>
             @if(Auth::check())
             <a href="/logout" class="btn btn-danger col-12">Logout</a>
             @else
             <a href="/daftar" class="btn btn-info">Sign Up</a>
            <a href="/login" class="btn btn-info">Sign In</a>
             @endif
            
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h2>services</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Layanan Makanan</h2>
                       
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Kolam Berenang</h2>
                       
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Pembenahan</h2>
                      
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Keamanan Kamar</h2>
                       
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>

        <div class = "book">
           
            <div class = "title">
                <h2>rooms</h2>
            </div>

            <div class = "rooms-container">
                <!-- single room -->
    @foreach($kamar as $kamar)
            <div class="row">
                <div class="col md-6">
                <article class = "room">
                     
                    <div class = "room-image">
                        <img src = "{{$kamar->image}}" alt = "room image" style="width: 550px;height: 550px;">
                    </div>
                    <div class = "room-text">
                        <h3>{{$kamar->namakamar}}</h3>
                        <ul>
                            <li>
                                
                                <h3>Fasilitas Kamar</h3>
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                {{$kamar->id_fasilitaskamar}}
                            </li>
                            <li>
                                
                            </li>
                        </ul>
                        <p>{{$kamar->deskripsi}}</p>
                        <p class = "rate">
                            <span>Rp {{$kamar->hargakamar}} /</span> Malam
                        </p>
                        @if(Auth::check())
                        @if(($kamar->jumlahkamar)<=0)
                            <h1 style="text-align: center;">KAMAR PENUH</h1>
                        @else
                        <a href="/home/{{$kamar->id}}/tambahbooking" class="btn btn-info" style="margin-left: 40%;"><i class="for "></i>Booking Now </a> 
                        @endif
                        @endif
                    </div>

                </article>
                </div>
                </div>
                <!-- end of single room -->
               @endforeach
        </div>


        


        <!-- end of body content -->
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>Sebuah Hotel Yang Berada Di SMK WIKRAMA Bogor</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#">Blog</a>
                    <a href = "#">Rooms</a>
                    <a href = "#">Subscription</a>
                    <a href = "#">Gift Card</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    <a href = "#">Services</a>
                </div>

                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            203 Fake St.Mountain View, San Francisco, California, USA
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +84545 37534 48
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            info@domain.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="script.js"></script>
    </body>
</html>