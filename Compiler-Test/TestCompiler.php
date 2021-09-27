<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="TestCompiler.css">
    <title>Document</title>
</head>
<body>
    <head>
        <div class="editor-menu">
        <div class="logo"> <a href="../index.php">
            <img src="../images/logo2.png" alt=""></a></div>
            <div class="title">Try it Yourself</div>
        <div class="theme">
           
        </div>
    </div>
</head>

    <div class="container">
        <div class="left">
            <div class="buttons">
                <button class="btn btn-dark">Dark Mode</button>
                <button class="btn btn-light">Light Mode</button>
                <button class="btn btn-run"><i class="fa fa-play"></i>  Run</button>
                <div class="live">
                    <input type="checkbox" id="live">
                    <label for="live">Live</label>
                </div></div>
           
           
            <div class="editor" contenteditable="">
                Write Your Code...
            </div>
        </div>
       
        <div class="right">
            <div class="edit">Preview</div>
            <iframe src="" frameborder="0" class="iframe"  ></iframe>
        </div>
    </div>

    <script src="TestCompiler.js"></script>
</body>
</html>