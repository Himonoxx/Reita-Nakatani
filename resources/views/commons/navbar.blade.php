<header class="">
    <nav class="navbar navbar-expand-sm navbar-light text-dark mb-0" style="background-color:transparent;"> 
        <a class="navbar-brand" href="/">Reita Nakatani</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item">{!! link_to_route('portfolios.portfolios','Portfolios',null,['class'=>'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('abouts.index','Abouts',null,['class'=>'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('contacts.create','Contacts',null,['class'=>'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('login','Developper',null,['class'=>'nav-link']) !!}</li>
                @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">{!! link_to_route('portfolios.create','Add Portfolios',null,['class'=>'nav-link']) !!}</li>
                            <li class="dropdown-item">{!! link_to_route('contacts.index','お問い合わせ受信箱',null,['class'=>'nav-link']) !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout',null,['class'=>'nav-link']) !!}</li>
                        </ul>
                @endif
                    
            </ul>
        </div>
    </nav>
</header>