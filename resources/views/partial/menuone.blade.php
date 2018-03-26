<!-- //header-two -->
<?php

use App\Type;

$Type = Type::all();
?>
<div class="header-three"><!-- header-three -->
    <div class="container">
        <div class="menu">
            <div class="cd-dropdown-wrapper">
                <a class="cd-dropdown-trigger" href="#0">Categoria</a>
                <nav class="cd-dropdown"> 
                    <a href="#0" class="cd-close">Close</a>
                    <ul class="cd-dropdown-content"> 
                        @foreach($Type as $value)
                        <li>
                            <a href="{{ url('/type_books',$value->id) }}">{{$value->name}}</a> 
                        </li>
                        @endforeach

                    </ul> <!-- .cd-dropdown-content -->
                </nav> <!-- .cd-dropdown -->
            </div> <!-- .cd-dropdown-wrapper -->	 
        </div>
        <div class="move-text">
            <div class="marquee"><a href="offers.html"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
            <script type="text/javascript" src="js/jquery.marquee.min.js"></script>
            <script>
$('.marquee').marquee({pauseOnHover: true});
//@ sourceURL=pen.js
            </script>
        </div>
    </div>
</div>