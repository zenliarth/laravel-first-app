@extends ('layouts.main')

@section('title', 'Contact')

@section('content')

<div class="w-full bg-gray-700 flex flex-wrap">
    <!-- Login Section -->
    <div class="w-full flex flex-col">
      <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
        <form class="flex flex-col pt-3 md:pt-8" onsubmit="event.preventDefault();">
          <div class="flex flex-col pt-4">
            <label for="email" class="text-lg">Email</label>
            <input type="email" id="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
          </div>

          <div class="flex flex-col pt-4">
            <label for="password" class="text-lg">Password</label>
            <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
          </div>

          <input type="submit" value="Log In" class="bg-gray-900 rounded text-white font-bold text-lg hover:bg-gray-800 cursor-pointer p-2 mt-8">
        </form>
        <div class="text-center pt-12 pb-12">
          <p class=' text-gray-900'>Don't have an account? <a href="register.html" class="underline font-semibold">Register here.</a></p>
        </div>
      </div>
    </div>
</div>

@endsection