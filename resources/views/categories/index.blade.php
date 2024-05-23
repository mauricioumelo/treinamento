<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <main class="container">
            <div class="row">
                <div class="offset-md-10 col-md-2">
                    <a href="{{ route('app.categories.create') }}"><button class="btn btn-secondary w-100 mt-3">+
                            Novo</button></a>
                </div>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered mt-3">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Active</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->is_active ? 'Ativo' : 'Inativo' }}</td>
                                <td>
                                    <div>
                                        <a class="btn btn-primary"
                                            href="{{ route('app.categories.edit', $category->id) }}">Editar
                                        </a>
                                        
                                         <button 
                                            class="btn btn-danger"
                                            type="submit"
                                            form="delete-{{$category->id}}"
                                        >Excluir
                                        </button>
                                        <form id="delete-{{$category->id}}" 
                                            method="POST" 
                                            action="{{route('app.categories.delete', $category->id)}}"
                                        >
                                            @csrf
                                            @method('delete')
                                        </form>
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

</html>
