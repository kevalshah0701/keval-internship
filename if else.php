<!DOCTYPE html>
<html lang="en">
<head>

    <title>home</title>
</head>
<body>
<h1>
    welcome {{$name ?? "guest"}}
</h1>

 @if($name != "")
 {{"name is not empty"}}
 @else
 {{"name is empty"}}
@endif

</body>
</html>
