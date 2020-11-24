@extends('layouts.app')

@section('page_title')
    {{ "Home Page" }}
@endsection

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque a arcu eget pretium. Donec cursus pellentesque risus ac malesuada. Curabitur cursus nunc metus, ut porta ex luctus ac. Nunc id massa eu lorem elementum euismod. Morbi vel tortor ac ipsum aliquam sollicitudin. Suspendisse pulvinar congue suscipit. Suspendisse condimentum, ipsum nec eleifend gravida, erat metus dictum ante, non fermentum quam lorem et turpis. Quisque arcu enim, placerat quis tempor a, viverra id dolor. Mauris interdum accumsan libero a condimentum. Quisque rutrum pharetra arcu non posuere. Suspendisse vitae felis lectus. Praesent ut posuere sem, sit amet rutrum ipsum. Aenean gravida erat fermentum rutrum molestie.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection