 <div class="topbar">
    <div class="logo-container">🔥 MyApp</div>

    <div class="visit-site">
      <a href="{{ url('/') }}" target="_blank">Visit Site</a>

    </div>

    <div class="day-time" id="dayTime">--:-- --</div>

    <div class="other-info">
      <ul class="topnav-menu">
        <li class="nav-item">
          <a href="#" id="light-dark-mode" class="nav-link"><i class="icon">🌙</i></a>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link notif-btn"><i class="icon">🔔</i><span class="badge">3</span></a>
          <div class="dropdown-menu">
            <div class="dropdown-header">
              <h5>Notifications</h5>
              <a href="#" class="clear-all">Clear All</a>
            </div>
            <a href="#" class="dropdown-item">New message received</a>
            <a href="#" class="dropdown-item">Server restarted</a>
            <a href="#" class="dropdown-item">Order shipped</a>
            <a href="#" class="dropdown-footer">View all →</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link profile-link">
            <img src="https://via.placeholder.com/40" alt="User" class="avatar">
            <span class="username">{{ Auth::user()->name ?? 'Admin' }} ⌄</span>
          </a>
          <div class="dropdown-menu">
            <div class="dropdown-header"><h6>Welcome!</h6></div>
            <a href="#" class="dropdown-item">My Account</a>
            <a href="#" class="dropdown-item">Settings</a>
            <a href="#" class="dropdown-item">Wallet <span class="badge success">3</span></a>
            <hr>
            <a href="{{route('logout')}}" class="dropdown-item logout">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
