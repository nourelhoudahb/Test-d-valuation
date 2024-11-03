

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="css/addemployee.css"> -->
    @vite([ 'resources/css/addArticle.css', 'resources/js/app.js']) 

</head>
<body>


    <form action="{{route('Article.store')}}" method="post">
    @csrf 
    @method('post')
        <div class="container">
            <div class="col">

                <h3 class="title">Ajouter article</h3>

                <div class="inputBox">
                    <span>Titre :</span>
                    <input type="text" name="title" placeholder="...">
                </div>
                <div class="inputBox">
                    <span>Description :</span>
                    <input type="text" name="content" placeholder="...">
                </div>
                <input type="submit" name="submit" value="Ajouter" class="submit-btn">
            </div>
            </div>
         
           
           
         

    </form>

</div>    
    
</body>
</html>