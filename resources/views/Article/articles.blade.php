
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['resources/css/style.css', 'resources/css/navigation.css', 'resources/js/app.js']) 
    <title>Articles</title>
</head>
<body>
@yield('content')
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                      <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                      <span class="title"><h2>ADMIN</h2></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Article.articles')}}">
                      <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                      <span class="title">Tableau De Bord</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Article.create')}}">
                      <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                      <span class="title">Add New</span>
                    </a>
                </li>
                
                <li>
                    <a href="login.php">
                      <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                      <span class="title">Deconnexion</span>
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu()"></div>
                <div class="search">
                    <label >
                        <input type="text" placeholder="Search here">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                </div>
        </div>
    <div class="table">
        <div class="table_header">
            <p>Articles</p>
            <div>
                <input type="text" name="" id="" placeholder="articles">
               <a href="{{route('Article.create')}}"> <button class="add_new">+Ajouter</button></a>
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach($articles as $article )
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->content}}</td>
                    <td>
                        <a href="{{route('Article.edit', ['articles' => $article])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('Article.destroy', ['articles' => $article])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
        </div>
</div>
    
</body>
</html>