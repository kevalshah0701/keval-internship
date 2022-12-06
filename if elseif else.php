<!DOCTYPE html>
<html lang="en">
<head>

    <title>home</title>
</head>
<body>
<h1>
    welcome {{$name ?? "guest"}}
</h1>

 @if($name == "")
 {{"name is empty"}}

 @elseif ($name == "keval")
 {{"name is correct"}}

 @else
 {{"name is incorrect"}}
@endif

</body>
</html>
