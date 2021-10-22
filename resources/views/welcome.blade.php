@extends ('layouts.main')

@section('title', 'Zen Events')

@section('content')

<div class="search w-full h-1/6 pt-8 text-center text-gray-200">
    <h1 class="text-4xl mt-12 text-gray-900 font-bold">Buscar um evento</h1>
    <form action="/" class="w-full mt-2" method="GET">
        @csrf
        <input class="w-2/4 p-1.5 mr-1 outline-none text-gray-900 rounded-md mt-2 border border-transparent focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" type="text" id="search" name="search">
        <input class="bg-red-600 py-2 px-3 font-normal rounded-md text-gray-900 cursor-pointer hover:text-red-500 hover:bg-gray-900" type="submit" value="Buscar">
    </form>
</div>
<div id="events-container" class="w-full pb-6 pt-6 bg-gray-700">
    @if($search)
    <h2 class="ml-4 text-2xl text-gray-200">Procurando por: <span class="text-yellow-500">{{ "' $search '" }}</span></h2>
    @else
    <h2 class="ml-4 text-2xl text-gray-200">Próximos Eventos</h2>
    <p class="ml-4 text-gray-400">Veja os eventos dos próximos dias</p>
    @endif
    <div id="cards-container" class="flex flex-wrap gap-4 pl-5 mt-6 mx-auto">
        @foreach ($events as $event)
        <div id="card" class="flex flex-col w-48 h-72 gap-6 border border-opacity-30 rounded">
            <img class="w-48 h-2/4 rounded-t-sm rounded-r-sm" src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div id="card-body" class="flex flex-col text-xs gap-2 text-gray-300">
                <p id="card-date">
                    <ion-icon class="text-red-600 mx-2" name="calendar-outline"></ion-icon>{{ date('d / m / Y', strtotime($event->date)) }}
                </p>
                <h5 id="card-title">
                    <ion-icon class="text-red-600 mx-2" name="bookmark-outline"></ion-icon>{{ $event->title }}
                </h5>
                @if(count($event->users) == 0)
                <p id="card-participantes">
                    <ion-icon class="text-red-600 mx-2" name="body-outline"></ion-icon>Nenhum Participante
                </p>
                @elseif(count($event->users) == 1)
                <p id="card-participantes">
                    <ion-icon class="text-red-600 mx-2" name="body-outline"></ion-icon>{{count($event->users)}} participante
                </p>
                @else
                <p id="card-participantes">
                    <ion-icon class="text-red-600 mx-2" name="body-outline"></ion-icon>{{count($event->users)}} participantes
                </p>
                @endif
                <a class="bg-red-600 px-3 py-2 mx-auto rounded hover:bg-gray-900 hover:border hover:border-red-600" href="/events/{{ $event->id }}">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0 && $search)
        <p class="text-gray-200 py-3">Não foram encontrados eventos para o busca:
            <span class="text-xl text-yellow-500">
                {{ "' $search '" }}</span>
            <a class="text-gray-900 hover:text-gray-200 underline" href="/">Voltar a todos!</a>
        </p>
        @elseif(count($events) == 0)
        <p class="text-gray-200">Não existem eventos disponíveis.</p>
        @endif
    </div>
</div>
@endsection