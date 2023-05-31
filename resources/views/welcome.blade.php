<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
    </head>
</html>
    <!-- component -->
<!-- This is an example component -->
<div>
   <x-navbar />
   <div class="flex overflow-hidden bg-white pt-16">
        <x-sidebar />
        <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <x-main />
            <x-footer />
        </div>
    </div>
</div>
