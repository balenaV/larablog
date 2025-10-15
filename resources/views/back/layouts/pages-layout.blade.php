<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.4.0
* @link https://tabler.io
* Copyright 2018-2025 The Tabler Authors
* Copyright 2018-2025 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('titlePage')</title>
    <script>
        /**
         * This script is used to track user interactions and page views.
         * It is only for demo purposes. Don't use it in production.
         */
        ! function(t, e) {
            var o, n, p, r;
            e.__SV || (window.posthog = e, e._i = [], e.init = function(i, s, a) {
                function g(t, e) {
                    var o = e.split(".");
                    2 == o.length && (t = t[o[0]], e = o[1]), t[e] = function() {
                        t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                    }
                }(p = t.createElement("script")).type = "text/javascript", p.crossOrigin = "anonymous", p.async = !
                    0, p.src = s.api_host.replace(".i.posthog.com", "-assets.i.posthog.com") + "/static/array.js", (
                        r = t.getElementsByTagName("script")[0]).parentNode.insertBefore(p, r);
                var u = e;
                for (void 0 !== a ? u = e[a] = [] : a = "posthog", u.people = u.people || [], u.toString = function(
                        t) {
                        var e = "posthog";
                        return "posthog" !== a && (e += "." + a), t || (e += " (stub)"), e
                    }, u.people.toString = function() {
                        return u.toString(1) + ".people (stub)"
                    }, o =
                    "init capture register register_once register_for_session unregister unregister_for_session getFeatureFlag getFeatureFlagPayload isFeatureEnabled reloadFeatureFlags updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures on onFeatureFlags onSessionId getSurveys getActiveMatchingSurveys renderSurvey canRenderSurvey getNextSurveyStep identify setPersonProperties group resetGroups setPersonPropertiesForFlags resetPersonPropertiesForFlags setGroupPropertiesForFlags resetGroupPropertiesForFlags reset get_distinct_id getGroups get_session_id get_session_replay_url alias set_config startSessionRecording stopSessionRecording sessionRecordingStarted captureException loadToolbar get_property getSessionProperty createPersonProfile opt_in_capturing opt_out_capturing has_opted_in_capturing has_opted_out_capturing clear_opt_in_out_capturing debug"
                    .split(" "), n = 0; n < o.length; n++) g(u, o[n]);
                e._i.push([i, s, a])
            }, e.__SV = 1)
        }(document, window.posthog || []);
        const currentDomain = window.location.hostname;
        if (["docs.tabler.io", "preview.tabler.io", "dev.tabler.io"].includes(currentDomain)) {
            posthog.init("phc_Ui9ZadLvY1XWtP5iiD3LWDZoXAGYsz6yNvTAvE7wSwn", {
                api_host: `/eat`,
                person_profiles: "identified_only",
                capture_pageview: true,
                capture_pageleave: true,
                loaded: function(posthog) {
                    console.log("PostHog initialized on", currentDomain);
                },
            });
        }
    </script>
    <meta name="msapplication-TileColor" content="#066fd1" />
    <meta name="theme-color" content="#066fd1" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" href="/back/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/back/favicon.ico" type="image/x-icon" />
    <meta name="description"
        content="Tabler is packed with beautifully crafted components and powerful features. Jump in and start building a stunning dashboard — all for free!" />
    <meta name="canonical" content="https://preview.tabler.io/" />
    <meta name="twitter:image:src" content="https://preview.tabler.io/static/og.png" />
    <meta name="twitter:site" content="@tabler_ui" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title"
        content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI." />
    <meta name="twitter:description"
        content="Tabler is packed with beautifully crafted components and powerful features. Jump in and start building a stunning dashboard — all for free!" />
    <meta property="og:image" content="https://preview.tabler.io/static/og.png" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:site_name" content="Tabler" />
    <meta property="og:type" content="object" />
    <meta property="og:title"
        content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI." />
    <meta property="og:url" content="https://preview.tabler.io/static/og.png" />
    <meta property="og:description"
        content="Tabler is packed with beautifully crafted components and powerful features. Jump in and start building a stunning dashboard — all for free!" />
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/back/dist/libs/jsvectormap/dist/jsvectormap.css?1759774806" rel="stylesheet" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/back/dist/css/tabler.min.css?1759774806" rel="stylesheet"
        integrity="sha384-NQprZO9sxgYFNwrR/4yMmeckxV8ebqfqUCMBLk+/jbNn6m+Nf0G5PLD5+qyFFZDA" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PLUGINS STYLES -->
    <link href="/back/dist/css/tabler-flags.min.css?1759774806" rel="stylesheet"
        integrity="sha384-hJ/8SQ1SWauMdNsuxp+N2G/2fl/KCfQalQIqwSAIhAtDg4kIfzGBzWa2DpEZ+sNN" />
    <link href="/back/dist/css/tabler-socials.min.css?1759774806" rel="stylesheet"
        integrity="sha384-6ZFjebY7ZBhNuAk8uyXLCv26AdsmPUK8CwlWQrKqsCAe4OxXTvNPtN0lrVs1hR6c" />
    <link href="/back/dist/css/tabler-payments.min.css?1759774806" rel="stylesheet"
        integrity="sha384-ePuxWlZXE74SWrWwAm8T+21tp1AR0ro901FG63G27UFyBT8GJCZCNwxcfwQkRzpd" />
    <link href="/back/dist/css/tabler-vendors.min.css?1759774806" rel="stylesheet"
        integrity="sha384-PVpcF20D+pz5Zpjktqco4hMuqKNNBmdur4I+ZSZfeDfT6XCcxUFlwG6U0bhlrOLs" />
    <link href="/back/dist/css/tabler-marketing.min.css?1759774806" rel="stylesheet"
        integrity="sha384-dUr0NA/fWvvkD2c7C0bykpDw46orc0Z8QXGFnTPZ1HHFDJ0JLGSJe6YQMMhAwZKc" />
    <link href="/back/dist/css/tabler-themes.min.css?1759774806" rel="stylesheet"
        integrity="sha384-GM5GVjWc7Y8sg2SO8td7etwGg0mOU7r18rm2IswALnNQK7+NWx7ty7m/4b6vcuJY" />
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN DEMO STYLES -->
    <link href="/back/preview/css/demo.min.css?1759774806" rel="stylesheet"
        integrity="sha384-gNmdq2OmsQ4J5xrePDgbudHSf08NS9iCTBUEJQEbyfebkvJB1fkIhQnVc/BPBuIq" />
    <!-- END DEMO STYLES -->
    @stack('stylesheets')
    <!-- BEGIN CUSTOM FONT -->
    <style>
        @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
</head>

<body>
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="/back/dist/js/tabler-theme.min.js?1759774806"
        integrity="sha384-Zjn8Sup0Ro1lGefRJzsRoThr6fhozxXw9Ni5yrPYnDLDlK0R/JydRAg1QS8CY803"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">
        <!-- BEGIN NAVBAR  -->
        @include('back.layouts.inc.header')
        <!-- END NAVBAR  -->
        <div class="page-wrapper">
            <!-- BEGIN PAGE HEADER -->
            @yield('pageHeader')
            <!-- END PAGE HEADER -->
            <!-- BEGIN PAGE BODY -->
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
            <!-- END PAGE BODY -->
            <!--  BEGIN FOOTER  -->
            @include('back.layouts.inc.footer')
            <!--  END FOOTER  -->
        </div>
    </div>
    <!-- BEGIN PAGE MODALS -->

    <!-- END PAGE MODALS -->
    <div class="settings">
        <a href="#" class="btn btn-floating btn-icon btn-primary" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasSettings" aria-controls="offcanvasSettings" aria-label="Theme Settings">
            <!-- Download SVG icon from http://tabler.io/icons/icon/brush -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-1">
                <path d="M3 21v-4a4 4 0 1 1 4 4h-4" />
                <path d="M21 3a16 16 0 0 0 -12.8 10.2" />
                <path d="M21 3a16 16 0 0 1 -10.2 12.8" />
                <path d="M10.6 9a9 9 0 0 1 4.4 4.4" />
            </svg>
        </a>
        <form class="offcanvas offcanvas-start offcanvas-narrow" tabindex="-1" id="offcanvasSettings">
            <div class="offcanvas-header">
                <h2 class="offcanvas-title">Theme Settings</h2>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column">
                <div>
                    <div class="mb-4">
                        <label class="form-label">Color mode</label>
                        <p class="form-hint">Choose the color mode for your app.</p>
                        <label class="form-check">
                            <div class="form-selectgroup-item">
                                <input type="radio" name="theme" value="light" class="form-check-input"
                                    checked />
                                <div class="form-check-label">Light</div>
                            </div>
                        </label>
                        <label class="form-check">
                            <div class="form-selectgroup-item">
                                <input type="radio" name="theme" value="dark" class="form-check-input" />
                                <div class="form-check-label">Dark</div>
                            </div>
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Color scheme</label>
                        <p class="form-hint">The perfect color mode for your app.</p>
                        <div class="row g-2">
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="blue"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-blue"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="azure"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-azure"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="indigo"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-indigo"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="purple"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-purple"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="pink"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-pink"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="red"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-red"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="orange"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-orange"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="yellow"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-yellow"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="lime"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-lime"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="green"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-green"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="teal"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-teal"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="theme-primary" type="radio" value="cyan"
                                        class="form-colorinput-input" />
                                    <span class="form-colorinput-color bg-cyan"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Font family</label>
                        <p class="form-hint">Choose the font family that fits your app.</p>
                        <div>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-font" value="sans-serif"
                                        class="form-check-input" checked />
                                    <div class="form-check-label">Sans-serif</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-font" value="serif"
                                        class="form-check-input" />
                                    <div class="form-check-label">Serif</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-font" value="monospace"
                                        class="form-check-input" />
                                    <div class="form-check-label">Monospace</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-font" value="comic"
                                        class="form-check-input" />
                                    <div class="form-check-label">Comic</div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Theme base</label>
                        <p class="form-hint">Choose the gray shade for your app.</p>
                        <div>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-base" value="slate"
                                        class="form-check-input" />
                                    <div class="form-check-label">Slate</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-base" value="gray" class="form-check-input"
                                        checked />
                                    <div class="form-check-label">Gray</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-base" value="zinc"
                                        class="form-check-input" />
                                    <div class="form-check-label">Zinc</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-base" value="neutral"
                                        class="form-check-input" />
                                    <div class="form-check-label">Neutral</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-base" value="stone"
                                        class="form-check-input" />
                                    <div class="form-check-label">Stone</div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Corner Radius</label>
                        <p class="form-hint">Choose the border radius factor for your app.</p>
                        <div>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-radius" value="0"
                                        class="form-check-input" />
                                    <div class="form-check-label">0</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-radius" value="0.5"
                                        class="form-check-input" />
                                    <div class="form-check-label">0.5</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-radius" value="1"
                                        class="form-check-input" checked />
                                    <div class="form-check-label">1</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-radius" value="1.5"
                                        class="form-check-input" />
                                    <div class="form-check-label">1.5</div>
                                </div>
                            </label>
                            <label class="form-check">
                                <div class="form-selectgroup-item">
                                    <input type="radio" name="theme-radius" value="2"
                                        class="form-check-input" />
                                    <div class="form-check-label">2</div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-auto space-y">
                    <button type="button" class="btn w-100" id="reset-changes">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/rotate -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-1">
                            <path d="M19.95 11a8 8 0 1 0 -.5 4m.5 5v-5h-5" />
                        </svg>
                        Reset changes
                    </button>
                    <a href="#" class="btn btn-primary w-100" data-bs-dismiss="offcanvas"> Save </a>
                </div>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGE LIBRARIES -->
    <script src="/back/dist/libs/apexcharts/dist/apexcharts.min.js?1759774806" defer></script>
    <script src="/back/dist/libs/jsvectormap/dist/jsvectormap.min.js?1759774806" defer></script>
    <script src="/back/dist/libs/jsvectormap/dist/maps/world.js?1759774806" defer></script>
    <script src="/back/dist/libs/jsvectormap/dist/maps/world-merc.js?1759774806" defer></script>
    <!-- END PAGE LIBRARIES -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="/back/dist/js/tabler.min.js?1759774806" defer
        integrity="sha384-unIRjhtVMnLioKaEGLfUG+RWslRThe9Lztm6DkzYu0aXPlF1nuedHWB9y5/ief1u"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN DEMO SCRIPTS -->
    <script src="/back/preview/js/demo.min.js?1759774806" defer></script>
    <!-- END DEMO SCRIPTS -->
    <script src="https://scripts.tabler.io/banner.js" defer data-tblr-ref="tabler-preview-top-banner"></script>

    @stack('scripts')
    <!-- BEGIN PAGE SCRIPTS -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("chart-visitors"), {
                    chart: {
                        type: "line",
                        fontFamily: "inherit",
                        height: 96,
                        sparkline: {
                            enabled: true,
                        },
                        animations: {
                            enabled: false,
                        },
                    },
                    stroke: {
                        width: [2, 1],
                        dashArray: [0, 3],
                        lineCap: "round",
                        curve: "smooth",
                    },
                    series: [{
                            name: "Visitors",
                            data: [
                                7687, 7543, 7545, 7543, 7635, 8140, 7810, 8315, 8379, 8441, 8485, 8227,
                                8906, 8561, 8333, 8551, 9305, 9647, 9359, 9840, 9805, 8612, 8970,
                                8097, 8070, 9829, 10545, 10754, 10270, 9282,
                            ],
                        },
                        {
                            name: "Visitors last month",
                            data: [
                                8630, 9389, 8427, 9669, 8736, 8261, 8037, 8922, 9758, 8592, 8976, 9459,
                                8125, 8528, 8027, 8256, 8670, 9384, 9813, 8425, 8162, 8024, 8897,
                                9284, 8972, 8776, 8121, 9476, 8281, 9065,
                            ],
                        },
                    ],
                    tooltip: {
                        theme: "dark",
                    },
                    grid: {
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false,
                        },
                        type: "datetime",
                    },
                    yaxis: {
                        labels: {
                            padding: 4,
                        },
                    },
                    labels: [
                        "2020-06-21",
                        "2020-06-22",
                        "2020-06-23",
                        "2020-06-24",
                        "2020-06-25",
                        "2020-06-26",
                        "2020-06-27",
                        "2020-06-28",
                        "2020-06-29",
                        "2020-06-30",
                        "2020-07-01",
                        "2020-07-02",
                        "2020-07-03",
                        "2020-07-04",
                        "2020-07-05",
                        "2020-07-06",
                        "2020-07-07",
                        "2020-07-08",
                        "2020-07-09",
                        "2020-07-10",
                        "2020-07-11",
                        "2020-07-12",
                        "2020-07-13",
                        "2020-07-14",
                        "2020-07-15",
                        "2020-07-16",
                        "2020-07-17",
                        "2020-07-18",
                        "2020-07-19",
                        "2020-07-20",
                    ],
                    colors: ["color-mix(in srgb, transparent, var(--tblr-primary) 100%)",
                        "color-mix(in srgb, transparent, var(--tblr-gray-400) 100%)"
                    ],
                    legend: {
                        show: false,
                    },
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("chart-active-users-3"), {
                    chart: {
                        type: "radialBar",
                        fontFamily: "inherit",
                        height: 192,
                        sparkline: {
                            enabled: true,
                        },
                        animations: {
                            enabled: false,
                        },
                    },
                    plotOptions: {
                        radialBar: {
                            startAngle: -120,
                            endAngle: 120,
                            hollow: {
                                margin: 16,
                                size: "50%",
                            },
                            dataLabels: {
                                show: true,
                                value: {
                                    offsetY: -8,
                                    fontSize: "24px",
                                },
                            },
                        },
                    },
                    series: [78],
                    labels: [""],
                    tooltip: {
                        theme: "dark",
                    },
                    grid: {
                        strokeDashArray: 4,
                    },
                    colors: ["color-mix(in srgb, transparent, var(--tblr-primary) 100%)"],
                    legend: {
                        show: false,
                    },
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("chart-revenue-bg"), {
                    chart: {
                        type: "area",
                        fontFamily: "inherit",
                        height: 40,
                        sparkline: {
                            enabled: true,
                        },
                        animations: {
                            enabled: false,
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        colors: ["color-mix(in srgb, transparent, var(--tblr-primary) 16%)",
                            "color-mix(in srgb, transparent, var(--tblr-primary) 16%)"
                        ],
                        type: "solid",
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                        curve: "smooth",
                    },
                    series: [{
                        name: "Profits",
                        data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53,
                            61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67
                        ],
                    }, ],
                    tooltip: {
                        theme: "dark",
                    },
                    grid: {
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                        type: "datetime",
                    },
                    yaxis: {
                        labels: {
                            padding: 4,
                        },
                    },
                    labels: [
                        "2020-06-21",
                        "2020-06-22",
                        "2020-06-23",
                        "2020-06-24",
                        "2020-06-25",
                        "2020-06-26",
                        "2020-06-27",
                        "2020-06-28",
                        "2020-06-29",
                        "2020-06-30",
                        "2020-07-01",
                        "2020-07-02",
                        "2020-07-03",
                        "2020-07-04",
                        "2020-07-05",
                        "2020-07-06",
                        "2020-07-07",
                        "2020-07-08",
                        "2020-07-09",
                        "2020-07-10",
                        "2020-07-11",
                        "2020-07-12",
                        "2020-07-13",
                        "2020-07-14",
                        "2020-07-15",
                        "2020-07-16",
                        "2020-07-17",
                        "2020-07-18",
                        "2020-07-19",
                        "2020-07-20",
                    ],
                    colors: ["color-mix(in srgb, transparent, var(--tblr-primary) 100%)"],
                    legend: {
                        show: false,
                    },
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("chart-new-clients"), {
                    chart: {
                        type: "line",
                        fontFamily: "inherit",
                        height: 40,
                        sparkline: {
                            enabled: true,
                        },
                        animations: {
                            enabled: false,
                        },
                    },
                    stroke: {
                        width: [2, 1],
                        dashArray: [0, 3],
                        lineCap: "round",
                        curve: "smooth",
                    },
                    series: [{
                            name: "May",
                            data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53,
                                61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67
                            ],
                        },
                        {
                            name: "April",
                            data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41,
                                27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37
                            ],
                        },
                    ],
                    tooltip: {
                        theme: "dark",
                    },
                    grid: {
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false,
                        },
                        type: "datetime",
                    },
                    yaxis: {
                        labels: {
                            padding: 4,
                        },
                    },
                    labels: [
                        "2020-06-21",
                        "2020-06-22",
                        "2020-06-23",
                        "2020-06-24",
                        "2020-06-25",
                        "2020-06-26",
                        "2020-06-27",
                        "2020-06-28",
                        "2020-06-29",
                        "2020-06-30",
                        "2020-07-01",
                        "2020-07-02",
                        "2020-07-03",
                        "2020-07-04",
                        "2020-07-05",
                        "2020-07-06",
                        "2020-07-07",
                        "2020-07-08",
                        "2020-07-09",
                        "2020-07-10",
                        "2020-07-11",
                        "2020-07-12",
                        "2020-07-13",
                        "2020-07-14",
                        "2020-07-15",
                        "2020-07-16",
                        "2020-07-17",
                        "2020-07-18",
                        "2020-07-19",
                        "2020-07-20",
                    ],
                    colors: ["color-mix(in srgb, transparent, var(--tblr-primary) 100%)",
                        "color-mix(in srgb, transparent, var(--tblr-gray-600) 100%)"
                    ],
                    legend: {
                        show: false,
                    },
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("chart-active-users"), {
                    chart: {
                        type: "bar",
                        fontFamily: "inherit",
                        height: 40,
                        sparkline: {
                            enabled: true,
                        },
                        animations: {
                            enabled: false,
                        },
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: "50%",
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    series: [{
                        name: "Profits",
                        data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53,
                            61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67
                        ],
                    }, ],
                    tooltip: {
                        theme: "dark",
                    },
                    grid: {
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                        type: "datetime",
                    },
                    yaxis: {
                        labels: {
                            padding: 4,
                        },
                    },
                    labels: [
                        "2020-06-21",
                        "2020-06-22",
                        "2020-06-23",
                        "2020-06-24",
                        "2020-06-25",
                        "2020-06-26",
                        "2020-06-27",
                        "2020-06-28",
                        "2020-06-29",
                        "2020-06-30",
                        "2020-07-01",
                        "2020-07-02",
                        "2020-07-03",
                        "2020-07-04",
                        "2020-07-05",
                        "2020-07-06",
                        "2020-07-07",
                        "2020-07-08",
                        "2020-07-09",
                        "2020-07-10",
                        "2020-07-11",
                        "2020-07-12",
                        "2020-07-13",
                        "2020-07-14",
                        "2020-07-15",
                        "2020-07-16",
                        "2020-07-17",
                        "2020-07-18",
                        "2020-07-19",
                        "2020-07-20",
                    ],
                    colors: ["color-mix(in srgb, transparent, var(--tblr-primary) 100%)"],
                    legend: {
                        show: false,
                    },
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("chart-mentions"), {
                    chart: {
                        type: "bar",
                        fontFamily: "inherit",
                        height: 240,
                        parentHeightOffset: 0,
                        toolbar: {
                            show: false,
                        },
                        animations: {
                            enabled: false,
                        },
                        stacked: true,
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: "50%",
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    series: [{
                            name: "Web",
                            data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29,
                                51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6
                            ],
                        },
                        {
                            name: "Social",
                            data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6,
                                18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0
                            ],
                        },
                        {
                            name: "Other",
                            data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2,
                                6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6
                            ],
                        },
                    ],
                    tooltip: {
                        theme: "dark",
                    },
                    grid: {
                        padding: {
                            top: -20,
                            right: 0,
                            left: -4,
                            bottom: -4,
                        },
                        strokeDashArray: 4,
                        xaxis: {
                            lines: {
                                show: true,
                            },
                        },
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                        type: "datetime",
                    },
                    yaxis: {
                        labels: {
                            padding: 4,
                        },
                    },
                    labels: [
                        "2020-06-21",
                        "2020-06-22",
                        "2020-06-23",
                        "2020-06-24",
                        "2020-06-25",
                        "2020-06-26",
                        "2020-06-27",
                        "2020-06-28",
                        "2020-06-29",
                        "2020-06-30",
                        "2020-07-01",
                        "2020-07-02",
                        "2020-07-03",
                        "2020-07-04",
                        "2020-07-05",
                        "2020-07-06",
                        "2020-07-07",
                        "2020-07-08",
                        "2020-07-09",
                        "2020-07-10",
                        "2020-07-11",
                        "2020-07-12",
                        "2020-07-13",
                        "2020-07-14",
                        "2020-07-15",
                        "2020-07-16",
                        "2020-07-17",
                        "2020-07-18",
                        "2020-07-19",
                        "2020-07-20",
                        "2020-07-21",
                        "2020-07-22",
                        "2020-07-23",
                        "2020-07-24",
                        "2020-07-25",
                        "2020-07-26",
                        "2020-07-27",
                    ],
                    colors: [
                        "color-mix(in srgb, transparent, var(--tblr-primary) 100%)",
                        "color-mix(in srgb, transparent, var(--tblr-primary) 80%)",
                        "color-mix(in srgb, transparent, var(--tblr-green) 80%)",
                    ],
                    legend: {
                        show: false,
                    },
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const map = new jsVectorMap({
                selector: "#map-world",
                map: "world",
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: "var(--tblr-bg-surface-secondary)",
                        stroke: "var(--tblr-border-color)",
                        strokeWidth: 2,
                    },
                },
                zoomOnScroll: false,
                zoomButtons: false,
                series: {
                    regions: [{
                        attribute: "fill",
                        scale: {
                            scale1: "color-mix(in srgb, transparent, var(--tblr-primary) 10%)",
                            scale2: "color-mix(in srgb, transparent, var(--tblr-primary) 20%)",
                            scale3: "color-mix(in srgb, transparent, var(--tblr-primary) 30%)",
                            scale4: "color-mix(in srgb, transparent, var(--tblr-primary) 40%)",
                            scale5: "color-mix(in srgb, transparent, var(--tblr-primary) 50%)",
                            scale6: "color-mix(in srgb, transparent, var(--tblr-primary) 60%)",
                            scale7: "color-mix(in srgb, transparent, var(--tblr-primary) 70%)",
                            scale8: "color-mix(in srgb, transparent, var(--tblr-primary) 80%)",
                            scale9: "color-mix(in srgb, transparent, var(--tblr-primary) 90%)",
                            scale10: "color-mix(in srgb, transparent, var(--tblr-primary) 100%)",
                        },
                        values: {
                            AF: "scale2",
                            AL: "scale2",
                            DZ: "scale4",
                            AO: "scale3",
                            AG: "scale1",
                            AR: "scale5",
                            AM: "scale1",
                            AU: "scale7",
                            AT: "scale5",
                            AZ: "scale3",
                            BS: "scale1",
                            BH: "scale2",
                            BD: "scale4",
                            BB: "scale1",
                            BY: "scale3",
                            BE: "scale5",
                            BZ: "scale1",
                            BJ: "scale1",
                            BT: "scale1",
                            BO: "scale2",
                            BA: "scale2",
                            BW: "scale2",
                            BR: "scale8",
                            BN: "scale2",
                            BG: "scale2",
                            BF: "scale1",
                            BI: "scale1",
                            KH: "scale2",
                            CM: "scale2",
                            CA: "scale7",
                            CV: "scale1",
                            CF: "scale1",
                            TD: "scale1",
                            CL: "scale4",
                            CN: "scale9",
                            CO: "scale5",
                            KM: "scale1",
                            CD: "scale2",
                            CG: "scale2",
                            CR: "scale2",
                            CI: "scale2",
                            HR: "scale3",
                            CY: "scale2",
                            CZ: "scale4",
                            DK: "scale5",
                            DJ: "scale1",
                            DM: "scale1",
                            DO: "scale3",
                            EC: "scale3",
                            EG: "scale5",
                            SV: "scale2",
                            GQ: "scale2",
                            ER: "scale1",
                            EE: "scale2",
                            ET: "scale2",
                            FJ: "scale1",
                            FI: "scale5",
                            FR: "scale8",
                            GA: "scale2",
                            GM: "scale1",
                            GE: "scale2",
                            DE: "scale8",
                            GH: "scale2",
                            GR: "scale5",
                            GD: "scale1",
                            GT: "scale2",
                            GN: "scale1",
                            GW: "scale1",
                            GY: "scale1",
                            HT: "scale1",
                            HN: "scale2",
                            HK: "scale5",
                            HU: "scale4",
                            IS: "scale2",
                            IN: "scale7",
                            ID: "scale6",
                            IR: "scale5",
                            IQ: "scale3",
                            IE: "scale5",
                            IL: "scale5",
                            IT: "scale8",
                            JM: "scale2",
                            JP: "scale9",
                            JO: "scale2",
                            KZ: "scale4",
                            KE: "scale2",
                            KI: "scale1",
                            KR: "scale6",
                            KW: "scale4",
                            KG: "scale1",
                            LA: "scale1",
                            LV: "scale2",
                            LB: "scale2",
                            LS: "scale1",
                            LR: "scale1",
                            LY: "scale3",
                            LT: "scale2",
                            LU: "scale3",
                            MK: "scale1",
                            MG: "scale1",
                            MW: "scale1",
                            MY: "scale5",
                            MV: "scale1",
                            ML: "scale1",
                            MT: "scale1",
                            MR: "scale1",
                            MU: "scale1",
                            MX: "scale7",
                            MD: "scale1",
                            MN: "scale1",
                            ME: "scale1",
                            MA: "scale3",
                            MZ: "scale2",
                            MM: "scale2",
                            NA: "scale2",
                            NP: "scale2",
                            NL: "scale6",
                            NZ: "scale4",
                            NI: "scale1",
                            NE: "scale1",
                            NG: "scale5",
                            NO: "scale5",
                            OM: "scale3",
                            PK: "scale4",
                            PA: "scale2",
                            PG: "scale1",
                            PY: "scale2",
                            PE: "scale4",
                            PH: "scale4",
                            PL: "scale10",
                            PT: "scale5",
                            QA: "scale4",
                            RO: "scale4",
                            RU: "scale7",
                            RW: "scale1",
                            WS: "scale1",
                            ST: "scale1",
                            SA: "scale5",
                            SN: "scale2",
                            RS: "scale2",
                            SC: "scale1",
                            SL: "scale1",
                            SG: "scale5",
                            SK: "scale3",
                            SI: "scale2",
                            SB: "scale1",
                            ZA: "scale5",
                            ES: "scale7",
                            LK: "scale2",
                            KN: "scale1",
                            LC: "scale1",
                            VC: "scale1",
                            SD: "scale3",
                            SR: "scale1",
                            SZ: "scale1",
                            SE: "scale5",
                            CH: "scale6",
                            SY: "scale3",
                            TW: "scale5",
                            TJ: "scale1",
                            TZ: "scale2",
                            TH: "scale5",
                            TL: "scale1",
                            TG: "scale1",
                            TO: "scale1",
                            TT: "scale2",
                            TN: "scale2",
                            TR: "scale6",
                            TM: "scale1",
                            UG: "scale2",
                            UA: "scale4",
                            AE: "scale5",
                            GB: "scale8",
                            US: "scale10",
                            UY: "scale2",
                            UZ: "scale2",
                            VU: "scale1",
                            VE: "scale5",
                            VN: "scale4",
                            YE: "scale2",
                            ZM: "scale2",
                            ZW: "scale1",
                        },
                    }, ],
                },
            });
            window.addEventListener("resize", () => {
                map.updateSize();
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("sparkline-activity"), {
                    chart: {
                        type: "radialBar",
                        fontFamily: "inherit",
                        height: 40,
                        width: 40,
                        animations: {
                            enabled: false,
                        },
                        sparkline: {
                            enabled: true,
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    plotOptions: {
                        radialBar: {
                            hollow: {
                                margin: 0,
                                size: "75%",
                            },
                            track: {
                                margin: 0,
                            },
                            dataLabels: {
                                show: false,
                            },
                        },
                    },
                    colors: ["var(--tblr-primary)"],
                    series: [35],
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("chart-development-activity"), {
                    chart: {
                        type: "area",
                        fontFamily: "inherit",
                        height: 192,
                        sparkline: {
                            enabled: true,
                        },
                        animations: {
                            enabled: false,
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        colors: ["color-mix(in srgb, transparent, var(--tblr-primary) 16%)",
                            "color-mix(in srgb, transparent, var(--tblr-primary) 16%)"
                        ],
                        type: "solid",
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                        curve: "smooth",
                    },
                    series: [{
                        name: "Purchases",
                        data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14,
                            25, 32, 40, 55, 60, 48, 52, 70
                        ],
                    }, ],
                    tooltip: {
                        theme: "dark",
                    },
                    grid: {
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                        type: "datetime",
                    },
                    yaxis: {
                        labels: {
                            padding: 4,
                        },
                    },
                    labels: [
                        "2020-06-21",
                        "2020-06-22",
                        "2020-06-23",
                        "2020-06-24",
                        "2020-06-25",
                        "2020-06-26",
                        "2020-06-27",
                        "2020-06-28",
                        "2020-06-29",
                        "2020-06-30",
                        "2020-07-01",
                        "2020-07-02",
                        "2020-07-03",
                        "2020-07-04",
                        "2020-07-05",
                        "2020-07-06",
                        "2020-07-07",
                        "2020-07-08",
                        "2020-07-09",
                        "2020-07-10",
                        "2020-07-11",
                        "2020-07-12",
                        "2020-07-13",
                        "2020-07-14",
                        "2020-07-15",
                        "2020-07-16",
                        "2020-07-17",
                        "2020-07-18",
                        "2020-07-19",
                        "2020-07-20",
                    ],
                    colors: ["color-mix(in srgb, transparent, var(--tblr-primary) 100%)"],
                    legend: {
                        show: false,
                    },
                    point: {
                        show: false,
                    },
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("sparkline-bounce-rate-1"), {
                    chart: {
                        type: "line",
                        fontFamily: "inherit",
                        height: 24,
                        animations: {
                            enabled: false,
                        },
                        sparkline: {
                            enabled: true,
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "var(--tblr-primary)",
                        data: [17, 24, 20, 10, 5, 1, 4, 18, 13],
                    }, ],
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("sparkline-bounce-rate-2"), {
                    chart: {
                        type: "line",
                        fontFamily: "inherit",
                        height: 24,
                        animations: {
                            enabled: false,
                        },
                        sparkline: {
                            enabled: true,
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "var(--tblr-primary)",
                        data: [13, 11, 19, 22, 12, 7, 14, 3, 21],
                    }, ],
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("sparkline-bounce-rate-3"), {
                    chart: {
                        type: "line",
                        fontFamily: "inherit",
                        height: 24,
                        animations: {
                            enabled: false,
                        },
                        sparkline: {
                            enabled: true,
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "var(--tblr-primary)",
                        data: [10, 13, 10, 4, 17, 3, 23, 22, 19],
                    }, ],
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("sparkline-bounce-rate-4"), {
                    chart: {
                        type: "line",
                        fontFamily: "inherit",
                        height: 24,
                        animations: {
                            enabled: false,
                        },
                        sparkline: {
                            enabled: true,
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "var(--tblr-primary)",
                        data: [6, 15, 13, 13, 5, 7, 17, 20, 19],
                    }, ],
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("sparkline-bounce-rate-5"), {
                    chart: {
                        type: "line",
                        fontFamily: "inherit",
                        height: 24,
                        animations: {
                            enabled: false,
                        },
                        sparkline: {
                            enabled: true,
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "var(--tblr-primary)",
                        data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14],
                    }, ],
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts &&
                new ApexCharts(document.getElementById("sparkline-bounce-rate-6"), {
                    chart: {
                        type: "line",
                        fontFamily: "inherit",
                        height: 24,
                        animations: {
                            enabled: false,
                        },
                        sparkline: {
                            enabled: true,
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "var(--tblr-primary)",
                        data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14],
                    }, ],
                }).render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var themeConfig = {
                theme: "light",
                "theme-base": "gray",
                "theme-font": "sans-serif",
                "theme-primary": "blue",
                "theme-radius": "1",
            };
            var url = new URL(window.location);
            var form = document.getElementById("offcanvasSettings");
            var resetButton = document.getElementById("reset-changes");
            var checkItems = function() {
                for (var key in themeConfig) {
                    var value = window.localStorage["tabler-" + key] || themeConfig[key];
                    if (!!value) {
                        var radios = form.querySelectorAll(`[name="${key}"]`);
                        if (!!radios) {
                            radios.forEach((radio) => {
                                radio.checked = radio.value === value;
                            });
                        }
                    }
                }
            };
            form.addEventListener("change", function(event) {
                var target = event.target,
                    name = target.name,
                    value = target.value;
                for (var key in themeConfig) {
                    if (name === key) {
                        document.documentElement.setAttribute("data-bs-" + key, value);
                        window.localStorage.setItem("tabler-" + key, value);
                        url.searchParams.set(key, value);
                    }
                }
                window.history.pushState({}, "", url);
            });
            resetButton.addEventListener("click", function() {
                for (var key in themeConfig) {
                    var value = themeConfig[key];
                    document.documentElement.removeAttribute("data-bs-" + key);
                    window.localStorage.removeItem("tabler-" + key);
                    url.searchParams.delete(key);
                }
                checkItems();
                window.history.pushState({}, "", url);
            });
            checkItems();
        });
    </script>
    <!-- END PAGE SCRIPTS -->
</body>

</html>
