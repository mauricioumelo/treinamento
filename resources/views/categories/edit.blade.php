<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        {{-- <div class="row">
            <div class="offset-md-10 col-md-2">
                <a href="#"><button class="btn tbn-secondary w-100 mt-3">+ Novo</button></a>
            </div>
        </div> --}}
        <h1 class="mb-4">Editar categorias</h1>
        <div class="row">
            <div class="col-12">
                <form method="PUT" action="{{route('app.categories.update', $category->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="categoryName" class="form-label">Nome da categoria</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="name" 
                                    value="{{old('name', $category->name)}}" 
                                    id="categoryName">
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-around">
                            <a href="{{ route('app.categories.index') }}" class="btn btn-secondary w-25">Voltar</a>
                            <button type="submit" class="btn btn-primary w-25">Salvar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</html>