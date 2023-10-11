

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <table class="min-w-full border border-gray-300 text-white mx-auto">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Fullname</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Phone Number</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>


                @foreach($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $user->fullname }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->phoneNumber }}</td>
                        <td class="py-2 px-4 border-b">
                        <a href="{{ route('userView', $user) }}" class="bg-blue-500 text-white py-1 px-2 rounded hover:bg-blue-700 underline">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>