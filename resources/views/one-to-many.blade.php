@include('welcome')
@yield('nav')
<h1>one to many example</h1>
@foreach($directors as $director)
    <h3>
        <?php echo $director['id'] ?>) Director: <?php echo $director['name']?>
        @foreach($director->films as $f)
            <?php echo "Film: ".$f['title']?> <br>
        @endforeach
        <br>-------------------------------------------<br></h3>
@endforeach
