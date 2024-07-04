<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class={{Request()->is('Admin') ? 'active':''}}>
            <a href="/Admin"
            ><i class="fa-solid fa-house"></i><span> Home</span>
            </a>
        </li>
          <li class="submenu">
              <a href="javascript:void(0);"
              ><i class="fa-solid fa-droplet"></i
                  ><span> Manage Donations</span>
                  <span class="menu-arrow"></span
                  ></a>
              <ul>
                  <li>
                      <a href='/Admin/Blood Donation' class={{Request()->is('Admin/Blood Donation*') ? 'active':''}}>Blood
                          Donations list</a>
                  </li>
              </ul>
          </li>
          <li class="submenu">
              <a href="javascript:void(0);"
              ><i class="fa-solid fa-hospital"></i><span>Centers</span>
                  <span class="menu-arrow"></span
                  ></a>
              <ul>
                  <li><a href="/Admin/Centers" class={{Request()->is('Admin/Centers')&&('Admin/Center/Update') ? 'active':''}}>Center List</a></li>
                  <li><a href="/Admin/ADD Center" class={{Request()->is('Admin/ADD Center') ? 'active':''}}>New Center</a>
                  </li>
                  <li><a href="/Admin/List Admins" class={{Request()->is('Admin/List Admins*')&&('Admin/Update Admins*') ? 'active':''}}>Admin list</a></li>
                  <li><a href="/Admin/ADD Admin" class={{Request()->is('Admin/ADD Admin*') ? 'active':''}}>New Admin</a></li>
              </ul>
          </li>
          <li class="submenu">
              <a href="javascript:void(0);"
              ><i class="fa fa-users"></i><span> Donor Management</span>
                  <span class="menu-arrow"></span
                  ></a>
              <ul>
                  <li><a href="/Admin/list Donors" class={{Request()->is('Admin/list Donors*') ? 'active':''}}>Donor list</a></li>
              </ul>
          </li>
          <li class="submenu">
              <a href="javascript:void(0);"
              ><i class="fa-solid fa-user-group"></i><span> Users</span>
                  <span class="menu-arrow"></span
                  ></a>
              <ul>
                  <li>
                      <a href="/Admin/list Publication" class={{Request()->is('Admin/list Publication*') ? 'active':''}}>Management Publication</a>
                  </li>
                  <li><a href="/Admin/list User" class={{Request()->is('Admin/list User*') ? 'active':''}}>List User</a></li>
              </ul>
          </li>
          <li class="submenu">
              <a href="javascript:void(0);"
              ><i class="fa-solid fa-user-gear"></i><span> Workers</span>
                  <span class="menu-arrow"></span
                  ></a>
              <ul>
                  <li><a href="{{route('ShowformAdd')}}" class={{Request()->is('Admin/new Workers') ? 'active':''}}>New Worker</a></li>
                  <li><a href="{{route('listWorker')}}" class={{Request()->is('Admin/Workers list') ? 'active':''}}>Workers List</a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('Logout')}}"
            ><i class="fa-solid fa-arrow-right-from-bracket"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
