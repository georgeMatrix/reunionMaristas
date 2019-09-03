<!-- Sidebar -->
<ul style="background-color: #003560" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">



    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <div class="text-center">
        <img src="{{asset('img/logotipos_maristas.png')}}" alt="" height="170px" width="150px">
    </div>
    <p class=" text-center text-white"><b>Provincia Marista de México Central</b></p>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('registro.create')}}">
            <i class="far fa-address-book"></i>
            <span>Registro</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('registro.index')}}">
            <i class="fas fa-user-lock"></i>
            <span>Control</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->

</ul>
<!-- End of Sidebar -->