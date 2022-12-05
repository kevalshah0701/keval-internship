<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
</head>
<body>

@php
$i = 1;
@endphp

   @while ($i<=10)

   <h2> {{$i}} </h2>

     @php $i++; @endphp
@endwhile

</body>
</html>
