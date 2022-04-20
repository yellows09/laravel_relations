@include('welcome')
@yield('nav')
<h1>one to one example</h1>
{{--@foreach($users as $user)--}}
{{--    <h3><?php echo $user['id']?>)--}}
{{--        name: <?php echo $user['name']?> |--}}
{{--        gender: <?php echo $user['gender']?> |--}}
{{--        age: <?php echo $user['age']?> |--}}
{{--        passport id: <?php echo $user->passport['passport_series']?> |--}}
{{--        country: <?php echo $user->passport['country'] ?></h3>--}}
{{--@endforeach--}}
<div id="topSide"></div>
{{--<h1>one to one example</h1>--}}
<br>
<p id="table1">
<table>
    <tr>
        <th> Name</th>
        <th> Gender</th>
        <th> Age</th>
        <th> Passport ID</th>
        <th> Country</th>
    </tr>
@foreach($users as $user)
        <tr>
            <td> <?php echo $user['name']?> </td>
            <td><?php echo $user['gender']?></td>
            <td><?php echo $user['age']?> </td>
            <td><?php echo $user->passport['passport_series']?></td>
            <td><?php echo $user->passport['country'] ?></td>
        </tr>
@endforeach
        <tr>
        <tr id="gender"></tr>
        <tr id="age"></tr>
        <tr id="passportId"></tr>
        <tr id="country"></tr>
        </tr>
    </table>
    </p>
