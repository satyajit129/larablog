<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <style>
        .card{
            font-size: 14px !important;
        }
        

    </style>

    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
            @include('layouts.inc.admin-footer')
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <script>
        $('#post_category_id').on('change', function() {
            var id = $(this).val(); // Get the new value of the input.
            var url = '{{ route('admin.PostSubCategory.byCategory', ':id') }}';
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'GET', // The HTTP request method (GET, POST, etc.)

                success: function(data) {
                    $("#post_sub_category_id").html(data);
                    console.log(data);
                }
            });
        });
    </script>
    <script>
        // A $( document ).ready() block.
        $(document).ready(function() {
            console.log("ready!");
        });
    </script>

    {{-- select Option using select-2 --}}
    <script>
        $('#select_two').select2();
    </script>
    <script>
            $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
