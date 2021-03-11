<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
</head>
<style type="text/css">
    .main{
        display: flex;
        justify-content: center;
        height: 100vh;
        position: relative;
    }
    .in{
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }
    .form{
        width: 450px;
        font-size: 16px;
        background: #495C70;
        padding: 30px 30px 15px 30px;
        border: 5px solid #53687E;
    }
    .form input[type=submit],
    .form input[type=text],
    .form label
    {
        font-family: Georgia, "Times New Roman", Times, serif;
        font-size: 16px;
        color: #fff;

    }
    .form label {
        display:block;
        margin-bottom: 10px;
    }
    .form label > span{
        display: inline-block;
        float: left;
        width: 150px;
    }
    .form input[type=text]
    {
        background: transparent;
        border: none;
        border-bottom: 1px dashed #83A4C5;
        width: 275px;
        outline: none;
        padding: 0px 0px 0px 0px;
        font-style: italic;
    }

    .form input[type=text]:focus
    {
        border-bottom: 1px dashed #D9FFA9;
    }

    .form input[type=submit]{
        background: #576E86;
        border: none;
        padding: 8px 10px 8px 10px;
        border-radius: 5px;
        color: #A8BACE;
    }
    .form input[type=submit]:hover{
    background: #394D61;
    }
</style>
<body>
<div class="main">
    <div class="in">
    <form class="form" action="{{ route('add_post') }}" method="post">
    @csrf
        <label for="field1">
        <span>Title: </span><input type="text" name="field1" required="true" />
        </label>
        <label for="field2">
        <span>Body: </span><input type="text" name="field2" required="true" />
        </label>
        <label>
        <span> </span><input type="submit" value="Create Post" />
        </label>
    </form>
    </div>
</div>
</body>
</html>