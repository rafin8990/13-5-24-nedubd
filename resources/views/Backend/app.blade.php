<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/d703802588.js" crossorigin="anonymous"></script>
    <!-- flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<style>
    /* You can add custom styles here */
    .gradient-bg {
        background: linear-gradient(90deg, #1E3A8A 0%, #007BFF 50%, #1E3A8A 100%);
    }

    .ui-autocomplete-loading {
        background: white url('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js') right center no-repeat;
    }
</style>

<body class="">
    @include('Shared.navbar')
    @include('Shared.sidebar')
    <div class="p-4 sm:ml-72 mt-14 ">
        @yield('Dashboard')
    </div>
</body>

</html>