<div class="sidebar" id="sidebar">
  <div class="sidebar-header">
    <div class="sidebar-logo">
      <a href="{{route('dashboard')}}">
        <img src="{{url('global_assets/images/taxrx_logo.png')}}" class="img-fluid logo" alt="logo">
      </a>
    </div>
  </div>
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
    @if(session('usertype') === 'customer')
      <ul>
        <li class="menu-title"><span>Main</span></li>
        <li class="submenu">
        <a href="{{ route('dashboard') }}"><img src="{{ url('global_assets/images/house.svg')}}" /><span>Dashboard</span></a>
        </li>
        <li class="submenu">
          <a href="{{ route('CustomerView') }}"><img src="{{ url('global_assets/images/person-square.svg')}}" /><span>Customers</span></a>
        </li>
        <li class="submenu">
          <a href="{{ route('invoice')}}"><img src="{{ url('global_assets/images/receipt.svg')}}" /><span>Invoices</span></a>
        </li>
        <li class="submenu">
          <a href="{{route('purchases')}}"><img src="{{ url('global_assets/images/bag.svg')}}" /><span>Purchases</span></a>
        </li>
        <li class="submenu">
          <a href="{{ route('viewVendor') }}"><img src="{{ url('global_assets/images/people-fill.svg')}}" /><span>Vendors</span></a>
        </li>
      </ul>
      @else
      <ul>
        <li class="menu-title"><span>Main</span></li>
        <li class="submenu">
        <a href="{{ route('dashboard') }}"><img src="{{ url('global_assets/images/house.svg')}}" /><span>Dashboard</span></a>
        </li>
        <li class="submenu">
          <a href="{{ route('companies') }}"><img src="{{ url('global_assets/images/building-fill-check.svg')}}" /><span>Companies</span></a>
        </li>
        <li class="submenu">
          <a href="{{ route('invoice')}}"><img src="{{ url('global_assets/images/receipt.svg')}}" /><span>Invoices</span></a>
        </li>
      </ul>
      @endif

    </div>
  </div>
</div>
