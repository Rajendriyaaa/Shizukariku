<ul class="navbar-nav bg-pink sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('logo.png') }}" class="rounded-circle" alt="Profile Image" style="width: 50px; height: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3">Shizukariku</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route("dashboard")}}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route("about")}}">
            <span>About Us</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route("product")}}">
            <span>Product</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route("contact")}}">
            <span>Contact Us</span></a>
    </li>



</ul>
