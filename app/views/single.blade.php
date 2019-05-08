@extends('layout')

@section('header')
<a href="{{url('/')}}">Back to overview</a>
<h2>
    {{{$question->id}}}
</h2>
<a href="{{url('questions/'.$question->id.'/edit')}}">
    <span class="glyphicon glyphicon-edit"></span> Edit
</a>
<a href="{{url('questions/'.$question->id.'/delete')}}">
    <span class="glyphicon glyphicon-trash"></span> Delete
</a>
Last edited: {{$question->updated_at}}
@stop

@section('content')
<p>Question Content: {{$question->content}} </p>
<p>
    @if($question->track)
    Track:
    {{link_to('questions/tracks/' . $question->track->name, $question->track->content)}}
    @endif
</p>
@stop

