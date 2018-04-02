<div class="col-md-3 rsidebar">
    <div class="rsidebar-top">
        <div class="sidebar-row">
            <h4>{{ Auth::User()->name}}</h4>
            <ul class="faq">
                <li class="item1"><a href="#">Perfil de Usuario<span class="glyphicon glyphicon-menu-down"></span></a>
                    <ul>
                        <li class="subitem1"><a href="{{route('my_perfil_phat')}} ">Mis datos</a></li>										
                        <li class="subitem1"><a href="{{route('date_send_phat')}}">Datos de Envio</a></li>										

                    </ul>
                </li>
                <li class="item2"><a href="#">Planes<span class="glyphicon glyphicon-menu-down"></span></a>
                    <ul>
                        <li class="subitem1"><a href="{{route('plan_free_phat')}} ">Plan gratis</a></li>										
                        <li class="subitem1"><a href="{{route('plan_day_phat')}}">Plan Actual</a></li>				 										

                    </ul>
                </li>
                <li class="item3"><a href="#">Libros<span class="glyphicon glyphicon-menu-down"></span></a>
                    <ul>				
                        <li class="subitem1"><a href="{{route('book_feature_phat') }}">Compras</a></li>	
                        <li class="subitem1"><a href="{{route('book_publis_phat')}}">Publicaciones</a></li>	
                    </ul>
                </li>
            </ul>
            <!-- script for tabs -->
            <script type="text/javascript">
                $(function () {

                    var menu_ul = $('.faq > li > ul'),
                      menu_a = $('.faq > li > a');

                    menu_ul.hide();

                    menu_a.click(function (e) {
                        e.preventDefault();
                        if (!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true, true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true, true).slideUp('normal');
                        }
                    });

                });
            </script>
            <!-- script for tabs -->
        </div> 
    </div>
</div>