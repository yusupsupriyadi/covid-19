 <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="/home"class="{{ Request::path() == 'home' ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
           
            <li><a href="/uji" class="{{ Request::path() == 'uji' ? 'active' : '' }}"><i class="lnr lnr-pencil"></i> <span>Pengetesan</span></a></li>

            <li><a href="/hasil/{{auth()->user()->id}}" class="{{ Request::path() == 'hasil' ? 'active' : '' }}"><i class="lnr lnr-chart-bars"></i> <span>Hasil Tes</span></a></li>
          </ul>
        </nav>
      </div>
    </div>