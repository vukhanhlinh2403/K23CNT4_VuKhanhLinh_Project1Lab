<div>
    <h1>this is header component</h1>
    <h2>welcom to, {{$name}}</h2>
        <hr>
    <h2> danh sach fruits</h2>
    <ul>
        @foreach($fruits as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</div>