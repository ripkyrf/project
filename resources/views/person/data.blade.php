<h1> Nama-nama Mahasiswa </h1>
<ol>
    @if($names)
        @foreach($names as $name)
            <li>    {{$name}}   </li>
        @endforeach
    @endif
</ol>