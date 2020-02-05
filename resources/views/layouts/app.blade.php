<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('public/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href= "/css/app.css" >

    <link rel="stylesheet" href="{{asset('public/admin/assets/css/style.css')}}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('usuario')}}"><img src="admin/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="{{route('usuario')}}"><img src="admin/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('usuario')}}"> <i class="menu-icon fa fa-dashboard"></i>Principal </a>
                    </li>
                    <h3 class="menu-title">Elementos</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Insumos</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-folder"></i><a href="{{route('categoria_insumos.index')}}">Categorias</a></li>
                        <li><i class="menu-icon fa fa-gear"></i><a href="{{route('insumos.index')}}">Listar Insumos</a></li>
                        <li><i class="menu-icon fa fa-folder-open"></i><a href="{{route('insumos_stocks.index')}}">Stock Insumos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('tiendas.index')}}"> <i class="menu-icon fa fa-money"></i>Tiendas </a>
                    </li>
                    <li>
                        <a href="{{'posts'}}"> <i class="menu-icon fa fa-file-text"></i>Blogs </a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-table"></i>Contactos </a>
                    </li>
                    <h3 class="menu-title">Menus</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list-ul"></i>Menu</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square-o"></i><a href="{{'catmenus'}}">Tipo</a></li>
                            <li><i class="menu-icon fa fa-check-square"></i><a href="{{'menus'}}">Menu Burger</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Recursos Humanos</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Personal</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-user"></i><a href="{{route('usersrol.index')}}">Listado del Personal</a></li>
                            <!--<li><i class="menu-icon fa fa-user"></i><a href="font-themify.html">Meseros</a></li>
                            <li><i class="menu-icon fa fa-user"></i><a href="font-fontawesome.html">Cajeros</a></li>
                            <li><i class="menu-icon fa fa-user"></i><a href="font-themify.html">Recepción</a></li>
                            <li><i class="menu-icon fa fa-user"></i><a href="font-fontawesome.html">Elaborador</a></li>-->
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->

        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('images/avatar/1.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('admin/images/admin.jpg')}}" alt="User Avatar"><span class="caret">{{ Auth::user()->name }}</span>
                        </a>



                        <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="{{route('users.show',auth()->user()->id)}}"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="{{route('users.edit',auth()->user()->id)}}"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          <i class="fa fa-power-off"></i>{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header>

        <!-- /header -->

<!-- /cajero view -->
        @yield('contenido')
      <!-- /cajero view -->
      <!-- Scroll to Top Button-->


    </div><!-- /#right-panel -->
    <div class="scroll-to-top d-lg-none position-fixed " style="display: block;">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
          <i class="fa fa-chevron-up"></i>
        </a>
      </div>
    <!-- Right Panel -->
    <script src="{{ asset('public/admin/vendors/jquery/jquery-3.3.1.min') }}"></script>
    <script src="{{ asset('public/admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/js/main.js') }}"></script>


    <script src="{{ asset('public/admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

    <script src="{{ asset('public/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>


    <script src="{{ asset('public/admin/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('public/admin/assets/js/widgets.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <!-- Custom scripts for this template -->
    <script type="text/javascript">
        (function($) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
          });
          "use strict";

          var table = $('.data-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('menus.index') }}",
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'menu', name: 'menu'},
                  {data: 'precio', name: 'precio'},
                  {data: 'foto', name: 'foto'},
                  {data: 'cat_id', name: 'cat_id'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });
          $('#createNewBook').click(function () {

              $('#saveBtn').val("create-book");
              $('#menu_id').val('');
              $('#menuForm').trigger("reset");
              $('.modal-title').text("Crear Nuevo Menu");
              $('#ajaxModel').modal('show');
          });
          $('body').on('click', '.editBook', function () {
            var menu_id = $(this).data('id');
            $.get("{{ route('menus.index') }}" +'/' + menu_id +'/edit', function (data) {
                $('.modal-title').text("Editar Menu");
                $('#saveBtn').val("Editar Menu");
                $('#ajaxModel').modal('show');
                $('#menu_id').val(data.id);
                $('#menu').val(data.menu);
                $('#precio').val(data.precio);
                $('#foto').val(data.foto);
                $('#cat_id').val(data.cat_id);
            })
         });
          $('#saveBtn').click(function (e) {
              e.preventDefault();
              $(this).html('Save');

              $.ajax({
                data: $('#bookForm').serialize(),
                url: "{{ route('menus.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {

                    $('#bookForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();

                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
          });

          $('body').on('click', '.deleteBook', function () {

              var menu_id = $(this).data("id");
              confirm("Are You sure want to delete !");

              $.ajax({
                  type: "DELETE",
                  url: "{{ route('menus.store') }}"+'/'+menu_id,
                  success: function (data) {
                      table.draw();
                  },
                  error: function (data) {
                      console.log('Error:', data);
                  }
              });
          });
      })(jQuery);
      </script>
</body>

</html>
