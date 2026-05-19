<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ Env('APP_NAME') }}</title>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <!--<link href="./dist/libs/jsvectormap/dist/jsvectormap.css?1752393272" rel="stylesheet" />-->
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('dist/css/tabler.css?1752393272') }}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PLUGINS STYLES -->
    <link href="{{ asset('dist/css/tabler-flags.css?1752393272') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-socials.css?1752393272') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-payments.css?1752393272') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-vendors.css?1752393272') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-marketing.css?1752393272') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-themes.css?1752393272') }}" rel="stylesheet" />
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN DEMO STYLES -->
    <link href="./preview/css/demo.css?1752393272" rel="stylesheet" />
    <!-- END DEMO STYLES -->
    <!-- BEGIN CUSTOM FONT -->
    <style>
        @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
</head>

<body class="layout-boxed">
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset('dist/js/tabler-theme.min.js?1752393272') }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">

        <!-- BEGIN NAVBAR  -->

        <!-- END NAVBAR  -->
        <div class="page-wrapper">

            <!-- BEGIN PAGE BODY -->
            <div class="page-body">

                 {{ $slot }}                

            </div>
            <!-- END PAGE BODY -->
            <!--  BEGIN FOOTER  -->
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ms-lg-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="https://docs.tabler.io" target="_blank"
                                        class="link-secondary" rel="noopener">Documentation</a></li>
                                <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary"
                                        rel="noopener">Source code</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/sponsors/codecalm" target="_blank"
                                        class="link-secondary" rel="noopener">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon text-pink icon-inline icon-4">
                                            <path
                                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                        Sponsor
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2025
                                    <a href="." class="link-secondary">Tabler</a>. All rights reserved.
                                </li>
                                <li class="list-inline-item">
                                    <a href="./changelog.html" class="link-secondary" rel="noopener"> v1.4.0 </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!--  END FOOTER  -->
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('dist/js/tabler.min.js?17523932729') }}" defer></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

</body>

</html>
