<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title">{{ __("You're logged in!") }}</h3>
                    <div class="mt-4">
                        <a href="/admin/activities" class="btn btn-primary mb-2">Activities</a>
                        <a href="/admin/programs" class="btn btn-primary mb-2">Programs</a>
                        <a href="/admin/services" class="btn btn-primary mb-2">Services</a>
                        <a href="/admin/businesses" class="btn btn-primary mb-2">Businesses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
