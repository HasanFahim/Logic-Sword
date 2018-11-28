@extends('layouts.app')

@section('contant')
    <!-- {{-- --- Header ------ --}} -->
    @include('ex_adder.header')


    <!-- -- About Part -- -->
    @include('ex_adder.about')



    <!-- Services -->
    @include('ex_adder.services')


    <!-- Team -->
    @include('ex_adder.team')


    <!-- Contact -->
    @include('ex_adder.contact')

@endsection