<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title class="text-center text-rose-600">
    IntelliBiblio
</title>
<link rel="stylesheet" href="https://heroicons.com">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    
   <h1>Update Book</h1>

    

    <div>
        <form action="{{ route('update_book', $livre->id) }}" method="Post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Book Title </label>
                <input type="text" name="title" value="{{ $livre ->title }}">
            </div>
            <div>
                <label for="name">Author Name </label>
                <input type="text" name="author_name" value="{{ $livre ->author_name }}">
            </div>
            <div>
                <label for="category">Category </label>
                <select name="category" id="">
                    <option value={{ "$livre->category_id" }}>{{ $livre->category->name }}</option>
                    @foreach ($category as $category)
                        
                    <option value="{{ $category->id  }}">{{ $category->name  }}</option>
                    @endforeach
                </select>
                
            </div>
            <div>
                <label for="description">Description </label>
                <textarea name="description" id="" cols="30" rows="10">
                    {{ $livre ->description }}
                </textarea>
            </div>
            <div>
                <label for="">Curent Book image </label>
                <img  class="object-cover w-full h-48 lg:w-1/3" src="/storage/{{ $livre->book_img }}" alt="{{ $livre->title }}">
            </div>
            <div>
                <label for="">Change Book Image</label>
                <input type="file" name="book_img">
            </div>


            <div>
                <input type="submit" value="Update Book">
            </div>
        </form>
    </div>
    
</body>
</html>