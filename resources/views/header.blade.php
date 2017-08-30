<header>
        <h1 id="logo">
            <img src="/res/img/logo/logogoeshere-1.jpg" alt="Logo" height="60">
        </h1>
        <!-- <h1>Live Radio</h1> -->
        <nav>
            <ul>
                <li>
                    <a href="{{route('homePage')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('genres')}}">Genres</a>
                </li>
                <!-- <li>
                    <a href="{{route('stations')}}">Stations</a>
                </li> -->
                <li>
                    <a href="{{route('staticPage', ['url' =>'about'])}}">About</a>
                </li>
                <li>
                    <a href="{{route('staticPage', ['url' =>'contact'])}}">Contact</a>
                </li>
               <!--  <li>
                    <a href="#">Live Streams</a>
                </li> -->
                    
            </ul>
        </nav>
    </header>