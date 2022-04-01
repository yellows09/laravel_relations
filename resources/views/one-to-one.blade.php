@include('welcome')
@yield('nav')
<h1>one to one example</h1>
@foreach($users as $user)
    <h3><?php echo $user['id']?>)
        name: <?php echo $user['name']?> |
        gender: <?php echo $user['gender']?> |
        age: <?php echo $user['age']?> |
        passport id: <?php echo $user->passport['passport_series']?> |
        country: <?php echo $user->passport['country'] ?></h3>
@endforeach
