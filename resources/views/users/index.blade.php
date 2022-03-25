<x-app-layout>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-5 bg-white border-b border-gray-200">
                    <div">
                        <table class="table table-striped">
                            <thead>
                                <tr class="border-b">
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">#</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">Name</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">Email</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">Hotel</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2"></th>
                                        
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $user->id }}</th>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @foreach ($user->hotels as $hotel)   
                                            {{$hotel->name}}
                                        @endforeach
                                        </td>
                                        <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-sm"><x-jet-button>Edit</x-jet-button></a></td>
                                        
                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex">
                            {!! $users->links() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
