<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form action="/articles" method="post">
         @csrf
         <p>
             <label for="title">タイトル</label><br>
             <input type="text" name="title" value="{{ old('title') }}">
         </p>
         <p>
             <label for="body">本文</label><br>
             <textarea name="body" class="body">{{ old('body') }}</textarea>
         </p>

         <input type="submit" value="新規論文投稿">
     </form>
</body>
</html>
