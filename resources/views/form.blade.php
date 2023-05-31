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
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <div class="px-6 py-5 pt-96 pb-96 bg-white rounded-md shadow-2xl mx-4 my-6">
                
            </div>
            <x-footer />
        </div>
    </div>
</div>
