<!DOCTYPE html>
<html lang="en">
<head>

    <title>home</title>
</head>
<body>
<h1>
    welcome {{$name ?? "guest"}}
</h1>
@unless ($name == "keval")
The name is not keval
@endunless
</body>
</html>
