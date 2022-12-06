<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
<div class="container">
    @for ($i = 1;$i<=10;$i++)
    @if ($i==5)
        @break
    @endif
        {{$i}}
    @endfor


</div>
</body>

</html>
