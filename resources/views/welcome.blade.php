<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5
    ">
        <div>
                    <h1>Create File</h1>

        <a href="/create" class="btn btn-success btn-sm">Create</a> 
         <a href="/delete" class="btn btn-danger btn-sm">Delete</a>
        </div>

   <div class="row mt-5">
       <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
           <div class="form-group mb-4">
               <input type="file" class="form-control" name="upload">
           </div>
           <button type="submit" name="submit" class="btn btn-success btn-sm">Upload</button>
       </form>
   </div>

   <div class="row mt-5 mb-5">
       <img src="{{asset('images/new_name/new_girl.jpg')}}" alt="" class="img-fluid img-thumbnail">
   </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>