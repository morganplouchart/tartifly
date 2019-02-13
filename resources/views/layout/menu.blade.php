
<nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="index.html">Tour</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            
                            <li><a href="/">Home</a></li>
                            
                            <li class="has-dropdown">
                                <a href="voyages">Voyages</a>
                                <!--<ul class="dropdown">
                                    <li><a href="#">Destination</a></li>
                                    <li><a href="#">Cruises</a></li>
                                    <li><a href="#">Hotels</a></li>
                                    <li><a href="#">Booking</a></li>
                                </ul>-->
                            </li>
                            <!--<<li><a href="hotels">Hotels</a></li>
                            <li><a href="services">Services</a></li>
                            <li><a href="blog">Blog</a></li>
                            <li><a href="about">About</a></li>
                            <li><a href="contact">Contact</a></li>-->
                            @guest
                            <li><a href="login">Login / s'enregister</a></li>   
                            @endguest
                            @auth
                            <li><a href="admin/create">Create Voyage</a></li>
                            <li><a href="login">Compte</a></li>
                            <li><a href="stats">stats</a></li>
                            @endauth
                           
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
