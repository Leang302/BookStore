<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashbaord</title>

    @vite('resources/css/app.css')

</head>

<body class="h-full bg-white">
    <div class="h-full">
        <div>
            {{-- mobile menu --}}
            @include('admin.components.mobile-menu')

            <!-- Static sidebar for desktop -->
            @include('admin.components.desktop-menu')

            <div class="lg:pl-72">
                @include('admin.components.header-bar')

                <main class="py-10">
                    <div class="px-4 sm:px-6 lg:px-8">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>


    {{-- script --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            //user menu dropdown
            $('#user-menu-button').click(function() {
                $('#profile-detail-menu').slideToggle();
            });
            //add catagory pop up
            $('#AddCatagoryBtn').click(function() {
                // $('#addCatagoryForm').removeClass('hidden');
                // $('#addCatagoryForm').addClass('block');
                // $('.popup').removeClass('scale-0 opacity-0') addClass('scale-100 opacity-100');
                $('#addCatagoryForm').slideToggle();
                // $('#addCatagoryForm').fadeIn(300);
            })
            $('#cancelAddCatagory').click(function() {
                // $('#addCatagoryForm').removeClass('block');
                // $('#addCatagoryForm').addClass('hidden');

                $('#addCatagoryForm').toggle();

            })
        });
    </script>
</body>

</html>
