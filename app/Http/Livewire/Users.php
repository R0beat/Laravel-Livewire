<?php

namespace App\Http\Livewire;
#Nos Conectamos a nuestra entidad de Usuarios
use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $name, $user, $password,$email;

    public function render(){
        return view('livewire.users',[
            'users' => User::orderBy('id')->get()
        ]);
    }
    public function store(){
        $this-> validate([
            'name' => 'required',
            'email' => 'required|email|max:190|unique:users',
            'password' => 'required|min:6',
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            # Usamos el helper para encyptar las contraseñas
            'password' => bcrypt($this->password),

        ]);
        
        # Despues del regstro vaciamos las propiedades
        $this->name = '';
        $this->email = '';
        $this->password = '';

        # Mensaje de Sesión que se enviara a nuestra vista
        #session()->flash('message','Usuario Creado');

        $this->succes();
    }
    public function succes(){
        $this->dispatchBrowserEvent('alert',['message'=>'Usuario Creado']);
    }
}
