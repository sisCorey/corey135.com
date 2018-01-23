@extends('common.a-index')

@section('title','后台')

@section('form')

    <form id="create">
    	<input type="text" name="title"><br>
    	<input type="text" name="desc"><br>
    	<input type="text" name="path"><br>
    	<input type="text" name="thumb"><br>
    	<button id="add">添加</button>
    </form>

@endsection