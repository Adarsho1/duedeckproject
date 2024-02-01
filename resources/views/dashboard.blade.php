<!DOCTYPE html>
<html lang="en" style="height: auto;">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Dashboard</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script defer="" referrerpolicy="origin"
        src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwRGFzaGJvYXJkJTIyJTJDJTIyeCUyMiUzQTAuNTc3NTU0NTM5MzcwNDc0NiUyQyUyMnclMjIlM0ExMzY2JTJDJTIyaCUyMiUzQTc2OCUyQyUyMmolMjIlM0E2NDElMkMlMjJlJTIyJTNBMTM2NiUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmFkbWlubHRlLmlvJTJGdGhlbWVzJTJGdjMlMkYlMjIlMkMlMjJyJTIyJTNBJTIyJTIyJTJDJTIyayUyMiUzQTI0JTJDJTIybiUyMiUzQSUyMlVURi04JTIyJTJDJTIybyUyMiUzQS0zMzAlMkMlMjJxJTIyJTNBJTVCJTVEJTdE">
    </script>
    <script nonce="26e40dff-bb20-4014-8c94-67a9fec8afd8">
        (function(w, d) {
            ! function(dp, dq, dr, ds) {
                dp[dr] = dp[dr] || {};
                dp[dr].executed = [];
                dp.zaraz = {
                    deferred: [],
                    listeners: []
                };
                dp.zaraz.q = [];
                dp.zaraz._f = function(dt) {
                    return async function() {
                        var du = Array.prototype.slice.call(arguments);
                        dp.zaraz.q.push({
                            m: dt,
                            a: du
                        })
                    }
                };
                for (const dv of ["track", "set", "debug"]) dp.zaraz[dv] = dp.zaraz._f(dv);
                dp.zaraz.init = () => {
                    var dw = dq.getElementsByTagName(ds)[0],
                        dx = dq.createElement(ds),
                        dy = dq.getElementsByTagName("title")[0];
                    dy && (dp[dr].t = dq.getElementsByTagName("title")[0].text);
                    dp[dr].x = Math.random();
                    dp[dr].w = dp.screen.width;
                    dp[dr].h = dp.screen.height;
                    dp[dr].j = dp.innerHeight;
                    dp[dr].e = dp.innerWidth;
                    dp[dr].l = dp.location.href;
                    dp[dr].r = dq.referrer;
                    dp[dr].k = dp.screen.colorDepth;
                    dp[dr].n = dq.characterSet;
                    dp[dr].o = (new Date).getTimezoneOffset();
                    if (dp.dataLayer)
                        for (const dC of Object.entries(Object.entries(dataLayer).reduce(((dD, dE) => ({
                                ...dD[1],
                                ...dE[1]
                            })), {}))) zaraz.set(dC[0], dC[1], {
                            scope: "page"
                        });
                    dp[dr].q = [];
                    for (; dp.zaraz.q.length;) {
                        const dF = dp.zaraz.q.shift();
                        dp[dr].q.push(dF)
                    }
                    dx.defer = !0;
                    for (const dG of [localStorage, sessionStorage]) Object.keys(dG || {}).filter((dI => dI
                        .startsWith("_zaraz_"))).forEach((dH => {
                        try {
                            dp[dr]["z_" + dH.slice(7)] = JSON.parse(dG.getItem(dH))
                        } catch {
                            dp[dr]["z_" + dH.slice(7)] = dG.getItem(dH)
                        }
                    }));
                    dx.referrerPolicy = "origin";
                    dx.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(dp[dr])));
                    dw.parentNode.insertBefore(dx, dw)
                };
                ["complete", "interactive"].includes(dq.readyState) ? zaraz.init() : dp.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>

<body class="sidebar-mini layout-fixed sidebar-open" style="height: auto;">
    <div class="wrapper">
     
        <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60" style="display: none;">
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                        style="border: 1px solid #161616; border-radius: 10px; box-shadow: 0 0 10px rgba(158, 9, 9, 0.1); background-color: #faf7f7; padding: 10px;">
                        <span class="dropdown-item"><i class="fas fa-user"></i>&nbsp;
                            {{ session('name') ?? '' }}</span>
                        <a class="dropdown-item" href="/logout" class="btn btn-primary-secondary"
                            style="display: block; padding: 5px 10px; border: 1px solid #141414; border-radius: 5px;">
                                                   
                          <i class="fas fa-sign-out-alt"></i>Logout</a>

                    </div>
                </li>
            </ul>


        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>

            <div
                class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 583px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">

                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image">

                                </div>
                                <div class="info">
                                    <a href="#" class="d-block"></a>
                                </div>
                            </div>

                            <div class="form-inline">
                                <div class="input-group" data-widget="sidebar-search">
                                    <input class="form-control form-control-sidebar" type="search"
                                        placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="sidebar-search-results">
                                    <div class="list-group"><a href="#" class="list-group-item">
                                            <div class="search-title"><strong class="text-light"></strong>N<strong
                                                    class="text-light"></strong>o<strong class="text-light"></strong>
                                                <strong class="text-light"></strong>e<strong
                                                    class="text-light"></strong>l<strong
                                                    class="text-light"></strong>e<strong
                                                    class="text-light"></strong>m<strong
                                                    class="text-light"></strong>e<strong
                                                    class="text-light"></strong>n<strong
                                                    class="text-light"></strong>t<strong class="text-light"></strong>
                                                <strong class="text-light"></strong>f<strong
                                                    class="text-light"></strong>o<strong
                                                    class="text-light"></strong>u<strong
                                                    class="text-light"></strong>n<strong
                                                    class="text-light"></strong>d<strong
                                                    class="text-light"></strong>!<strong class="text-light"></strong>
                                            </div>
                                            <div class="search-path"></div>
                                        </a></div>
                                </div>
                            </div>

                            <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                                    role="menu" data-accordion="false">

                                    <li class="nav-item menu-open">
                                        <a href="#" class="nav-link active">
                                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                            <p>
                                                Dashboard
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>


                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="height: 42.9728%; transform: translate(0px, 0px);">
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>

        </aside>

        <div class="content-wrapper" style="min-height: 527px;">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard </li>
                            </ol>
                        </div>
                    </div>
                    @if (isset($user))
                        <h1>Welcome, {{ $user->name }}!</h1>
                    @endif
                </div>
            </div>


            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3></h3>
                                    <label for="employeeCount">Total Employee Count:</label>
                                    {{ \App\Models\Emp::count() }}
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class></i>
                                </div>
                                <a href="#" class="small-box-footer"><i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><sup style="font-size: 20px"></sup></h3>
                                    <label for="clientCount">Total Client Count:</label>
                                    {{ \App\Models\Client::count() }}
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer"><i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3></h3>
                                    <label for="departmentcount">Total Department Count:</label>
                                    {{ \App\Models\Departments::count() }}
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer"> <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3></h3>
                                    <label for="industryCount">Total Department Count:</label>
                                    {{ \App\Models\Industries::count() }}
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer"><i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>





                        <aside class="control-sidebar control-sidebar-dark"
                            style="display: none; top: 57px; height: 584px;">

                            <div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"
                                style="height: 584px;">
                                <div class="os-resize-observer-host observed">
                                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                                </div>
                                <div class="os-size-auto-observer observed"
                                    style="height: calc(100% + 1px); float: left;">
                                    <div class="os-resize-observer"></div>
                                </div>
                                <div class="os-content-glue" style="margin: -16px; width: 0px; height: 0px;"></div>
                                <div class="os-padding">
                                    <div class="os-viewport os-viewport-native-scrollbars-invisible">
                                        <div class="os-content" style="padding: 16px; height: 100%; width: 100%;">
                                            <h5>Customize AdminLTE</h5>
                                            <hr class="mb-2">
                                            <div class="mb-4"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Dark Mode</span></div>
                                            <h6>Header Options</h6>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Fixed</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Dropdown Legacy Offset</span></div>
                                            <div class="mb-4"><input type="checkbox" value="1"
                                                    class="mr-1"><span>No border</span></div>
                                            <h6>Sidebar Options</h6>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Collapsed</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    checked="checked" class="mr-1"><span>Fixed</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    checked="checked" class="mr-1"><span>Sidebar Mini</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Sidebar Mini MD</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Sidebar Mini XS</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Nav Flat Style</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Nav Legacy Style</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Nav Compact</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Nav Child Indent</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Nav Child Hide on Collapse</span></div>
                                            <div class="mb-4"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div>
                                            <h6>Footer Options</h6>
                                            <div class="mb-4"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Fixed</span></div>
                                            <h6>Small Text Options</h6>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Body</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Navbar</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Brand</span></div>
                                            <div class="mb-1"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Sidebar Nav</span></div>
                                            <div class="mb-4"><input type="checkbox" value="1"
                                                    class="mr-1"><span>Footer</span></div>
                                            <h6>Navbar Variants</h6>
                                            <div class="d-flex"><select
                                                    class="custom-select mb-3 text-light border-0 bg-white">
                                                    <option class="bg-primary">Primary</option>
                                                    <option class="bg-secondary">Secondary</option>
                                                    <option class="bg-info">Info</option>
                                                    <option class="bg-success">Success</option>
                                                    <option class="bg-danger">Danger</option>
                                                    <option class="bg-indigo">Indigo</option>
                                                    <option class="bg-purple">Purple</option>
                                                    <option class="bg-pink">Pink</option>
                                                    <option class="bg-navy">Navy</option>
                                                    <option class="bg-lightblue">Lightblue</option>
                                                    <option class="bg-teal">Teal</option>
                                                    <option class="bg-cyan">Cyan</option>
                                                    <option class="bg-dark">Dark</option>
                                                    <option class="bg-gray-dark">Gray dark</option>
                                                    <option class="bg-gray">Gray</option>
                                                    <option class="bg-light">Light</option>
                                                    <option class="bg-warning">Warning</option>
                                                    <option class="bg-white">White</option>
                                                    <option class="bg-orange">Orange</option>
                                                </select></div>
                                            <h6>Accent Color Variants</h6>
                                            <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                                                <option>None Selected</option>
                                                <option class="bg-primary">Primary</option>
                                                <option class="bg-warning">Warning</option>
                                                <option class="bg-info">Info</option>
                                                <option class="bg-danger">Danger</option>
                                                <option class="bg-success">Success</option>
                                                <option class="bg-indigo">Indigo</option>
                                                <option class="bg-lightblue">Lightblue</option>
                                                <option class="bg-navy">Navy</option>
                                                <option class="bg-purple">Purple</option>
                                                <option class="bg-fuchsia">Fuchsia</option>
                                                <option class="bg-pink">Pink</option>
                                                <option class="bg-maroon">Maroon</option>
                                                <option class="bg-orange">Orange</option>
                                                <option class="bg-lime">Lime</option>
                                                <option class="bg-teal">Teal</option>
                                                <option class="bg-olive">Olive</option>
                                            </select>
                                            <h6>Dark Sidebar Variants</h6>
                                            <div class="d-flex"></div><select
                                                class="custom-select mb-3 text-light border-0 bg-primary">
                                                <option>None Selected</option>
                                                <option class="bg-primary">Primary</option>
                                                <option class="bg-warning">Warning</option>
                                                <option class="bg-info">Info</option>
                                                <option class="bg-danger">Danger</option>
                                                <option class="bg-success">Success</option>
                                                <option class="bg-indigo">Indigo</option>
                                                <option class="bg-lightblue">Lightblue</option>
                                                <option class="bg-navy">Navy</option>
                                                <option class="bg-purple">Purple</option>
                                                <option class="bg-fuchsia">Fuchsia</option>
                                                <option class="bg-pink">Pink</option>
                                                <option class="bg-maroon">Maroon</option>
                                                <option class="bg-orange">Orange</option>
                                                <option class="bg-lime">Lime</option>
                                                <option class="bg-teal">Teal</option>
                                                <option class="bg-olive">Olive</option>
                                            </select>
                                            <h6>Light Sidebar Variants</h6>
                                            <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                                                <option>None Selected</option>
                                                <option class="bg-primary">Primary</option>
                                                <option class="bg-warning">Warning</option>
                                                <option class="bg-info">Info</option>
                                                <option class="bg-danger">Danger</option>
                                                <option class="bg-success">Success</option>
                                                <option class="bg-indigo">Indigo</option>
                                                <option class="bg-lightblue">Lightblue</option>
                                                <option class="bg-navy">Navy</option>
                                                <option class="bg-purple">Purple</option>
                                                <option class="bg-fuchsia">Fuchsia</option>
                                                <option class="bg-pink">Pink</option>
                                                <option class="bg-maroon">Maroon</option>
                                                <option class="bg-orange">Orange</option>
                                                <option class="bg-lime">Lime</option>
                                                <option class="bg-teal">Teal</option>
                                                <option class="bg-olive">Olive</option>
                                            </select>
                                            <h6>Brand Logo Variants</h6>
                                            <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                                                <option>None Selected</option>
                                                <option class="bg-primary">Primary</option>
                                                <option class="bg-secondary">Secondary</option>
                                                <option class="bg-info">Info</option>
                                                <option class="bg-success">Success</option>
                                                <option class="bg-danger">Danger</option>
                                                <option class="bg-indigo">Indigo</option>
                                                <option class="bg-purple">Purple</option>
                                                <option class="bg-pink">Pink</option>
                                                <option class="bg-navy">Navy</option>
                                                <option class="bg-lightblue">Lightblue</option>
                                                <option class="bg-teal">Teal</option>
                                                <option class="bg-cyan">Cyan</option>
                                                <option class="bg-dark">Dark</option>
                                                <option class="bg-gray-dark">Gray dark</option>
                                                <option class="bg-gray">Gray</option>
                                                <option class="bg-light">Light</option>
                                                <option class="bg-warning">Warning</option>
                                                <option class="bg-white">White</option>
                                                <option class="bg-orange">Orange</option><a href="#">clear</a>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                                    <div class="os-scrollbar-track">
                                        <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                                    <div class="os-scrollbar-track">
                                        <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);">
                                        </div>
                                    </div>
                                </div>
                                <div class="os-scrollbar-corner"></div>
                            </div>
                        </aside>

                        <div id="sidebar-overlay"></div>
                    </div>


                    <script src="plugins/jquery/jquery.min.js"></script>

                    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

                    <script>
                        $.widget.bridge('uibutton', $.ui.button)
                    </script>

                    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <script src="plugins/chart.js/Chart.min.js"></script>

                    <script src="plugins/sparklines/sparkline.js"></script>

                    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
                    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

                    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>

                    <script src="plugins/moment/moment.min.js"></script>
                    <script src="plugins/daterangepicker/daterangepicker.js"></script>

                    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

                    <script src="plugins/summernote/summernote-bs4.min.js"></script>

                    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

                    <script src="dist/js/adminlte.js?v=3.2.0"></script>

                    <script src="dist/js/demo.js"></script>

                    <script src="dist/js/pages/dashboard.js"></script>


                    <div class="daterangepicker ltr show-ranges opensright">
                        <div class="ranges">
                            <ul>
                                <li data-range-key="Today">Today</li>
                                <li data-range-key="Yesterday">Yesterday</li>
                                <li data-range-key="Last 7 Days">Last 7 Days</li>
                                <li data-range-key="Last 30 Days">Last 30 Days</li>
                                <li data-range-key="This Month">This Month</li>
                                <li data-range-key="Last Month">Last Month</li>
                                <li data-range-key="Custom Range">Custom Range</li>
                            </ul>
                        </div>
                        <div class="drp-calendar left">
                            <div class="calendar-table"></div>
                            <div class="calendar-time" style="display: none;"></div>
                        </div>
                        <div class="drp-calendar right">
                            <div class="calendar-table"></div>
                            <div class="calendar-time" style="display: none;"></div>
                        </div>
                        <div class="drp-buttons"><span class="drp-selected"></span><button
                                class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button
                                class="applyBtn btn btn-sm btn-primary" disabled="disabled"
                                type="button">Apply</button> </div>
                    </div>
                    <div class="jqvmap-label" style="display: none;"></div>


</body>

</html>
