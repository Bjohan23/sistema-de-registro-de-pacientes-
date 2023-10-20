
<div id="app">
  <nav id="navbar-main" class="navbar is-fixed-top">
    <!-- nav izquierda 3 puntos -->
    <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider is-hoverable">
      <a class="navbar-link is-arrowless">
        <span class="icon"><i class="mdi mdi-menu"></i></span>
        <span></span>
        <span class="icon">
        <i class="mdi mdi-chevron-down"></i>
      </span>
      </a>
      <div class="navbar-dropdown">
        <a href="profile.html" class="navbar-item">
          <span class="icon"><i class="mdi mdi-account"></i></span>
          <span>Perfil</span>
        </a>
        <hr class="navbar-divider">
        <a class="navbar-item">
          <span class="icon"><i class="mdi mdi-logout"></i></span>
          <span>Salir</span>
        </a>
      </div>
    </div>
<!--  -->

    <div class="navbar-brand">
      <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a>
      <div class="navbar-item has-control">
        <!-- para buscar  -->
        <!-- <div class="control"><input placeholder="Search everywhere..." class="input"></div> -->
      </div>
    </div>

    <div class="navbar-brand is-right">
      <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
        <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
      </a>
    </div>
    <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
          <a class="navbar-link is-arrowless">
            <div class="is-user-avatar">
              <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe">
            </div>
            <!-- REMPLASAR POR EL USUARIO  -->
            <div class="is-user-name"><span>Johan B </span></div>
            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
          </a>
          <div class="navbar-dropdown">
            <a href="profile.html" class="navbar-item">
              <span class="icon"><i class="mdi mdi-account"></i></span>
              <span>Perfil</span>
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-logout"></i></span>
              <span>Salir</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider is-hoverable">
      <a class="navbar-link is-arrowless">
        <span class="icon"><i class="mdi mdi-menu"></i></span>
        <span></span>
        <span class="icon">
      </span>
      </a>
    </div>

  </nav>
  <!-- nav  -->
  <!-- lado derecho -->

  <aside class="aside is-placed-left is-expanded">    <!-- para la barra de navegacion a la izquierda   -->
    <div class="aside-tools">
      <div class="aside-tools-label">
        <span></span>
        <a href="index.html" class="no-link-style">
          <span><b><i class="mdi mdi-hospital"> </i> ONCONOR</b> </span>
        </a>
        <style>
          .no-link-style {
            text-decoration: none; /* Elimina el subrayado */
            color: inherit; /* Utiliza el color heredado (normalmente, el color del texto) */
          }
          
        </style>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label ">Navegacion</p>

      <ul class="menu-list">
        <li>
          <a class="has-icon has-dropdown-icon">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Admision</span>
            <div class="dropdown-icon">
              <span class="icon"><i class="mdi mdi-plus"></i></span>
            </div>
          </a>
          <ul>
            <li>
              <a href="agendamiento/mostrarCitas.php">
                <span>Mostrar Citas</span>
              </a>
            </li>
            <li>
              <a href="agendamiento/registrar.php">
                <span>Agendamientos</span>
              </a>
            </li>
          </ul>
        </li>

      </ul>

      <ul class="menu-list">
        <li>
          <a class="has-icon has-dropdown-icon">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Consulta</span>
            <div class="dropdown-icon">
              <span class="icon"><i class="mdi mdi-plus"></i></span>
            </div>
          </a>
          <ul>
            <li>
              <a href="#void">
                <span>Atencion</span>
              </a>
            </li>
            
          </ul>
        </li>

      </ul>

      <!-- <ul class="menu-list">
        <li>
          <a class="has-icon has-dropdown-icon">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Seguridad</span>
            <div class="dropdown-icon">
              <span class="icon"><i class="mdi mdi-plus"></i></span>
            </div>
          </a>
          <ul>
            <li>
              <a href="#void">
                <span>Empleado</span>
              </a>
            </li>
          </ul>
        </li>

      </ul>
      <ul class="menu-list">
        <li>
          <a class="has-icon has-dropdown-icon">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Laboratorio</span>
            <div class="dropdown-icon">
              <span class="icon"><i class="mdi mdi-plus"></i></span>
            </div>
          </a>
          <ul>
            <li>
              <a href="#void">
                <span>Examenes</span>
              </a>
            </li>
          </ul>
        </li>

      </ul>
      <ul class="menu-list">
        <li>
          <a class="has-icon has-dropdown-icon">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Seguimiento</span>
            <div class="dropdown-icon">
              <span class="icon"><i class="mdi mdi-plus"></i></span>
            </div>
          </a>
          <ul>
            <li>
              <a href="#void">
                <span>Historia Clinica</span>
              </a>
            </li>
          </ul>
        </li>

      </ul> -->

      <!-- <ul class="menu-list">
        

      </ul> -->


    </div>
  </aside>
<!--  -->
  <section class="section is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul style="list-style: none;">
            <li style="list-style: none; margin:4px;"><strong>INICIO</strong></li>
          </ul>
          
          <li style="list-style: none;">ONCONOR</li>
        </div>
      </div>
      <!-- <div class="level-right">
        <div class="level-item">
          <div class="buttons is-right">
            <a href="https://github.com/vikdiesel/admin-one-bulma-dashboard" target="_blank" class="button is-primary">
              <span class="icon"><i class="mdi mdi-github-circle"></i></span>
              <span>GitHub</span>
            </a>
          </div>
        </div>
      </div> -->
    </div>
  </section>


<div>
  <section>
    <div class="card">
      
      <div class="card-content">
        <div class="chart-area">
          <div style="height: 100%;">
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
                <div></div>
              </div>
              <div class="chartjs-size-monitor-shrink">
                <div></div>
              </div>
            </div>
            <!-- <canvas id="big-line-chart" width="2992" height="1000" class="chartjs-render-monitor" ></canvas> -->
            <img src="img/im.jpg"width="100%" height="100%"  alt="">
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="level">
            <div class="level-left">
              <div class="level-item">
                Copyright © 2023, johan.BV
              </div>
            </div>
            <div class="level-right">
              <div class="level-item">
                <div class="logo">
                  <div class="level-item">
                    <h6><strong>Version 1.0</strong></h6>
                  </div>
                  <!-- ACA PUEDO AGREGAR UNA IMAGEN Y SE MOSTRARA EN LA PARTE DERECHA  -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    
  

    
  </section>

</div>
<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="js/chart.sample.min.js"></script>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>