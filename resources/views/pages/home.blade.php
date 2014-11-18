@extends('base')
@section('meta')
@parent
<meta name="google-site-verification" content="NSLt633jPxjUB0kbU_qKkfbPDIGWNMcfiO3EumVcS6s" />
@stop
@section('menu')
@include('partials.slidemenu')
@stop
@section('content')
@include('partials.pageheader')
    <section class="icon-wrapper">
        <div id="sport-icon1" class="icon-holder">
            @include('svg.icons_athletics')
            <img src="{{ asset('images/icons/athletics.png') }}" class="icon-fallback" alt="athletics"/>
            <span class="sport-name">Athletics</span>
        </div>
        <div id="sport-icon2" class="icon-holder">
            @include('svg.icons_badminton')
            <img src="{{ asset('images/icons/badminton.png') }}" class="icon-fallback" alt="badminton"/>
            <span class="sport-name">Badminton</span>
        </div>
        <div id="sport-icon3" class="icon-holder">
            @include('svg.icons_basketball')
            <img src="{{ asset('images/icons/basketball.png') }}" class="icon-fallback" alt="basketball"/>
            <span class="sport-name">Basketball</span>
        </div>
        <div id="sport-icon4" class="icon-holder">
            @include('svg.icons_cricket')
            <img src="{{ asset('images/icons/cricket.png') }}" class="icon-fallback" alt="cricket"/>
            <span class="sport-name">Cricket</span>
        </div>
        <div id="sport-icon5" class="icon-holder">
            @include('svg.icons_custom')
            <img src="{{ asset('images/icons/custom.png') }}" class="icon-fallback" alt="custom"/>
            <span class="sport-name">Custom</span>
        </div>
        <div id="sport-icon6" class="icon-holder">
            @include('svg.icons_grandstand')
            <img src="{{ asset('images/icons/grandstand.png') }}" class="icon-fallback" alt="grandstands"/>
            <span class="sport-name">Grandstand</span>
        </div>
        <div id="sport-icon7" class="icon-holder">
            @include('svg.icons_handball')
            <img src="{{ asset('images/icons/handball.png') }}" class="icon-fallback" alt="handball"/>
            <span class="sport-name">Handball</span>
        </div>
        <div id="sport-icon8" class="icon-holder">
            @include('svg.icons_hockey')
            <img src="{{ asset('images/icons/hockey.png') }}" class="icon-fallback" alt="hockey"/>
            <span class="sport-name">Hockey</span>
        </div>
        <div id="sport-icon9" class="icon-holder">
            @include('svg.icons_netball')
            <img src="{{ asset('images/icons/netball.png') }}" class="icon-fallback" alt="netball"/>
            <span class="sport-name">Netball</span>
        </div>
        <div id="sport-icon10" class="icon-holder">
            @include('svg.icons_rugby')
            <img src="{{ asset('images/icons/rugby.png') }}" class="icon-fallback" alt="rugby"/>
            <span class="sport-name">Rugby</span>
        </div>
        <div id="sport-icon11" class="icon-holder">
            @include('svg.icons_soccer')
            <img src="{{ asset('images/icons/soccer.png') }}" class="icon-fallback" alt="soccer"/>
            <span class="sport-name">Soccer</span>
        </div>
        <div id="sport-icon12" class="icon-holder">
            @include('svg.icons_swimming')
            <img src="{{ asset('images/icons/swimming.png') }}" class="icon-fallback" alt="swimming"/>
            <span class="sport-name">Swimming</span>
        </div>
        <div id="sport-icon13" class="icon-holder">
            @include('svg.icons_tennis')
            <img src="{{ asset('images/icons/tennis.png') }}" class="icon-fallback" alt="tennis"/>
            <span class="sport-name">Tennis</span>
        </div>
        <div id="sport-icon14" class="icon-holder">
            @include('svg.icons_umpire')
            <img src="{{ asset('images/icons/umpire.png') }}" class="icon-fallback" alt="umpire"/>
            <span class="sport-name">Umpire</span>
        </div>
        <div id="sport-icon15" class="icon-holder">
            @include('svg.icons_volleyball')
            <img src="{{ asset('images/icons/volleyball.png') }}" class="icon-fallback" alt="volleyball"/>
            <span class="sport-name">Volleyball</span>
        </div>
        <div id="sport-icon16" class="icon-holder">
            @include('svg.icons_waterpolo')
            <img src="{{ asset('images/icons/waterpolo.png') }}" class="icon-fallback" alt="water polo"/>
            <span class="sport-name">Waterpolo</span>
        </div>
    </section>
    <div class="carousel-wrapper">
    <div class="sport-carousel">
        <div id="sport-slide1" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/athletics1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Athletics</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>High Jump Pole with Measuring Table</td>
                        </tr>
                        <tr>
                            <td>2</td><td>High Jump Gauge</td>
                        </tr>
                        <tr>
                            <td>3</td><td>Standard Height Adjustable Hurdles</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>High Jump landing mat JNR <span class="product-detail">2280 x 1370 x 365</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>High Jump landing mat SNR <span class="product-detail">2280 x 1370 x 405</span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>High Jump landing mat Large <span class="product-detail">2280 x 1370 x 405</span></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>High Jump landing mat Jumbo <span class="product-detail">3350 x 1370 x 450</span></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Portable Lap counter 0 -5 laps</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Athletic flags</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Garret Starting Block <span class="product-detail"> - School, Senior, International</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Athletics</p>
        </div>
        <div id="sport-slide2" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/badminton1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Badminton</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Portable Badminton Posts</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Yonex Badminton Net</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Yonex Badminton Set</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Badminton</p>
        </div>
        <div id="sport-slide3" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/basketball1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Basketball</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Tubular Basketball Ring and Net</td>
                        </tr>
                        <tr>
                            <td>2</td><td>Solid Basketball Ring and Net</td>
                        </tr>
                        <tr>
                            <td>3</td><td>Spring-Loaded Slamdunk Ring and Net</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Basketball Chain Net</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Weatherproof Wooden Backboard <span class="product-detail">920 x 680mm</span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Fan Shaped Fibreglass Backboard <span class="product-detail">1150 x 1200mm</span></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Official Size Fibreglass Backboard <span class="product-detail">1800 x 1200mm</span></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Light Duty Standard Basketball Post <span class="product-detail">76mm square tubing with Wooden Backboard, Solid Basketball Ring & Net</span></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Permanent Basketball Post <span class="product-detail">with <br>&diams; Gooseneck Power Pole, Ground Sleeves, Slamdunk Ring and Net <br>&diams; Fan-Shaped Fibreglass Backboard with Back Support</span></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Permanent Basketball Posts <span class="product-detail">with <br>&diams; Gooseneck Power Pole, Ground Sleeves, Slamdunk Ring and Net <br>&diams; Official Size Fibreglass Backboard (1800 x 1200mm) <br>&diams; Backing Frame and Back Supports</span></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Heavy Duty Portable Basketball Posts <span class="product-detail">with <br>&diams; Gooseneck Power Pole, Heavy duty Base with Wheels <br>&diams; Fan-Shaped Fibreglass Backboard, Slamdunk Ring and Net</span></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Heavy Duty Portable Basketball Posts <span class="product-detail">with <br>&diams; Gooseneck Power Pole, Heavy duty Base with Wheels <br>&diams; Official Size Fibreglass Backboard (1800 x 1200mm) <br>&diams; Slamdunk Ring and Net</span></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Light Duty Portable Basketball Posts <span class="product-detail">with <br>&diams; Standard Pole, Light Duty Base with Wheels, Wooden Backboard <br>&diams; Tubular Basketball Ring and Net</span></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Ultimate Heavy Duty Basketball Unit <span class="product-detail">with <br>&diams; Official Size Fibreglass Backboard (1800 x 1200mm)</span></td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Combination Basketball and Netball Posts <span class="product-detail">with <br>&diams; Ground Sleeves <br>&diams; Locking Swivel Pin <br>&diams; Fan-Shaped Fibreglass Backboard</span></td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Basketball</p>
        </div>
        <div id="sport-slide4" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/cricket1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Cricket</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Steel cricket Stumps</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Portable Cricket Score Board</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Permanent Cricket Scoreboard</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Flix Boundary Ropes <span class="product-detail">28mm or 32mm white polyester</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Branded or Unbranded Boundary Wedges</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Pitch Covers with reinforced edges and handles <span class="product-detail">Available in white, green,earth brown or blue</span></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Light Weight 180g PVC covers</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Heavy Duty 550g PVC covers</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Ultimate Heavy Duty 880g PVC covers</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Cricket</p>
        </div>
        <div id="sport-slide5" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/custom1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Custom</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Please contact us for any custom needs you may have.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Custom</p>
        </div>
        <div id="sport-slide6" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/grandstand1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Grandstands</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Galvanized 5-Tier - 3.6mm wide Grandstand</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Grandstands</p>
        </div>
        <div id="sport-slide7" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/handball1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Handball</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Portable Handball Goal Posts</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Handball</p>
        </div>
        <div id="sport-slide8" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/hockey1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Hockey</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Hockey Goals <span class="product-detail">with 18mm Shutterply Wood Backing</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Hockey Goals <span class="product-detail">with 6mm Rubber glued onto 18mm Shutterply Wood Backing</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Hockey Goals <span class="product-detail">with 6mm Rubber glued onto 2mm Galv Metal Backing</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Wheels for Hockey Goal Posts</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Mini Hockey with Wood Backing</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mini Hockey with Net Backing</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Hockey Nets</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Hockey</p>
        </div>
        <div id="sport-slide9" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/netball1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Netball</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Tubular netball Ring and Net</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tubular Netball Ring and Net with Socket</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Portable Netball Pole, Ring & Net with Legs</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Portable Netball Pole, Ring & Net with Base</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Heavy Duty Portable Netball Pole, Ring & Net with Base</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Light Duty Permanent Netball Pole, Ring, Net & Ground Sleeve</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Heavy Duty Permanent Netball Pole, Ring, Net & Ground Sleeve</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Netball</p>
        </div>
        <div id="sport-slide10" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/rugby1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Rugby</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Combination Rugby and Soccer Posts with Ground Sleeves</td>
                        </tr>
                        <tr>
                            <td>2</td><td>9m Rugby Posts with Ground Sleeves</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>10.5m Rugby Posts with Ground Sleeves</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Junior Sled-Type Scrum Machine</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Senior Sled-Type Scrum Machine</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Rugby</p>
        </div>
        <div id="sport-slide11" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/soccer1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Soccer</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Pre-Primary Soccer <span class="product-detail">2.4m x 1.2m</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pre-Primary Soccer <span class="product-detail">2.6m x 1.6m</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mini/Indoor Soccer <span class="product-detail">3.6m x 1.8m</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Junior Soccer <span class="product-detail">5m x 2m</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Official Size Light Duty Portable Soccer <span class="product-detail">7.32m x 2.44m</span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Official Size Light Standard Portable Soccer <span class="product-detail">7.32m x 2.44m</span></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Wheels for Portable Soccer Goal Posts</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Official Size Light Duty Permanent Soccer <span class="product-detail">7.32m x 2.44m</span></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Official Size Standard Permanent Soccer <span class="product-detail">7.32m x 2.44m</span></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Heavy Duty Soccer Nets <span class="product-detail">7.32m x 2.44m</span></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Light Duty Soccer Nets <span class="product-detail">7.32m x 2.44m</span></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Combination Soccer and Rugby Posts with Ground Sleeves</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Soccer</p>
        </div>
        <div id="sport-slide12" class="sport-slide prev">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/swimming1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Swimming</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Senior Starting Platforms - Galvanized</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Senior Starting Platforms - Stainless Steel</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Swimming Lanes</td>
                            </tr>
                        <tr>
                            <td>4</td>
                            <td>Senior Swimming Pool Lane Divider Roller - Galvanized</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Swimming</p>
        </div>
        <div id="sport-slide13" class="sport-slide selected">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/tennis1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Tennis</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Tennis Poles with Winder, Hook and Ground Sleeves</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tennis Winder Set</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Single Standard Tennis Net</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Singles Doubles Tennis Net</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Double Super Tennis Net</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Kanon Tennis Ball Machine</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Umpire Stands - 1.9m</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Tennis</p>
        </div>
        <div id="sport-slide14" class="sport-slide next">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/umpire1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Umpire</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Umpire Stands - 1.9m</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Umpire</p>
        </div>
        <div id="sport-slide15" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/volleyball1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Volleyball</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Volleyball Set: Park and Sun Flex 1000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Volleyball Set: Park and Sun Pro Spiker Sport</td>
                        </tr>
                        <tr>
                            <td>3</td><td>Light Duty Permanent Volleyball Posts with Footplate</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Standard Permanent Volleyball Posts with Ground Sleeves</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Heavy Duty Permanent Volleyball Posts</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Standard Portable Volleyball Posts with Base</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Standard Volleyball Net</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Heavy Duty Volleyball Net with Steel Cable</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Volleyball</p>
        </div>
        <div id="sport-slide16" class="sport-slide">
            <div class="slide-image-holder">
                <img src="{{ asset('images/carousel/waterpolo1.jpg') }}" alt="">
            </div>
            <div class="slide-info">
                <h1>Waterpolo</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th class="item-number">No.</th>
                            <th class="product-description">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Stainless Steel Goals Hinged to Side</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="nav-label">Waterpolo</p>
        </div>
    </div>
        <div class="next-arrow carousel-nav">
            @include('svg.site_icons.arrow_right')
            <img src="{{ asset('images/arrow_right.png') }}" alt="next slide"/>
        </div>
        <div class="prev-arrow carousel-nav">
            @include('svg.site_icons.arrow_left')
            <img src="{{ asset('images/arrow_left.png') }}" alt="previous slide"/>
        </div>
        <div id="exit-button">
            @include('svg.site_icons.home_icon')
            <img src="{{ asset('images/home_icon_white.png') }}" alt="exit carousel"/>
        </div>
    </div>
    @include('partials.footer')
@stop

@section('bodyscripts')
<script src="{{ asset('vendor/velocity.min.js') }}"></script>
<script src="{{ asset('vendor/velocity.ui.min.js') }}"></script>
<script src="{{ elixir('js/all.js') }}"></script>
@stop