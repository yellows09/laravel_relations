@include('welcome')
@yield('nav')
<h1>many to many example</h1>
{{--@dd($likes)--}}
@foreach($likes as $like)
    @foreach($like->users as $user)
        Юзер : <b><?php echo $user['account_username']?></b>
        Поставил лайк на видео: <b><?php echo $like['video_title']?></b>
        <br>----------------------------------------------------- <br>
    @endforeach
@endforeach
