@extends('layouts.app')

@section('content')
<div class="bg-gray-200 h-[63rem] g-sidenav-show">
    <aside class="h-full mt-5 border-0 sidenav navbar navbar-vertical navbar-expand-xs border-radius-xl fixed-start bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header ">
        <i class="top-0 p-3 text-white cursor-pointer fas fa-times opacity-5 position-absolute end-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="m-0 navbar-brand" href="#" target="_blank">
         
          <span class="text-white ms-1 font-weight-bold">Admin Panel</span>
        </a>
      </div>
      <hr class="mt-0 mb-2 horizontal light">
      <div class="w-auto collapse navbar-collapse " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="text-white nav-link active bg-gradient-dark" href="#">
              <div class="text-center text-white me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link " href="#">
              <div class="text-center text-white me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Auditor List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link " href="#">
              <div class="text-center text-white me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">receipt_long</i>
              </div>
              <span class="nav-link-text ms-1">Contractor List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link " href="#">
              <div class="text-center text-white me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">view_in_ar</i>
              </div>
              <span class="nav-link-text ms-1">Reporting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link " href="#">
              <div class="text-center text-white me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
              </div>
              <span class="nav-link-text ms-1"> Assignment</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link " href="#">
              <div class="text-center text-white me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>
              <span class="nav-link-text ms-1">Time</span>
            </a>
          </li>
          <li class="mt-3 nav-item">
            <h6 class="text-xs text-white ps-4 ms-2 text-uppercase font-weight-bolder opacity-8">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link " href="#">
              <div class="text-center text-white me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link " href="#">
              <div class="text-center text-white me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
              </div>
              <span class="nav-link-text ms-1">Sign In</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link " href="#">
              <div class="text-center text-white me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment</i>
              </div>
              <span class="nav-link-text ms-1">Sign Up</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="bottom-0 sidenav-footer position-absolute w-100 ">
       
      </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
     
      <nav class="px-0 mx-4 shadow-none navbar navbar-main navbar-expand-lg border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="px-3 py-1 container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="px-0 pt-1 pb-0 mb-0 bg-transparent breadcrumb me-sm-6 me-5">
              <li class="text-sm breadcrumb-item"><a class="opacity-5 text-dark" href="#">Pages</a></li>
              <li class="text-sm breadcrumb-item text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="mb-0 font-weight-bolder">Dashboard</h6>
          </nav>
          <div class="mt-2 collapse navbar-collapse mt-sm-0 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="#" class="px-0 nav-link text-body font-weight-bold">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none"></span>
                </a>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="#" class="p-0 nav-link text-body" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="px-3 nav-item d-flex align-items-center">
                <a href="#" class="p-0 nav-link text-body">
                  <i class="cursor-pointer fa fa-cog fixed-plugin-button-nav"></i>
                </a>
              </li>
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="#" class="p-0 nav-link text-body" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="cursor-pointer fa fa-bell"></i>
                </a>
                <ul class="px-2 py-3 dropdown-menu dropdown-menu-end me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="#">
                      <div class="py-1 d-flex">
                        <div class="my-auto">
                          <img src="images/team-1.jpg" class="avatar avatar-sm me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-1 text-sm font-weight-normal">
                            <span class="font-weight-bold">New message</span> from abc
                          </h6>
                          <p class="mb-0 text-xs text-secondary">
                            <i class="fa fa-clock me-1"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="#">
                      <div class="py-1 d-flex">
                        <div class="my-auto">
                          <img src="images/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-1 text-sm font-weight-normal">
                            <span class="font-weight-bold">New album</span> by xyz
                          </h6>
                          <p class="mb-0 text-xs text-secondary">
                            <i class="fa fa-clock me-1"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="#">
                      <div class="py-1 d-flex">
                        <div class="my-auto avatar avatar-sm bg-gradient-secondary me-3">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-1 text-sm font-weight-normal">
                            Payment successfully completed
                          </h6>
                          <p class="mb-0 text-xs text-secondary">
                            <i class="fa fa-clock me-1"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     
      <div class="py-4 container-fluid">
        <div class="row">
          <div class="mb-4 col-xl-3 col-sm-6 mb-xl-0">
            <div class="card">
              <div class="p-3 pt-2 card-header">
                <div class="text-center icon icon-lg icon-shape bg-gradient-dark shadow-dark border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="pt-1 text-end">
                  <p class="mb-0 text-sm text-capitalize">Today's Earning</p>
                  <h4 class="mb-0">10000/rs</h4>
                </div>
              </div>
              <hr class="my-0 dark horizontal">
              <div class="p-3 card-footer">
                <p class="mb-0"><span class="text-sm text-success font-weight-bolder">+55% </span>than lask week</p>
              </div>
            </div>
          </div>
          <div class="mb-4 col-xl-3 col-sm-6 mb-xl-0">
            <div class="card">
              <div class="p-3 pt-2 card-header">
                <div class="text-center icon icon-lg icon-shape bg-gradient-primary shadow-primary border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="pt-1 text-end">
                  <p class="mb-0 text-sm text-capitalize">New Users</p>
                  <h4 class="mb-0">2,300</h4>
                </div>
              </div>
              <hr class="my-0 dark horizontal">
              <div class="p-3 card-footer">
                <p class="mb-0"><span class="text-sm text-success font-weight-bolder">+3% </span>than lask month</p>
              </div>
            </div>
          </div>
          <div class="mb-4 col-xl-3 col-sm-6 mb-xl-0">
            <div class="card">
              <div class="p-3 pt-2 card-header">
                <div class="text-center icon icon-lg icon-shape bg-gradient-success shadow-success border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="pt-1 text-end">
                  <p class="mb-0 text-sm text-capitalize">New Clients</p>
                  <h4 class="mb-0">3,462</h4>
                </div>
              </div>
              <hr class="my-0 dark horizontal">
              <div class="p-3 card-footer">
                <p class="mb-0"><span class="text-sm text-danger font-weight-bolder">-2%</span> than yesterday</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="p-3 pt-2 card-header">
                <div class="text-center icon icon-lg icon-shape bg-gradient-secondary shadow-secondary border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="pt-1 text-end">
                  <p class="mb-0 text-sm text-capitalize">Sales</p>
                  <h4 class="mb-0">10,343/Units</h4>
                </div>
              </div>
              <hr class="my-0 dark horizontal">
              <div class="p-3 card-footer">
                <p class="mb-0"><span class="text-sm text-success font-weight-bolder">+5% </span>than yesterday</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4 row">
          <div class="mt-4 mb-4 col-lg-4 col-md-6">
            <div class="card z-index-2 ">
              <div class="p-0 mx-3 bg-transparent card-header position-relative mt-n4 z-index-2">
                <div class="py-3 bg-gradient-dark shadow-dark border-radius-lg pe-1">
                  <div class="chart">
                    <p id="" class="chart-canvas h-[10rem] text-center py-5 text-white font-bold text-xl ">Total number of persons Visited </p>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0 ">Website Views</h6>
                <p class="text-sm ">Last Campaign Performance</p>
                <hr class="dark horizontal">
                <div class="d-flex ">
                  <i class="my-auto text-sm material-icons me-1">schedule</i>
                  <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-4 mb-4 col-lg-4 col-md-6">
            <div class="card z-index-2 ">
              <div class="p-0 mx-3 bg-transparent card-header position-relative mt-n4 z-index-2">
                <div class="py-3 bg-gradient-dark shadow-dark border-radius-lg pe-1">
                  <div class="chart">
                    <p id="chart-line" class="chart-canvas h-[10rem] text-center py-5 text-white font-bold text-xl ">Total number of Products saled</p>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0 "> Daily Earnings </h6>
                <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
                <hr class="dark horizontal">
                <div class="d-flex ">
                  <i class="my-auto text-sm material-icons me-1">schedule</i>
                  <p class="mb-0 text-sm"> updated 4 min ago </p>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-4 mb-3 col-lg-4">
            <div class="card z-index-2 ">
              <div class="p-0 mx-3 bg-transparent card-header position-relative mt-n4 z-index-2">
                <div class="py-3 bg-gradient-dark shadow-dark border-radius-lg pe-1">
                  <div class="chart">
                    <p id="chart-line-tasks" class="chart-canvas h-[10rem] text-center py-5 text-white font-bold text-xl ">Completed Task</p>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0 ">Completed Tasks</h6>
                <p class="text-sm ">Last Campaign Performance</p>
                <hr class="dark horizontal">
                <div class="d-flex ">
                  <i class="my-auto text-sm material-icons me-1">schedule</i>
                  <p class="mb-0 text-sm">just updated</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-4 row">
          <div class="mb-4 col-lg-8 col-md-6 mb-md-0">
            <div class="card">
              <div class="pb-0 card-header">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6>Projects</h6>
                    <p class="mb-0 text-sm">
                      <i class="fa fa-check text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">10 done</span> this month
                    </p>
                  </div>
                  <div class="my-auto col-lg-6 col-5 text-end">
                    <div class="dropdown float-lg-end pe-4">
                      <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-secondary"></i>
                      </a>
                      <ul class="px-2 py-3 dropdown-menu ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                        <li><a class="dropdown-item border-radius-md" href="#">Action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="#">Another action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-0 pb-2 card-body">
                <div class="table-responsive">
                  <table class="table mb-0 align-items-center">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Companies</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Budget</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="px-2 py-1 d-flex">
                            <div>
                              <img src="images/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Adobe XD</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="mt-2 avatar-group">
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="A">
                              <img src="images/team-1.jpg" alt="team1">
                            </a>
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="B">
                              <img src="images/team-2.jpg" alt="team2">
                            </a>
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="C">
                              <img src="images/team-3.jpg" alt="team3">
                            </a>
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="D">
                              <img src="images/team-4.jpg" alt="team4">
                            </a>
                          </div>
                        </td>
                        <td class="text-sm text-center align-middle">
                          <span class="text-xs font-weight-bold"> 14,000/rs </span>
                        </td>
                        <td class="align-middle">
                          <div class="mx-auto progress-wrapper w-75">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="px-2 py-1 d-flex">
                            <div>
                              <img src="images/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Atlassian</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="mt-2 avatar-group">
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="A">
                              <img src="images/team-2.jpg" alt="team5">
                            </a>
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="D">
                              <img src="images/team-4.jpg" alt="team6">
                            </a>
                          </div>
                        </td>
                        <td class="text-sm text-center align-middle">
                          <span class="text-xs font-weight-bold"> 3,000/rs </span>
                        </td>
                        <td class="align-middle">
                          <div class="mx-auto progress-wrapper w-75">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">10%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="w-10 progress-bar bg-gradient-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="px-2 py-1 d-flex">
                            <div>
                              <img src="images/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Slack</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="mt-2 avatar-group">
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="B">
                              <img src="images/team-3.jpg" alt="team8">
                            </a>
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="D">
                              <img src="images/team-1.jpg" alt="team9">
                            </a>
                          </div>
                        </td>
                        <td class="text-sm text-center align-middle">
                          <span class="text-xs font-weight-bold"> Not set </span>
                        </td>
                        <td class="align-middle">
                          <div class="mx-auto progress-wrapper w-75">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="px-2 py-1 d-flex">
                            <div>
                              <img src="images/small-logos/logo-spotify.svg" class="avatar avatar-sm me-3" alt="spotify">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Spotify</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="mt-2 avatar-group">
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="D">
                              <img src="images/team-4.jpg" alt="user1">
                            </a>
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="C">
                              <img src="images/team-3.jpg" alt="user2">
                            </a>
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="V">
                              <img src="images/team-4.jpg" alt="user3">
                            </a>
                            <a href="#" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="S">
                              <img src="images/team-1.jpg" alt="user4">
                            </a>
                          </div>
                        </td>
                        <td class="text-sm text-center align-middle">
                          <span class="text-xs font-weight-bold"> 20,500/rs </span>
                        </td>
                        <td class="align-middle">
                          <div class="mx-auto progress-wrapper w-75">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
              
                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4 col-lg-4 col-md-6 mb-md-0">
            <div class="card">
              <div class="pb-0  card-header">
                <div class="row">
                  <div class="col-lg-6 pb-2 pt-2 col-7">
                    <h6>Orders</h6>
                    <p class="mb-0 text-sm pt-2 ">
                      <span class="font-weight-bold ms-1">100 orders</span> today
                    </p>
                  </div>
                  <div class="my-auto col-lg-6 col-5 text-end">
                    <div class="dropdown float-lg-end pe-4">
                      <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-secondary"></i>
                      </a>
                      <ul class="px-2 py-3 dropdown-menu ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                        <li><a class="dropdown-item border-radius-md" href="#">Action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="#">Another action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="#">A more action</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-0 pb-2 card-body">
                <div class="px-0 pb-2 card-body">
                  <div class="table-responsive">
                    <table class="table mb-0 align-items-center">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Items</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total orders This Month</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Cost</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="px-2 py-1 d-flex">
                              <div>
                                <img src="images/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Adobe XD</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="mt-2 avatar-group">
                              <a href="#" class="text-center" data-bs-toggle="tooltip" data-bs-placement="bottom" >
                                <span class="text-xs font-weight-bold "> 7500/Units </span>

                              </a>
                            
                            </div>
                          </td>
                          <td class="text-sm text-center align-middle">
                            <span class="text-xs font-weight-bold"> 14,000/rs </span>
                          </td>
                        
                        </tr>
                        <tr>
                          <td>
                            <div class="px-2 py-1 d-flex">
                              <div>
                                <img src="images/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Atlassian</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="mt-2 avatar-group">
                              <a href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" >
                                <span class="text-xs font-weight-bold"> 2000/Units </span>

                              </a>
              
                            </div>
                          </td>
                          <td class="text-sm text-center align-middle">
                            <span class="text-xs font-weight-bold"> 3,000/rs </span>
                          </td>
                         
                        </tr>
                        <tr>
                          <td>
                            <div class="px-2 py-1 d-flex">
                              <div>
                                <img src="images/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Slack</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="mt-2 avatar-group">
                              <a href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" >
                                <span class="text-xs font-weight-bold"> 2,500/Units </span>

                              </a>
                            </div>
                          </td>
                          <td class="text-sm text-center align-middle">
                            <span class="text-xs font-weight-bold">23,000/rs</span>
                          </td>
                         
                        </tr>
                        
                
                     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
       
      </div>
    </main>
   
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/plugins/perfect-scrollbar.min.js"></script>
    <script src="js/plugins/smooth-scrollbar.min.js"></script>
    <script src="js/plugins/chartjs.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="js/material-dashboard.min.js?v=3.0.2"></script>
</div>
@endsection

