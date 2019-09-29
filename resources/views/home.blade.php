@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam modi deleniti deserunt officia! Natus voluptates dolor hic eligendi culpa quas, architecto quasi at beatae. Molestias quia adipisci totam omnis earum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa voluptatum reprehenderit vero beatae nesciunt sapiente veritatis facilis eius saepe magnam! Enim eveniet magnam ad sint sed earum quos molestiae maxime.</p>
@endsection

@section('sidebar')
    @parent
    <p>this is appended to the sidebar</p>
@endsection