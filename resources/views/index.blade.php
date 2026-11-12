<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
    @auth
    <x-header />

    @if (Auth::user()->role == 'admin')
    <x-orders :orders="$orders" />
    @else
    <x-my-orders :myOrders="$myOrders" />
    @endif

    @else
    <x-auth />
    @endauth

    <x-script />
</body>

</html>