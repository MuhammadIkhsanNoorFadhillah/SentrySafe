@include('admin.sidebar')
@include('admin.navbar')

<div class="ms-5 mt-5">
    <h2 class="text-2xl font-bold">Edit Profil</h2>
</div>


<x-app-layout>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="flex gap-6">
                    <!-- Section for Profile Information -->
                    <div class="flex-1 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <!-- Section for Updating Password -->
                    <div class="flex-1 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>

                <!-- Section for Deleting User -->
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>

</x-app-layout>

@include('admin.footer')
