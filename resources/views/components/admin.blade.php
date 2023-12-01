<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alexandria - Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/Chart.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/tailwind.output.css')}}" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen}"
>
    <x-admin-sidebar></x-admin-sidebar>

    <div class="flex flex-col flex-1">
        <x-admin-header></x-admin-header>

        <main class="h-full pb-16 overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>

<script src="{{asset('js/init-alpine.js')}}"></script>
<script src="{{asset('js/alpine.min.js.js')}}"></script>
<script src="{{ asset('js/charts-pie.js') }}?v={{ time() }}" defer></script>
<script src="{{ asset('js/charts-lines.js') }}?v={{ time() }}" defer></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var successMessage = @json(session('success'));

        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: successMessage,
            });
        }
    });
</script>
</body>
</html>
