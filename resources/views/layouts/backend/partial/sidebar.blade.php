<aside id="leftsidebar" class="sidebar">
      <!-- User Info -->
      <div class="user-info">
          <div class="image">
              <img src="" style="width:48px;height:48px;"alt="User" />
          </div>
          <div class="info-container">
          <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
              <div class="email">{{ Auth::user()->email }}</div>
              <div class="btn-group user-helper-dropdown">
                  <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                  <ul class="dropdown-menu pull-right">
                      <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                      <li role="separator" class="divider"></li>

                      <li role="separator" class="divider"></li>
                      <li>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                          <i class="material-icons">input</i> Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>



                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <!-- #User Info -->
      <!-- Menu -->
      <div class="menu">
          <ul class="list">
              <li class="header">MAIN NAVIGATION</li>


                <li class="{{Request::is('admin') ? 'active' : ''}}">
                    <a href="{{ route('admin') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="{{Request::is('skill*') ? 'active' : ''}}">
                    <a href="{{ route('skill.index') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Skill</span>
                    </a>
                </li>

                <li class="{{Request::is('about*') ? 'active' : ''}}">
                    <a href="{{ route('about.index') }}">
                        <i class="material-icons">dashboard</i>
                        <span>About</span>
                    </a>
                </li>

                <li class="{{Request::is('expertise*') ? 'active' : ''}}">
                    <a href="{{ route('expertise.index') }}">
                        <i class="material-icons">dashboard</i>
                        <span><About>Expertise</About></span>
                    </a>
                </li>

                <li class="{{Request::is('myskill*') ? 'active' : ''}}">
                    <a href="{{ route('myskill.index') }}">
                        <i class="material-icons">dashboard</i>
                        <span><About>MySkill</About></span>
                    </a>
                </li>

                <li class="{{Request::is('education*') ? 'active' : ''}}">
                    <a href="{{ route('education.index') }}">
                        <i class="material-icons">dashboard</i>
                        <span><About>Education</About></span>
                    </a>
                </li>

                <li class="{{'experience' == request()->path() ? 'active': ''}}">
                    <a href="{{ route('experience.index') }}">
                        <i class="material-icons">dashboard</i>
                        <span><About>Experience</About></span>
                    </a>
                </li>

                <li class="{{'myself' == request()->path() ? 'active': ''}}">
                    <a href="{{ route('myself.index') }}">
                        <i class="material-icons">dashboard</i>
                        <span><About>Myself</About></span>
                    </a>
                </li>

                <li class="{{'profile' == request()->path() ? 'active': ''}}">
                    <a href="{{ route('profile.index') }}">
                        <i class="material-icons">dashboard</i>
                        <span><About>Profile</About></span>
                    </a>
                </li>




          </ul>
      </div>
      <!-- #Menu -->
      <!-- Footer -->
      <div class="legal">
          <div class="copyright">
              &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
          </div>
          <div class="version">
              <b>Version: </b> 1.0.5
          </div>
      </div>
      <!-- #Footer -->
  </aside>
