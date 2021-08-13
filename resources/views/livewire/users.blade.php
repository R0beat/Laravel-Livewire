<div>
    @if (session()->has('message'))
    {{ session('message') }}
    @endif
    <form action="">
        <label for="">Nombre:</label>
        <input type="text" wire:model='name'>
        @error('name') <em> {{ $message }}</em> @enderror <br>
        <label for="">Email:</label>
        <input type="text" wire:model='email'>
        @error('email') <em> {{ $message }}</em> @enderror <br>
        <label for="">Password:</label>
        <input type="text" wire:model='password'>
        @error('password') <em> {{ $message }}</em> @enderror <br>

        <button wire:click.prevent='store()'>Guardar</button>
    </form>
    <hr>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user-> name}}</td>
                        <td>{{ $user-> email}}</td>
                    </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
