<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Editar información de paciente') }}</div>
                    <div class="card-body">
                        <form method="get" action=" {{ route('App/Http/Controllers/PacientesController/id->edit')}}">
                            @csrf
                            {{ method_field('PUT') }}
                            @include('pacientes.formEditar')
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>