<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ Route('save') }}" method="post">
                    @csrf
                    <div class="">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Escriba Su Nombre">
                    </div>
                    <div class="">
                        <label for="lastname">Apellido</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Escriba Su Apellido">
                    </div>
                    <div>
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="@">
                    </div>
                    <div>
                        <label for="comment">Comentario</label>
                        <textarea name="comment" id="comment" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
