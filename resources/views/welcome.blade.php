<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: skyblue;
            height:100vh;
        }

        h1 {
            text-align:center;
            color:red;
        }
        ul{
            list-style: none;
        }
    </style>
</head>
<body style="background: skyblue; height:100vh">
    
    <h1>Todo Application</h1>

    <div>
        <form action="{{route('saveTodo')}}" method="post">
            @csrf
            <input type="text" name="todo">
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>