    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Панель управления</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Каталог товаров <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Категории товаров</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <li><a href="#about">Клиенты</a></li>
              <li><a href="#about">Корзины</a></li>
              <li>
                <a href="#contact">
                  <span class="badge badge-warning">3</span>
                  <span class="badge badge-important">4</span>
                  Заказы
                </a>
              </li>
              <form class="navbar-search">
                <input type="text" class="search-query" placeholder="Search">
              </form> 
            </ul>
            <div class="pull-right"> 
              <div class="btn-group pull-right">
                <button class="btn btn-success dropdown-toggle" 
                data-toggle="dropdown"><i class="icon-user"></i> {{ Auth::user()->username }} <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
