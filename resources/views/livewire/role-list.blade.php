<div>
    <div class="mb-4">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="create" class="space-y-4">
            <div>
                <label for="name" class="block">Role Name</label>
                <input wire:model="name" type="text" id="name" class="border rounded p-2 w-full">
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="description" class="block">Description</label>
                <textarea wire:model="description" id="description" class="border rounded p-2 w-full"></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Role</button>
        </form>
    </div>

    <div>
        <h2 class="text-xl font-bold mb-4">Roles List</h2>
        <table class="w-full border">
            <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">Name</th>
                <th class="border p-2">Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td class="border p-2">{{ $role->name }}</td>
                    <td class="border p-2">{{ $role->description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $roles->links() }}
    </div>
</div>
