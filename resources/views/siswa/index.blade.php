<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title></title>
</head>
<body>
    <div class="my-16 mx-8 relative overflow-x-auto shadow-md sm:rounded-lg">
        <a href="/siswa/create" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Add</a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Nisn</th>
                    <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                    <th scope="col" class="px-6 py-3">Foto</th>
                    <th scope="col" class="px-6 py-3">Alamat</th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            @foreach ($siswa as $s)
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center dark:text-white">{{ $s->id }}</th>
                    <td class="px-6 py-4">{{ $s->nama }}</td>
                    <td class="px-6 py-4">{{ $s->nisn }}</td>
                    <td class="px-6 py-4">{{ $s->jenis_kelamin }}</td>
                    <td>
                        <img src="{{ asset('image/'.$s->foto) }}" alt="" style="width: 150px;">
                    </td>
                    <td class="px-6 py-4">{{ $s->alamat}}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="/siswa/{{ $s->id }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form class="font-medium text-blue-600 dark:text-blue-500 hover:underline" action="/siswa/{{ $s->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>