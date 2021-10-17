@extends ('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="w-full min-h-screen overflow-y-scroll">
    <div class="w-full h-16 flex items-center">
        <h1 class="text-2xl mx-auto">Meus Eventos</h1>
    </div>
    <div class="w-full">
        @if(count($events) > 0)
        <table class="w-full mx-auto text-center">
            <thead class="border w-full">
                <tr>
                    <th class="py-2" scope="col">#</th>
                    <th class="py-2" scope="col">Nome</th>
                    <th class="py-2" scope="col">Participantes</th>
                    <th class="py-2" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr class="border">
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><a class="text-gray-700" href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>{{ count($event->users) }}</td>
                    <td>
                        <form class="" action="/events/{{ $event->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="mr-2 text-white cursor-pointer py-2 px-4 rounded linkblue" href="/events/edit/{{ $event->id }}">
                                <ion-icon name="create-outline"></ion-icon>
                                Editar
                            </a>
                            <button class="cursor-pointer py-2 px-4 text-white  rounded linkred" type="submit">
                                <ion-icon name="trash-outline"></ion-icon>
                                Deletar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Você ainda não tem eventos.</p>
        <a href="/events/create">criar evento</a>
        @endif
    </div>
    <div class="w-full h-16 flex items-center">
        <h1 class="text-2xl mx-auto">Eventos que estou participando</h1>
    </div>
    <div class="w-full">
        @if(count($eventsAsParticipant) > 0)
        <table class="w-full mx-auto text-center">
            <thead class="border">
                <tr>
                    <th class="py-2" scope="col">#</th>
                    <th class="py-2" scope="col">Nome</th>
                    <th class="py-2" scope="col">Participantes</th>
                    <th class="py-2" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eventsAsParticipant as $event)
                <tr class="border">
                    <td class="py-2" scope="row">{{ $loop->index + 1 }}</td>
                    <td><a class="text-gray-700" href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>{{ count($event->users) }}</td>
                    <td class="text-center">
                        <form action="/events/leave/{{ $event->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="btn" class="pr-2 cursor-pointer py-2 px-4 text-white rounded linkred" href="">
                                Sair do evento
                                <ion-icon class="px-2" name="trash-outline"></ion-icon>
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Você ainda não está participando de nenhum evento.</p>
        <a href="/">Ver todos os eventos</a>
        @endif
    </div>
</div>

@endsection