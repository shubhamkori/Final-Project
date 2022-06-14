@props(['teet'])



  <div class="flex flex-col items-center justify-center text-center py-4">
    <img class="hidden w-80 mr-6 md:block" src="{{$teet->image ? asset('storage/' . $teet->image) : asset('https://images.unsplash.com/photo-1654707635472-15b150245847?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80')}}" 
    alt=""/>

    <div>
      <h3 class=" left-6">
        <a href="/dashboard">{{$teet->description}}</a>
      </h3>
</div>
  <div class="relative h-16 w-32">
      <h5 class="mt-4 p-2 flex space-x-6 absolute top-0 left-40 h-16 w-16">
        <a class="border border-blue-400 block py-2 px-2 w-full rounded focus:outline-none bg-blue-600 text-white"
         href="{{$teet->id}}/edit">
         Edit</a>
      </h5>

      <div class="relative h-9 w-32 right-28">
      <form method="get" action="{{$teet->id}}">
      @csrf
      <h5 class="mt-2 p-2 flex space-x-6 absolute">
        <button class="border border-blue-400 block py-2 px-2 rounded focus:outline-none bg-blue-300 text-white">
         LIKE</button>
      </h5>     
</form>
</div>
</div>

<form method="POST" action="{{$teet->id}}">
  @csrf
  @method('DELETE')
    <div class="relative h-16 w-32">
      <h5 class="mt-2 p-2 flex space-x-6 absolute top-0 left-40 h-16 w-16 ">
        <button class="border border-blue-400 block py-2 px-2 rounded focus:outline-none bg-red-600 text-white">
         Delete</button>
      </h5>     
   
</form>
</div>
  
