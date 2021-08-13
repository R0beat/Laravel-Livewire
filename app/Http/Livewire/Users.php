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
            'users' => User::latest()->get()
        ]);
    }
    public function store(){
        $this-> validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
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
