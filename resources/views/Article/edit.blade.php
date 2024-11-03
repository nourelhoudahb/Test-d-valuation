

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite([ 'resources/css/addArticle.css', 'resources/js/app.js']) 

</head>
<body>

    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <form action="{{route('Article.update', ['articles' => $articles->id] )}}" method="post">
    @csrf 
    @method('put')
        <div class="container">
            <div class="col">

                <h3 class="title">Edit article</h3>

                <div class="inputBox">
                    <span>Titre :</span>
                    <input type="text" name="title" placeholder="..."  value="{{$articles->title}}" >
                </div>
                <div class="inputBox">
                    <span>Description :</span>
                    <input type="text" name="content" placeholder="..." value="{{$articles->content}}">
                </div>
                <input type="submit" name="submit" value="UpDate" class="submit-btn">
            </div>
            </div>
         
           
           
         

    </form>

</div>    
    
</body>
</html>