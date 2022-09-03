<div class="left-side-bar">
  <div class="brand-logo">
    <a href="{{route('admin_index')}}">
      <img src="{{asset('Dashboard/vendors/images/toletx_logo_main.png')}}" alt="" class="dark-logo">
      <img src="{{asset('Dashboard/vendors/images/toletx_logo_main.png')}}" alt="" class="light-logo">
    </a>
    <div class="close-sidebar" data-toggle="left-sidebar-close">
      <i class="ion-close-round"></i>
    </div>
  </div>
  <div class="menu-block customscroll">
    <div class="sidebar-menu">
      <ul id="accordion-menu">
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
          </a>
          <ul class="submenu">
            <li><a href="index.html">Dashboard style 1</a></li>
            <li><a href="index2.html">Dashboard style 2</a></li>
            <li><a href="index3.html">Dashboard style 3</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Room</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_room')}}">Add Room</a></li>
            <li><a href="{{route('list_room')}}">List Room</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Flat</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_flat')}}">Add Flat</a></li>
            <li><a href="{{route('list_flat')}}">List Flat</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Parking Spot</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_parking_spot')}}">Add Parking Spot</a></li>
            <li><a href="{{route('list_parking_spot')}}">List Parking Spot</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Hotel</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_hotel')}}">Add Hotel</a></li>
            <li><a href="{{route('list_hotel')}}">List Hotel</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Hostel</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_hostel')}}">Add Hostel</a></li>
            <li><a href="{{route('list_hostel')}}">List Hostel</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Office</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_office')}}">Add Office</a></li>
            <li><a href="{{route('list_office')}}">List Office</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Land</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_land')}}">Add Land</a></li>
            <li><a href="{{route('list_land')}}">List Land</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Community Center</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_community')}}">Add Community Center</a></li>
            <li><a href="{{route('list_community')}}">List Community Center</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Shooting Spot</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_shooting')}}">Add Shooting Spot</a></li>
            <li><a href="{{route('list_shooting')}}">List Shooting Spot</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Shop</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_shop')}}">Add Shop</a></li>
            <li><a href="{{route('list_shop')}}">List Shop</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Factory</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_factory')}}">Add Factory</a></li>
            <li><a href="{{route('list_factory')}}">List Factory</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Warehouse</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_warehouse')}}">Add Warehouse</a></li>
            <li><a href="{{route('list_warehouse')}}">List Warehouse</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Pond</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_pond')}}">Add Pond</a></li>
            <li><a href="{{route('list_pond')}}">List Pond</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Swimming Pool</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_swimmingpool')}}">Add Swimming Pool</a></li>
            <li><a href="{{route('list_swimmingpool')}}">List Swimming Pool</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Bilboard</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_bilboard')}}">Add Bilboard</a></li>
            <li><a href="{{route('list_bilboard')}}">List Bilboard</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Rooftop</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_rooftop')}}">Add Rooftop</a></li>
            <li><a href="{{route('list_rooftop')}}">List Rooftop</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Resort</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_restuarant')}}">Add Resort</a></li>
            <li><a href="{{route('list_restuarant')}}">List Resort</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Gallery</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_gallery')}}">Add Gallery</a></li>
            <li><a href="{{route('list_gallery')}}">List Gallery</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Exibution Center</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_exibution_center')}}">Add Exibution Center</a></li>
            <li><a href="{{route('list_exibution_center')}}">List Exibution Center</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Play Ground</span>
          </a>
          <ul class="submenu">
            <li><a href="{{route('add_playground')}}">Add Play Ground</a></li>
            <li><a href="{{route('list_playground')}}">List Play Ground</a></li>
          </ul>
        </li>
        <li>
          <a href="calendar.html" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
          </a>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
          </a>
          <ul class="submenu">
            <li><a href="ui-buttons.html">Buttons</a></li>
            <li><a href="ui-cards.html">Cards</a></li>
            <li><a href="ui-cards-hover.html">Cards Hover</a></li>
            <li><a href="ui-modals.html">Modals</a></li>
            <li><a href="ui-tabs.html">Tabs</a></li>
            <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
            <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
            <li><a href="ui-notification.html">Notification</a></li>
            <li><a href="ui-timeline.html">Timeline</a></li>
            <li><a href="ui-progressbar.html">Progressbar</a></li>
            <li><a href="ui-typography.html">Typography</a></li>
            <li><a href="ui-list-group.html">List group</a></li>
            <li><a href="ui-range-slider.html">Range slider</a></li>
            <li><a href="ui-carousel.html">Carousel</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
          </a>
          <ul class="submenu">
            <li><a href="font-awesome.html">FontAwesome Icons</a></li>
            <li><a href="foundation.html">Foundation Icons</a></li>
            <li><a href="ionicons.html">Ionicons Icons</a></li>
            <li><a href="themify.html">Themify Icons</a></li>
            <li><a href="custom-icon.html">Custom Icons</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
          </a>
          <ul class="submenu">
            <li><a href="highchart.html">Highchart</a></li>
            <li><a href="knob-chart.html">jQuery Knob</a></li>
            <li><a href="jvectormap.html">jvectormap</a></li>
            <li><a href="apexcharts.html">Apexcharts</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional Pages</span>
          </a>
          <ul class="submenu">
            <li><a href="video-player.html">Video Player</a></li>
            <li><a href="{{route('custom_login')}}">Login</a></li>
            <li><a href="forgot-password.html">Forgot Password</a></li>
            <li><a href="reset-password.html">Reset Password</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-browser2"></span><span class="mtext">Error Pages</span>
          </a>
          <ul class="submenu">
            <li><a href="400.html">400</a></li>
            <li><a href="403.html">403</a></li>
            <li><a href="404.html">404</a></li>
            <li><a href="500.html">500</a></li>
            <li><a href="503.html">503</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
          </a>
          <ul class="submenu">
            <li><a href="blank.html">Blank</a></li>
            <li><a href="contact-directory.html">Contact Directory</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="blog-detail.html">Blog Detail</a></li>
            <li><a href="product.html">Product</a></li>
            <li><a href="product-detail.html">Product Detail</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="pricing-table.html">Pricing Tables</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-list3"></span><span class="mtext">Multi Level Menu</span>
          </a>
          <ul class="submenu">
            <li><a href="javascript:;">Level 1</a></li>
            <li><a href="javascript:;">Level 1</a></li>
            <li><a href="javascript:;">Level 1</a></li>
            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle">
                <span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
              </a>
              <ul class="submenu child">
                <li><a href="javascript:;">Level 2</a></li>
                <li><a href="javascript:;">Level 2</a></li>
              </ul>
            </li>
            <li><a href="javascript:;">Level 1</a></li>
            <li><a href="javascript:;">Level 1</a></li>
            <li><a href="javascript:;">Level 1</a></li>
          </ul>
        </li>
        <li>
          <a href="sitemap.html" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
          </a>
        </li>
        <li>
          <a href="chat.html" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
          </a>
        </li>
        <li>
          <a href="invoice.html" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <div class="sidebar-small-cap">Extra</div>
        </li>
        <li>
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
          </a>
          <ul class="submenu">
            <li><a href="introduction.html">Introduction</a></li>
            <li><a href="getting-started.html">Getting Started</a></li>
            <li><a href="color-settings.html">Color Settings</a></li>
            <li><a href="third-party-plugins.html">Third Party Plugins</a></li>
          </ul>
        </li>
        <li>
          <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-paper-plane1"></span>
            <span class="mtext">Landing Page <img src="{{asset('Dashboard/vendors/images/coming-soon.png')}}" alt="" width="25"></span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
