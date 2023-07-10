<!--APP-SIDEBAR-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">

   <div class="side-header">
      <a class="header-brand1" href="user/dashboard">
         <img src="admin/assets/img/{logo2}" class="header-brand-img desktop-logo" alt="logo">
         <img src="admin/assets/img/{logo2}" class="header-brand-img toggle-logo" alt="logo">
         <img src="admin/assets/img/{logo2}" class="header-brand-img light-logo" alt="logo">
         <img src="admin/assets/img/{logo2}" class="header-brand-img light-logo1" alt="logo">
      </a><!-- LOGO -->
   </div>
   <ul class="side-menu">
      <li class="slide">
         <a class="side-menu__item" href="user/dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="20" class="side-menu__icon">
               <path d="M0 0h24v24H0V0z" fill="none" />
               <path d="M3 4h18v10H3z" opacity=".3" />
               <path d="M21 2H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7l-2 3v1h8v-1l-2-3h7c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 12H3V4h18v10z" />
            </svg>
            <span class="side-menu__label">Dashboard</span>
         </a>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li class="slide">
         <a class="side-menu__item" href="https://dashboard.traderssupportfunds.com" target="_blank">
            <i class="	fa fa-bar-chart fa-lg mr-1"></i>
            <span class="side-menu__label">MT4</span>
         </a>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      {if 1==2}
      <li class="slide">
         <a class="side-menu__item" data-toggle="slide" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="20" class="side-menu__icon">
               <path d="M0 0h24v24H0V0z" fill="none" />
               <path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3" />
               <path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z" />
            </svg>
            <span class="side-menu__label">Mail</span><i class="angle fa fa-angle-right"></i>
         </a>
         <ul class="slide-menu">
            <!--<li><a href="user/mail/compose" class="slide-item">Mail-Compose</a></li>-->
            <li><a href="user/mail/inbox" class="slide-item">Mail-Inbox</a></li>
            <!-- <li><a href="user/mail/sent" class="slide-item">View-Mail</a></li> -->
         </ul>
      </li>
      {endif}
      <li class="slide">
         <a class="side-menu__item" href="{site_support_url}/login" target="_blank">
            <i class="fa fa-comments-o fa-lg mr-1"></i>
            <span class="side-menu__label">Tickets</span>
         </a>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li class="slide">
         <a class="side-menu__item" href="user/plans">
            <i class="fa fa-arrows fa-lg mr-1"></i>
            <span class="side-menu__label">Plans</span>
         </a>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li class="slide">
         <a class="side-menu__item" href="user/invoice">
            <i class="fa fa-files-o fa-lg mr-1"></i>
            <span class="side-menu__label">Invoice</span>
         </a>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li class="slide">
         <a class="side-menu__item" href="user/profile">
            <i class="fa fa-user fa-lg mr-1"></i>
            <span class="side-menu__label">Profile</span>
         </a>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      {if $allow_withdrawal=="1"} <li class="slide">
         <a class="side-menu__item" href="user/withdraw">
            <i class="fa fa-minus-circle fa-lg mr-1"></i>
            <span class="side-menu__label">Withdraw Funds</span>
         </a>
      </li>{endif}
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li class="slide">
         <a class="side-menu__item" data-toggle="slide" href="#">
            <i class="fa fa-bank fa-lg mr-1"></i>
            <span class="side-menu__label">Finance</span><i class="angle fa fa-angle-right"></i>
         </a>
         <ul class="slide-menu">
            <li><a href="user/withdraw/history" class="slide-item">Withdrawal History</a></li>
            <li><a href="user/deposit/history" class="slide-item">Deposit History</a></li>
         </ul>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li class="slide">
         <a class="side-menu__item" href="user/login">
            <i class="fa fa-unlock fa-lg mr-1"></i>
            <span class="side-menu__label">Login History</span>
         </a>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li class="slide">
         <a class="side-menu__item" href="user/referral">
            <i class="fa fa-user-plus fa-lg mr-1"></i>
            <span class="side-menu__label">Referral History</span>
         </a>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li class="slide">
         <a class="side-menu__item" href="user/tools/symbols">
            <i class="fa fa-dollar fa-lg mr-1"></i>
            <span class="side-menu__label">Symbols</span>
         </a>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li class="slide">
         <a class="side-menu__item" data-toggle="slide" href="#">
            <i class="fa fa-diamond fa-lg mr-1"></i>
            <span class="side-menu__label">Tools</span><i class="angle fa fa-angle-right"></i>
         </a>
         <ul class="slide-menu">
            <li><a href="user/tools/timezone" class="slide-item">TimeZone Converter</a></li>
            <li><a href="user/tools/calendar" class="slide-item">Economic Calendar</a></li>
            <li><a href="user/tools/heat" class="slide-item">Heat Map</a></li>
            <li><a href="user/tools/correlation" class="slide-item">Correlation</a></li>
            <li><a href="user/tools/pip" class="slide-item">Pip Calculator</a></li>
            <li><a href="user/tools/profit" class="slide-item">Profit Calculator</a></li>
            <li><a href="user/tools/margin" class="slide-item">Margin Calculator</a></li>
            <li><a href="user/tools/downloads" class="slide-item">Downloads</a></li>
         </ul>
      </li>
      <li>
         <hr class="w-75 my-0" />
      </li>
      <li class="slide">
         <a class="side-menu__item logout" href="user/logout">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="20" class="side-menu__icon">
               <path d="M0 0h24v24H0V0z" fill="none" />
               <path d="M9.1 5L5 9.1v5.8L9.1 19h5.8l4.1-4.1V9.1L14.9 5H9.1zM12 17c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm1-3h-2V7h2v7z" opacity=".3" />
               <path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z" />
               <circle cx="12" cy="16" r="1" />
               <path d="M11 7h2v7h-2z" />
            </svg>
            <span class="side-menu__label">Logout</span>
         </a>
      </li>
   </ul>
</aside>
<!--/APP-SIDEBAR-->