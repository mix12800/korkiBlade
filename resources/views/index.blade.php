<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
    @auth
    <x-header />

    <x-orders />
    @else
    <x-auth />
    @endauth

    <x-script />
</body>

</html>