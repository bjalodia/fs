<x-app-layout>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-5 bg-white border-b border-gray-200">
                    <div">
                    <x-jet-form-section submit="updateProfileInformation">
                    <x-slot name="title">
                            {{ __('Profile Information') }}
                        </x-slot>
                        <x-slot name="description">
                            {{ __('add property to account\'s profile.') }}
                        </x-slot>
                        <x-slot name="form">
                        <form method="post" action="{{ route('user.update', $user->id) }}">
                                @method('patch')
                                @csrf
                                <!-- Name -->
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label for="name" value="{{ __('Name') }}" />
                                    <x-jet-input id="name" type="text" class="mt-1 block w-full" name="name" value="{{ $user->name }}" />
                                    <x-jet-input-error for="name" class="mt-2" />
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label class="m-3" for="email" value="Email" />
                                    <x-jet-input id="email" class="mt-1 block w-full" type="email" name="email" value="{{ $user->email }}" />
                                </div>
                                <x-slot name="actions">
                                    <x-jet-button >Update</x-jet-button>
                                </x-slot>
                        </x-slot>
                    </x-jet-form-section>
                        <div class="container mt-4">
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
