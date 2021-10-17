@extends ('layouts.main')

@section('title', $event->title)

@section('content')

<div id="main" class="w-full h-full">
  <div id="container" class="h-full mx-12 flex items-center gap-4">
    <div id="box-1" class="flex flex-col w-2/4 py-auto">
      <img class="rounded-lg min-width" src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
      <h3 class="font-bold mt-5">Sobre o evento:</h3>
      <p>{{ $event->description }}</p>
    </div>
    <div id="box-2" class="w-2/4 h-full flex flex-col justify-center">
      <div class="flex flex-col mx-14 gap-4">
        <h1 class="flex items-center">
          <ion-icon class="pr-2 text-red-600" name="bookmark-outline"></ion-icon>{{ $event->title }}
        </h1>
        <h1 class="flex items-center">
          <ion-icon class="pr-2 text-red-600" name="calendar-outline"></ion-icon>{{ date('d / m / Y', strtotime($event->date)) }}
        </h1>
        <h1 class="flex items-center">
          <ion-icon class="pr-2 text-red-600" name="location-outline"></ion-icon>{{ $event->city }}
        </h1 class="flex items-center">
        <h1 class="flex items-center">
          <ion-icon class="pr-2 text-red-600" name="people-outline"></ion-icon>{{count($event->users)}} Participantes
        </h1 class="flex items-center">
        <h1 class="flex items-center">
          <ion-icon class="pr-2 text-red-600" name="star-outline"></ion-icon>
          {{ $eventOwner['name']}}
        </h1 class="flex items-center">
        @if($hasUserJoined)
        <p class="bg-red-400 px-4 py-2 w-full text-center rounded border border-red-500">Você ja está participando deste evento!</p>
        @else
        <form action="/events/join/{{ $event->id }}" method="POST">
          @csrf
          <a class="w-full text-center bg-red-600 px-4 py-2 rounded hover:bg-gray-900 hover:border hover:border-red-500" href="/events/join/{{ $event->id }}" onclick="event.preventDefault();this.closest('form').submit();">
            Participar
          </a>
        </form>
        @endif

        <h3 class="font-bold">O evento conta com:</h3>
        <ul>
          @foreach ($event->items as $item)
          <li class="flex items-center">
            <ion-icon class="mr-2 text-red-600" name="play-outline"></ion-icon>
            {{ $item }}
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection