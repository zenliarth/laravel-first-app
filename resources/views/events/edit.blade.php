@extends ('layouts.main')

@section('title', 'Editar Evento')

@section('content')

<div id="event-create-container" class="bg-gray-800 text-gray-100 flex flex-col w-full py-14  justify-center">
  <div class="w-6/12 max-w-5xl bg-gray-900 mx-auto border border-opacity-30 px-8 py-4 rounded-lg shadow-lg">
    <h1 class="text-center py-4 text-3xl text-red-600">Editar Evento</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="py-2">
        <label class="text-gray-200" for="image">Imagem:</label>
        <input class="w-full py-1 text-gray-900 rounded-sm outline-none focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" type="file" id="image" name="image" value="{{ $event->image }}">
      </div>
      <div class="py-2">
        <label class="mr-2 text-gray-200" for="title">Evento:</label>
        <input class="w-full py-1 px-2 text-gray-900 rounded-sm outline-none focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" type="text" id="title" name="title" value="{{ $event->title }}">
      </div>
      <div class="py-2">
        <label class="mr-2 text-gray-200" for="date">Data do Evento:</label>
        <input class="w-full py-1 px-2 text-gray-900 rounded-sm outline-none focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" type="date" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
      </div>
      <div class="py-2">
        <label class="mr-2 text-gray-200" for="title">Cidade:</label>
        <input class="w-full py-1 px-2 rounded-sm text-gray-900 outline-none focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" type="text" id="city" name="city" value="{{ $event->city }}">
      </div>
      <div class="py-2">
        <label class="text-gray-200" for="title">Evento privado: </label>
        <select class="w-full py-2 px-2 rounded-sm text-gray-900 outline-none focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent " name="private" id="private">
          <option value="1" {{ $event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
          <option value="0">N??o</option>
        </select>
      </div>
      <div class="py-2 flex flex-col items-center justify-center">
        <label class="self-start text-gray-200" for="title">Descri????o:</label>
        <textarea class="w-full px-2 py-1 text-gray-900 rounded-sm outline-none focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" name="description" id="description" required value="{{ $event->description }}"></textarea>
      </div>
      <div class="py-2 flex flex-col">
        <label class="self-start text-gray-200" for="title">Infraestrutura:</label>
        <div class="w-full">
          <input class="mr-3" type="checkbox" name="items[]" value="Palco">Palco</input>
        </div>
        <div class="w-full">
          <input class="mr-3" type="checkbox" name="items[]" value="Cerveja gr??tis">Cerveja gr??tis</input>
        </div>
        <div class="w-full">
          <input class="mr-3" type="checkbox" name="items[]" value="Open food">Open food</input>
        </div>
        <div class="w-full">
          <input class="mr-3" type="checkbox" name="items[]" value="Brindes">Brindes</input>
        </div>
      </div>
      <input class="mt-2 bg-red-600 text-white px-3 py-2 rounded-sm cursor-pointer hover:text-gray-900" type="submit" value="Editar Evento">
    </form>
  </div>

</div>

@endsection