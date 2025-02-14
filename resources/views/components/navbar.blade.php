     <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
         <div class="container-fluid">
             <a class="navbar-brand" href="{{route('hello')}}">laravel</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="{{route('articles')}}">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('articles')}}">Articles</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('article.page.create')}}">Add article</a>
                     </li>
                 </ul>

                    <div class="d-flex">
                        <a href="{{route('login.form')}}" class="btn btn-outline-success m-lg-1">Login</a>
                        <a href="{{route('register.form')}}" class="btn btn-outline-primary m-lg-1">Register</a>
                        {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                    </div>

             </div>
         </div>
     </nav>
