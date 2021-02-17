@extends('layout.base')
@section('body')
@php
$i = 1;
++$i;
@endphp



<div class="container">
<div class="card">
    <div class="card-header">
        <h3>Usuario:</h3>
    </div>
    <div class="card-body">
        Juanita Reyes
    </div>
    <div class="card-footer">
        {{ $i }}
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3>Usuario:</h3>
    </div>
    <div class="card-body">
        Carlos Suarez
    </div>
    <div class="card-footer row">
        @for ($i = 0; $i <= 10; $i++)
            <div class="alert alert-info col-2">
                {{ $i }}
            </div>
        @endfor
    </div>
</div>
</div>
@endsection
    