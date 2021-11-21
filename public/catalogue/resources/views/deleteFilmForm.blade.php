<!doctype html>
<html lang="fr">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> update film</title>
    </head>

    <body>
        <form id="deleteFilm" action="http://localhost:8082/catalogue/public/index.php/deleteFilm" method="POST">
            <div class="form-group">
                <label for="id">id</label>
                <input type="text" class="form-control" name="id" />
            </div>
            <div>
                <label for="name">name: </label>
                <input id="name" name="name" type="text">
            </div>
            <div>
                <label for="director">director: </label>
                <input id="director" name="director" type="text">
            </div>
            <div>
                <label for="category">category: </label>
                <select id="category" name="category">
                    <option value=''>-------------</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>

            </div>
            <input type="submit" value="delete">
        </form>
    </body>
