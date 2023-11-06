  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-white elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>dashboard" class="brand-link navbar-orange">
      <img src="<?php echo base_url();?>assets/img/payaso1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ANIMACIONES</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/img/payaso1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php $profileURL = base_url().'usuarios/viewprofile/'.$this->session->userdata('id_usuario');?>
          <a href="<?php echo $profileURL;?>" class="d-block"><?php echo $this->session->userdata("nombre");?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <?php if($this->session->userdata('rol') == 1) { ?>
                  <li class="nav-item">
                    <!--<a href="#" class="nav-link">                           
                      <i class="nav-icon fas fa-cog"></i>           
                      <p>
                        Administracion
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>-->
                    <!--<ul class="nav nav-treeview">-->
                      <li class="nav-item">
                        <a href="<?php echo base_url();?>usuarios" class="nav-link">
                          <i class="fas fa-users nav-icon"></i>
                          <p>Usuarios</p>
                        </a>
                      </li>   
                    <!--</ul>-->
                    <!--<ul class="nav nav-treeview">-->
                      <li class="nav-item">
                        <a href="<?php echo base_url();?>categorias" class="nav-link">
                          <i class="fas fa-bars nav-icon"></i>
                          <p>Categoria</p>
                        </a>
                      </li>   
                    <!--</ul>-->
                    <!--<ul class="nav nav-treeview">-->
                      <li class="nav-item">
                        <a href="<?php echo base_url();?>productos" class="nav-link">
                          <i class="fas fa-store nav-icon"></i>
                          <p>Servicios</p>
                        </a>
                      </li>   
                    <!--</ul>-->
                    <!--<ul class="nav nav-treeview">-->

                      <li class="nav-item">
                        <a href="<?php echo base_url();?>paquetes" class="nav-link">
                          <i class="fas fa-gift nav-icon"></i>
                          <p>Paquetes</p>
                        </a>
                      </li>   
                    <!--</ul>-->
                    <!--<ul class="nav nav-treeview">-->
                      <li class="nav-item">
                        <a href="<?php echo base_url();?>reportes" class="nav-link">
                          <i class="fas fa-file-text nav-icon"></i>
                          <p>Reportes</p>
                        </a>
                      </li>   
                    <!--</ul>-->
                  </li>

          <?php }?>
          
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>reserva" class="nav-link">
                      <i class="fas fa-gifts nav-icon"></i>
                      <p>Reservas</p>
                      </a>
                  </li>   
          <?php if($this->session->userdata('rol') == 2) { ?>   
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>reserva/misreservas" class="nav-link">
                      <i class="fas fa-shopping-basket nav-icon"></i>
                      <p>Mis Reservas</p>
                      </a>
                  </li>   
          <?php }?>          
                         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>