<!Doctype html>
<html>
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
        <title>Tweeter Editing</title>
    </head>
    <body class="bg-gray-100">
        <div>

       <div class="flex flex-col items-center justify-center text-center py-10">
            <img class="w-48" src="https://pngmind.com/wp-content/uploads/2019/08/Twitter-Logo-Png-Transparent-Background.jpg" alt="">
        </div>

        <form action="/teet/{{$teet->id}}" method="POST" enctype="multipart/form-data" class="px-4 my-32 max-w-3xl mx-auto space-y-6">
            @csrf
            @method('PUT')

            <div class="flex flex-col items-center justify-center text-center">
                <h1 class="font-semibold text-7xl">Tweet Edit</h1>
            </div>

       <div class="flex space-x-4">

        <div class="w-1/2">
            <label for="photo">
                Image Edit
            </label>
            <input
                type="file"
                class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none"
                name="image"/>
                {{$teet->image}}
        </div>
      </div>

        <div class="mb-6">
            <label
                for="description">
                 Description Edit
            </label>
            <textarea
                class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none"
                name="description"
                rows="10"
                placeholder="Include tasks, requirements, salary, etc">
                {{$teet->description}}
            </textarea>
        </div>

    <div class="w-1/2">
        <button type="submit"
            class="border border-blue-400 block py-2 px-4 w-full rounded focus:outline-none bg-blue-600 text-white text-lg">
            Tweet update 
        </button>
        <br>

        <a href="/dashboard" class="text-white text-lg bg-green-500 py-2 px-4 w-full rounded focus:outline-none"><-Back </a>

    </div>
        </form>
        </div>
    </body>
</html>