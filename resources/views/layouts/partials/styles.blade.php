<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Vendors -->
<link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('/vendors/bootstrap-icons/bootstrap-icons.css') }}">


<!-- Styles -->
@vite('resources/css/bootstrap.css')
@vite('resources/css/app.css')
@vite('resources/css/app-dark.css')


@livewireStyles

{{ $style ?? '' }}