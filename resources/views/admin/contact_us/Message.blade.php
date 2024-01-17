<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
 
<body>
    <div class="container">
        <div class="row py-5 my-5 mx-5 px-5">
           
              
            {{-- @dd($message); --}}
                <div class="row">

                   <label for="">message from : </label> <h3>{{$data->name}}</h3>
                   <label for="">Your email is  : </label> <h3>{{$data->email}}</h3>
                   <label for=""> Message content is   : </label> <h3>{{$data->message}}</h3>
                </div>
        </div>
    </div>
</body>
 
</html>