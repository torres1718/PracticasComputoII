
    <x-slot name="header">
        
        <center><h2 class="font-semibold text-xl text-gray-800 leading-tight">
BIENVENIDO A MI CRUD
        </h2>
        </center>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <button wire:click="create()" class="btn btn-primary" >Nuevo Registro</button>
                <br>
                @if($isModalOpen)
                    @include('livewire.create')
                @endif
                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($alumnos as $alumno)
                        <tr>
                            <td>{{$alumno->id}}</td>
                            <td>{{$alumno->nombre}}</td>
                            <td>{{$alumno->edad}}</td>
                            <td class="border px-4 py-2">
                                 <button wire:click="edit({{ $alumno->id }})"
                                class="btn btn-success">Edit</button>
                                    <button wire:click="delete({{ $alumno->id }})"
                                class="btn btn-info">Delete</button>
                           </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 

            </div>
        </div>
    </div>
