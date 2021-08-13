<div class="container max-auto px-4 my-8 flex items-start">
    {{--  
        @if (session()->has('message'))
        {{ session('message') }}
        @endif
    --}}
    <form action="" class="p-4 border-l-4 border-pink-300 shadow-md mr-8 w-1/4">
        <div class="mb-4">
            <label class="text-pink-600 font-bold mb-2">Nombre:</label>
            <input class="p-2 bg-pink-50 outline-none w-full" type="text" wire:model='name'>
            @error('name') <em class="text-xs text-red-900"> {{ $message }}</em> @enderror 
        </div>
        <div class="mb-4">
            <label class="text-pink-600 font-bold mb-2">Email:</label>
            <input class="p-2 bg-pink-50 outline-none w-full" type="text" wire:model='email'>
            @error('email') <em class="text-xs text-red-900"> {{ $message }}</em> @enderror 
        </div>
        <div class="mb-4">
            <label class="text-pink-600 font-bold mb-2">Password:</label>
            <input class="p-2 bg-pink-50 outline-none w-full" type="pass" wire:model='password'>
            @error('password') <em class="text-xs text-red-900"> {{ $message }}</em> @enderror 
        </div>

        <button wire:click.prevent='store()' class="bg-pink-400 text-white font-bold w-full rounded shadow p-2">Guardar</button>
    </form>
    <hr>
    <table class="shadow-md">
        <thead class="bg-purple-200 text-purple-400 uppercase text-sm">
            <tr>
                <th class="py-3 px-6 text-left">#</th>
                <th class="py-3 px-6 text-left">Nombre</th>
                <th class="py-3 px-6 text-left">Email</th>
            </tr>
        </thead>
        <tbody class="text-purple-400">
            <tr>
                @foreach($users as $user)
                    <tr class="border-b border-purple-100">
                        <td class="px4 py-2">{{ $user-> id}}</td>
                        <td class="px4 py-2">{{ $user-> name }}</td>
                        <td class="px4 py-2">{{ $user-> email}}</td>
                    </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>

