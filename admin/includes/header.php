<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Admin Dashboard </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="./assets/images/favicon.ico">
  <!-- Theme Config Js -->
  <script src="./assets/js/config.js"></script>
  <!-- Vendor css -->
  <link href="./assets/css/vendor.min.css" rel="stylesheet" type="text/css" />
  <!-- App css -->
  <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
  <!-- Icons css -->
  <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <!-- Begin page -->
  <div class="wrapper">
    <!-- Sidenav Menu Start -->
    <div class="sidenav-menu">
      <!-- Brand Logo -->
      <a href="index.html" class="logo">
        <span class="logo-light">
          <span class="logo-lg"><img src="./assets/images/logo.png" alt="logo"></span>
          <span class="logo-sm text-center"><img src="./assets/images/logo-sm.png" alt="small logo"></span>
        </span>
        <span class="logo-dark">
          <span class="logo-lg"><img src="./assets/images/logo-dark.png" alt="dark logo"></span>
          <span class="logo-sm text-center"><img src="./assets/images/logo-sm.png" alt="small logo"></span>
        </span>
      </a>
      <!-- Sidebar Hover Menu Toggle Button -->
      <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
      </button>
      <!-- Full Sidebar Menu Close Button -->
      <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
      </button>
      <!-- resources/views/layouts/sidebar.blade.php (or include in main layout) -->

      <div data-simplebar class="h-100">
        <ul class="side-nav">

          <!-- Dashboard -->
          <li class="side-nav-item">
            <a href="{{ route('dashboard') }}" class="side-nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
              <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
              <span class="menu-text">Dashboard Overview</span>
            </a>
          </li>

          <!-- Admin Management -->
          <!-- <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#adminCollapse" aria-expanded="false" class="side-nav-link">
              <span class="menu-icon"><i class="ti ti-users"></i></span>
              <span class="menu-text">Admin Management</span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="adminCollapse">
              <ul class="sub-menu">
                <li class="side-nav-item">
                  <a href="{{ route('admins.create') }}" class="side-nav-link">Add Admin</a>
                </li>
                <li class="side-nav-item">
                  <a href="{{ route('admins.index') }}" class="side-nav-link">Manage Admins</a>
                </li>
                <li class="side-nav-item">
                  <a href="{{ route('password.change') }}" class="side-nav-link">Change Password</a>
                </li>
                <li class="side-nav-item text-muted small">(Super Admin only)</li>
              </ul>
            </div>
          </li> -->

          <!-- Home Page Management -->
          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#homeCollapse" aria-expanded="false" class="side-nav-link">
              <span class="menu-icon"><i class="ti ti-home"></i></span>
              <span class="menu-text">Home Settings</span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="homeCollapse">
              <ul class="sub-menu">
                <li><a href="#" class="side-nav-link">Manage Metrics</a></li>
                <li><a href="#" class="side-nav-link">Featured Update</a></li>
                <li><a href="#" class="side-nav-link">Home Page Video</a></li>
                <li><a href="#" class="side-nav-link">CTA Buttons</a></li>
              </ul>
            </div>
          </li>

          <!-- Pages Management -->
          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#pagesCollapse" aria-expanded="false" class="side-nav-link">
              <span class="menu-icon"><i class="ti ti-file-text"></i></span>
              <span class="menu-text">Pages Management</span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="pagesCollapse">
              <ul class="sub-menu">
                <li><a href="manage_pages.php" class="side-nav-link">About Us</a></li>
                <li><a href="#" class="side-nav-link">Philosophy</a></li>
                <li><a href="#" class="side-nav-link">Governance & Responsibility</a></li>
                <li><a href="#" class="side-nav-link">Contact Page Content</a></li>
              </ul>
            </div>
          </li>

          <!-- Holdings / Portfolio -->
          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#holdingsCollapse" aria-expanded="false" class="side-nav-link">
              <span class="menu-icon"><i class="ti ti-building-bank"></i></span>
              <span class="menu-text">Holdings / Portfolio</span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="holdingsCollapse">
              <ul class="sub-menu">
                <li><a href="manage_pages.php" class="side-nav-link">Add Holding</a></li>
                <li><a href="manage_pages.php" class="side-nav-link">View / Edit Holdings</a></li>
                <li><a href="manage_pages.php" class="side-nav-link">Sectors Manager</a></li>
              </ul>
            </div>
          </li>

          <!-- News & Insights -->
          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#newsCollapse" aria-expanded="false" class="side-nav-link">
              <span class="menu-icon"><i class="ti ti-news"></i></span>
              <span class="menu-text">News & Insights</span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="newsCollapse">
              <ul class="sub-menu">
                <li><a href="manage_news.php" class="side-nav-link">Add News / Insight</a></li>
                <!-- <li><a href="#" class="side-nav-link">Featured Posts</a></li> -->
              </ul>
            </div>
          </li>

          <!-- Careers -->
          <!-- <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#careersCollapse" aria-expanded="false" class="side-nav-link">
              <span class="menu-icon"><i class="ti ti-briefcase"></i></span>
              <span class="menu-text">Careers</span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="careersCollapse">
              <ul class="sub-menu">
                <li><a href="#" class="side-nav-link">Add Job</a></li>
                <li><a href="#" class="side-nav-link">Manage Jobs</a></li>
              </ul>
            </div>
          </li> -->

          <!-- Inquiries -->
          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#inquiriesCollapse" aria-expanded="false" class="side-nav-link">
              <span class="menu-icon"><i class="ti ti-mail"></i></span>
              <span class="menu-text">Inquiries</span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="inquiriesCollapse">
              <ul class="sub-menu">
                <li><a href="manage_contacts.php" class="side-nav-link">Contact Messages</a></li>
                <li><a href="manage_subscribers.php" class="side-nav-link">Newsletter Subscribers</a></li>
              </ul>
            </div>
          </li>

          <!-- Media Library -->
          <!-- <li class="side-nav-item">
            <a href="#" class="side-nav-link">
              <span class="menu-icon"><i class="ti ti-photo"></i></span>
              <span class="menu-text">Media Library</span>
            </a>
          </li> -->

          <!-- Reports -->
          <!-- <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#reportsCollapse" aria-expanded="false" class="side-nav-link">
              <span class="menu-icon"><i class="ti ti-chart-bar"></i></span>
              <span class="menu-text">Reports</span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="reportsCollapse">
              <ul class="sub-menu">
                <li><a href="#" class="side-nav-link">Traffic Summary</a></li>
                <li><a href="#" class="side-nav-link">Content Reports</a></li>
              </ul>
            </div>
          </li> -->

          <!-- Settings -->
          <!-- <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#settingsCollapse" aria-expanded="false" class="side-nav-link">
              <span class="menu-icon"><i class="ti ti-settings"></i></span>
              <span class="menu-text">Settings</span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="settingsCollapse">
              <ul class="sub-menu">
                <li><a href="#" class="side-nav-link">Site Settings</a></li>
                <li><a href="#" class="side-nav-link">SEO Settings</a></li>
                <li><a href="#" class="side-nav-link">Security Settings</a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="side-nav-item">
            <a href="#" class="side-nav-link text-muted">
              <span class="menu-icon"><i class="ti ti-shield-lock"></i></span>
              <span class="menu-text">Roles & Permissions</span>
            </a>
          </li> -->
          <!-- Logout -->
          <li class="side-nav-item mb-5">
            <a href="{{ route('logout') }}" class="side-nav-link text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <span class="menu-icon"><i class="ti ti-logout"></i></span>
              <span class="menu-text">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>


        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- Sidenav Menu End -->
    <!-- Topbar Start -->
    <header class="app-topbar">
      <div class="page-container topbar-menu">
        <div class="d-flex align-items-center gap-2">
          <!-- Brand Logo -->
          <a href="index.html" class="logo">
            <span class="logo-light">
              <span class="logo-lg"><img src="./assets/images/logo.png" alt="logo"></span>
              <span class="logo-sm"><img src="./assets/images/logo-sm.png" alt="small logo"></span>
            </span>
            <span class="logo-dark">
              <span class="logo-lg"><img src="./assets/images/logo-dark.png" alt="dark logo"></span>
              <span class="logo-sm"><img src="./assets/images/logo-sm.png" alt="small logo"></span>
            </span>
          </a>
          <!-- Sidebar Menu Toggle Button -->
          <button class="sidenav-toggle-button btn btn-secondary btn-icon">
            <i class="ti ti-menu-deep fs-24"></i>
          </button>
          <!-- Horizontal Menu Toggle Button -->
          <button class="topnav-toggle-button" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <i class="ti ti-menu-deep fs-22"></i>
          </button>
          <!-- Button Trigger Search Modal -->
          <div class="topbar-search text-muted d-none d-xl-flex gap-2 align-items-center" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
            <i class="ti ti-search fs-18"></i>
            <span class="me-2">Search something..</span>
            <button type="submit" class="ms-auto btn btn-sm btn-primary shadow-none">⌘K</span>
          </div>
        </div>
        <div class="d-flex align-items-center gap-2">
          <!-- Search for small devices -->
          <div class="topbar-item d-flex d-xl-none">
            <button class="topbar-link btn btn-outline-primary btn-icon" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
              <i class="ti ti-search fs-22"></i>
            </button>
          </div>
          <!-- Notification Dropdown -->
          <div class="topbar-item">
            <div class="dropdown">
              <button class="topbar-link btn btn-outline-primary btn-icon dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,24" type="button" data-bs-auto-close="outside" aria-haspopup="false" aria-expanded="false">
                <i class="ti ti-bell animate-ring fs-22"></i>
                <span class="noti-icon-badge"></span>
              </button>
              <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg" style="min-height: 300px;">
                <div class="p-3 border-bottom border-dashed">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                    </div>
                    <div class="col-auto">
                      <div class="dropdown">
                        <a href="#" class="dropdown-toggle drop-arrow-none link-dark" data-bs-toggle="dropdown" data-bs-offset="0,15" aria-expanded="false">
                          <i class="ti ti-settings fs-22 align-middle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">Mark as Read</a>
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">Delete All</a>
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">Do not Disturb</a>
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">Other Settings</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="position-relative z-2 rounded-0" style="max-height: 300px;" data-simplebar>
                  <!-- item-->
                  <div class="dropdown-item notification-item py-2 text-wrap active" id="notification-1">
                    <span class="d-flex align-items-center">
                      <span class="me-3 position-relative flex-shrink-0">
                        <img src="./assets/images/users/avatar-2.jpg" class="avatar-md rounded-circle" alt="" />
                        <span class="position-absolute rounded-pill bg-danger notification-badge">
                          <i class="ti ti-message-circle"></i>
                          <span class="visually-hidden">unread messages</span>
                        </span>
                      </span>
                      <span class="flex-grow-1 text-muted">
                        <span class="fw-medium text-body">Glady Haid</span> commented on <span class="fw-medium text-body">paces admin status</span>
                        <br />
                        <span class="fs-12">25m ago</span>
                      </span>
                      <span class="notification-item-close">
                        <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-1">
                          <i class="ti ti-x fs-16"></i>
                        </button>
                      </span>
                    </span>
                  </div>
                  <!-- item-->
                  <div class="dropdown-item notification-item py-2 text-wrap" id="notification-2">
                    <span class="d-flex align-items-center">
                      <span class="me-3 position-relative flex-shrink-0">
                        <img src="./assets/images/users/avatar-4.jpg" class="avatar-md rounded-circle" alt="" />
                        <span class="position-absolute rounded-pill bg-info notification-badge">
                          <i class="ti ti-currency-dollar"></i>
                          <span class="visually-hidden">unread messages</span>
                        </span>
                      </span>
                      <span class="flex-grow-1 text-muted">
                        <span class="fw-medium text-body">Tommy Berry</span> donated <span class="text-success">$100.00</span> for <span class="fw-medium text-body">Carbon removal program</span>
                        <br />
                        <span class="fs-12">58m ago</span>
                      </span>
                      <span class="notification-item-close">
                        <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-2">
                          <i class="ti ti-x fs-16"></i>
                        </button>
                      </span>
                    </span>
                  </div>
                  <!-- item-->
                  <div class="dropdown-item notification-item py-2 text-wrap" id="notification-3">
                    <span class="d-flex align-items-center">
                      <div class="avatar-md flex-shrink-0 me-3">
                        <span class="avatar-title bg-success-subtle text-success rounded-circle fs-22">
                          <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                        </span>
                      </div>
                      <span class="flex-grow-1 text-muted">
                        You withdraw a <span class="fw-medium text-body">$500</span> by <span class="fw-medium text-body">New York ATM</span>
                        <br />
                        <span class="fs-12">2h ago</span>
                      </span>
                      <span class="notification-item-close">
                        <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-3">
                          <i class="ti ti-x fs-16"></i>
                        </button>
                      </span>
                    </span>
                  </div>
                  <!-- item-->
                  <div class="dropdown-item notification-item py-2 text-wrap" id="notification-4">
                    <span class="d-flex align-items-center">
                      <span class="me-3 position-relative flex-shrink-0">
                        <img src="./assets/images/users/avatar-7.jpg" class="avatar-md rounded-circle" alt="" />
                        <span class="position-absolute rounded-pill bg-secondary notification-badge">
                          <i class="ti ti-plus"></i>
                          <span class="visually-hidden">unread messages</span>
                        </span>
                      </span>
                      <span class="flex-grow-1 text-muted">
                        <span class="fw-medium text-body">Richard Allen</span> followed you in <span class="fw-medium text-body">Facebook</span>
                        <br />
                        <span class="fs-12">3h ago</span>
                      </span>
                      <span class="notification-item-close">
                        <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-4">
                          <i class="ti ti-x fs-16"></i>
                        </button>
                      </span>
                    </span>
                  </div>
                  <!-- item-->
                  <div class="dropdown-item notification-item py-2 text-wrap" id="notification-5">
                    <span class="d-flex align-items-center">
                      <span class="me-3 position-relative flex-shrink-0">
                        <img src="./assets/images/users/avatar-10.jpg" class="avatar-md rounded-circle" alt="" />
                        <span class="position-absolute rounded-pill bg-danger notification-badge">
                          <i class="ti ti-heart-filled"></i>
                          <span class="visually-hidden">unread messages</span>
                        </span>
                      </span>
                      <span class="flex-grow-1 text-muted">
                        <span class="fw-medium text-body">Victor Collier</span> liked you recent photo in <span class="fw-medium text-body">Instagram</span>
                        <br />
                        <span class="fs-12">10h ago</span>
                      </span>
                      <span class="notification-item-close">
                        <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-5">
                          <i class="ti ti-x fs-16"></i>
                        </button>
                      </span>
                    </span>
                  </div>
                </div>
                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item notification-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2">
                  View All
                </a>
              </div>
            </div>
          </div>
          <!-- Button Trigger Customizer Offcanvas -->
          <div class="topbar-item d-none d-sm-flex">
            <button class="topbar-link btn btn-outline-primary btn-icon" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" type="button">
              <i class="ti ti-settings fs-22"></i>
            </button>
          </div>
          <!-- Light/Dark Mode Button -->
          <div class="topbar-item d-none d-sm-flex">
            <button class="topbar-link btn btn-outline-primary btn-icon" id="light-dark-mode" type="button">
              <i class="ti ti-moon fs-22"></i>
            </button>
          </div>
          <!-- User Dropdown -->
          <div class="topbar-item">
            <div class="dropdown">
              <a class="topbar-link btn btn-outline-primary dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,22" type="button" aria-haspopup="false" aria-expanded="false">
                <img src="./assets/images/users/avatar-1.jpg" width="24" class="rounded-circle me-lg-2 d-flex" alt="user-image">
                <span class="d-lg-flex flex-column gap-1 d-none">
                  Dhanoo K.
                </span>
                <i class="ti ti-chevron-down d-none d-lg-block align-middle ms-2"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome !</h6>
                </div>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                  <i class="ti ti-user-hexagon me-1 fs-17 align-middle"></i>
                  <span class="align-middle">My Account</span>
                </a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item active fw-semibold text-danger">
                  <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                  <span class="align-middle">Sign Out</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Topbar End -->
    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content bg-transparent">
          <div class="card mb-0 shadow-none">
            <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
              <i class="ti ti-search fs-22"></i>
              <input type="search" class="form-control border-0" id="search-modal-input" placeholder="Search for actions, people,">
              <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">[esc]</button>
            </div>
          </div>
        </div>
      </div>
    </div>