<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Shuyi's Portal</title>
        <meta name='description' itemprop='description' content='description...'/>
        <meta name='keywords' content='Junhai, Shuyi, Portfolio, Yang Junhai, Junhai Yang, Yang Shuyi, Shuyi Yang'/>
        <meta property="og:description" content="My Personal Website"/>
        <meta property="og:title" content="Shuyi's Portal"/>
        <meta property="og:url" content="{{URL::current()}}"/>
        <meta property="og:type" content="article"/>
        <meta property="og:locale" content="en-ca"/>
        <meta property="og:site_name" content="Shuyi's Portal"/>
        <meta property="og:image" content="/img/seo-prevew.png"/>
        <meta property="og:image:url" content="/img/seo-prevew.png"/>
        <meta property="og:image:size" content="300"/>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @yield('extra-style')
    </head>
    <body class="m-0">
        <div id="app" class="h-100 w-100">
            <el-container>
                <el-header class="px-0 w-100">
                    @yield('header')
                </el-header>
                <el-main>
                    @yield('content')
                </el-main>
            </el-container>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
