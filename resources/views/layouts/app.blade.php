<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <link
         rel="icon"
         href="{{ asset('thema/assets/img/kaiadmin/favicon.ico') }}"
         type="image/x-icon"
         />
      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <!-- Fonts and icons -->
      <script src="{{ asset('thema/assets/js/plugin/webfont/webfont.min.js') }}"></script>
      <script>
         WebFont.load({
           google: { families: ["Public Sans:300,400,500,600,700"] },
           custom: {
             families: [
               "Font Awesome 5 Solid",
               "Font Awesome 5 Regular",
               "Font Awesome 5 Brands",
               "simple-line-icons",
             ],
             urls: ["{{ asset('thema/assets/css/fonts.min.css') }}"],
           },
           active: function () {
             sessionStorage.fonts = true;
           },
         });
      </script>
      <!-- CSS Files -->
      <link rel="stylesheet" href="{{ asset('thema/assets/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('thema/assets/css/plugins.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('thema/assets/css/kaiadmin.min.css') }}" />
   </head>
   <body>
      <div class="wrapper">
         <!-- Sidebar -->
         <div class="sidebar" data-background-color="dark">
            <!-- Logo Header -->
            <div class="sidebar-logo">
               <div class="logo-header" data-background-color="dark">
                  <a href="index.html" class="logo">
                     <x-application-logo 
                        alt="navbar brand"
                        class="navbar-brand"
                        height="80"
                        />
                  </a>
                  <div class="nav-toggle">
                     <button class="btn btn-toggle toggle-sidebar">
                     <i class="gg-menu-right"></i>
                     </button>
                     <button class="btn btn-toggle sidenav-toggler">
                     <i class="gg-menu-left"></i>
                     </button>
                  </div>
                  <button class="topbar-toggler more">
                  <i class="gg-more-vertical-alt"></i>
                  </button>
               </div>
            </div>
            <!-- End Logo Header -->

            <!-- Sidebar Módulos -->
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
               <div class="sidebar-content">
                  <ul class="nav nav-secondary">
                     <li class="nav-section">
                        <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Titulo</h4>
                     </li>
                     <li class="nav-item active">
                        <a data-bs-toggle="collapse" href="#submenu">
                           <i class="fas fa-bars"></i>
                           <p>Menu Levels</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="submenu">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a data-bs-toggle="collapse" href="#subnav1">
                                 <span class="sub-item">Level 1</span>
                                 <span class="caret"></span>
                                 </a>
                                 <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                       <li>
                                          <a href="#">
                                          <span class="sub-item">Level 2</span>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#">
                                          <span class="sub-item">Level 2</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                              <li>
                                 <a data-bs-toggle="collapse" href="#subnav2">
                                 <span class="sub-item">Level 1</span>
                                 <span class="caret"></span>
                                 </a>
                                 <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                       <li>
                                          <a href="#">
                                          <span class="sub-item">Level 2</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                              <li>
                                 <a href="#">
                                 <span class="sub-item">Level 1</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- End Sidebar -->
         
         <!-- Navbar -->
         <div class="main-panel">
            <div class="main-header">
               <!-- Navbar Header -->
               <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                  <div class="container-fluid">
                     <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                        <!-- Mensagens -->
                        <li class="nav-item topbar-icon dropdown hidden-caret">
                           <a
                              class="nav-link dropdown-toggle"
                              href="#"
                              id="messageDropdown"
                              role="button"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              >
                           <i class="fa fa-envelope"></i>
                           </a>
                           <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                              <li>
                                 <div
                                    class="dropdown-title d-flex justify-content-between align-items-center"
                                    >
                                    Message s
                                    <a href="#" class="small">Mark all as read</a>
                                 </div>
                              </li>
                              <li>
                                 <div class="message-notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                       <a href="#">
                                          <div class="notif-img">
                                             <img
                                                src="{{ asset('thema/assets/img/jm_denis.jpg') }}"
                                                alt="Img Profile"
                                                />
                                          </div>
                                          <div class="notif-content">
                                             <span class="subject">Jimmy Denis</span>
                                             <span class="block"> How are you ? </span>
                                             <span class="time">5 minutes ago</span>
                                          </div>
                                       </a>
                                       <a href="#">
                                          <div class="notif-img">
                                             <img
                                                src="{{ asset('thema/assets/img/chadengle.jpg') }}"
                                                alt="Img Profile"
                                                />
                                          </div>
                                          <div class="notif-content">
                                             <span class="subject">Chad</span>
                                             <span class="block"> Ok, Thanks ! </span>
                                             <span class="time">12 minutes ago</span>
                                          </div>
                                       </a>
                                       <a href="#">
                                          <div class="notif-img">
                                             <img
                                                src="{{ asset('thema/assets/img/mlane.jpg') }}"
                                                alt="Img Profile"
                                                />
                                          </div>
                                          <div class="notif-content">
                                             <span class="subject">Jhon Doe</span>
                                             <span class="block">
                                             Ready for the meeting today...
                                             </span>
                                             <span class="time">12 minutes ago</span>
                                          </div>
                                       </a>
                                       <a href="#">
                                          <div class="notif-img">
                                             <img
                                                src="{{ asset('thema/assets/img/talha.jpg') }}"
                                                alt="Img Profile"
                                                />
                                          </div>
                                          <div class="notif-content">
                                             <span class="subject">Talha</span>
                                             <span class="block"> Hi, Apa Kabar ? </span>
                                             <span class="time">17 minutes ago</span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <a class="see-all" href="javascript:void(0);"
                                    >See all messages<i class="fa fa-angle-right"></i>
                                 </a>
                              </li>
                           </ul>
                        </li>

                        <!-- Sair do sistema -->
                        <li class="nav-item topbar-icon dropdown hidden-caret">
                          <a
                             class="nav-link dropdown-toggle"
                             href="#"
                             id="messageDropdown"
                             role="button"
                             data-bs-toggle="dropdown"
                             aria-haspopup="true"
                             aria-expanded="false"
                             >
                             <i class="fas fa-sign-out-alt"></i>
                          </a>
                     </ul>
                  </div>
               </nav>
               <!-- End Navbar -->
            </div>

            <!-- Page Content -->
            {{ $slot }}
            
            <!-- Footer -->
            <footer class="footer">
               <div class="container-fluid d-flex justify-content-between">
                  <div class="copyright">
                     {{ env('APP_NAME') }}
                  </div>
                  <div class="copyright">
                     {{ date('Y') }}, made with <i class="fa fa-heart heart text-danger"></i> by <a href="">Vinícius de Senna</a>
                  </div>
               </div>
            </footer>

         </div>
      </div>
      <!-- Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <!--   Core JS Files   -->
      <script src="{{ asset('thema/assets/js/core/jquery-3.7.1.min.js') }}"></script>
      <script src="{{ asset('thema/assets/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('thema/assets/js/core/bootstrap.min.js') }}"></script>
      <!-- jQuery Scrollbar -->
      <script src="{{ asset('thema/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
      <!-- Chart JS -->
      <script src="{{ asset('thema/assets/js/plugin/chart.js/chart.min.js') }}"></script>
      <!-- jQuery Sparkline -->
      <script src="{{ asset('thema/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
      <!-- Chart Circle -->
      <script src="{{ asset('thema/assets/js/plugin/chart-circle/circles.min.js') }}"></script>
      <!-- Datatables -->
      <script src="{{ asset('thema/assets/js/plugin/datatables/datatables.min.js') }}"></script>
      <!-- Bootstrap Notify -->
      <script src="{{ asset('thema/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
      <!-- jQuery Vector Maps -->
      <script src="{{ asset('thema/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
      <script src="{{ asset('thema/assets/js/plugin/jsvectormap/world.js') }}"></script>
      <!-- Sweet Alert -->
      <script src="{{ asset('thema/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
      <!-- Kaiadmin JS -->
      <script src="{{ asset('thema/assets/js/kaiadmin.min.js') }}"></script>
      <!-- Kaiadmin DEMO methods, don't include it in your project! -->
      <script src="{{ asset('thema/assets/js/setting-demo.js') }}"></script>
      <script src="{{ asset('thema/assets/js/demo.js') }}"></script>
   </body>
</html>