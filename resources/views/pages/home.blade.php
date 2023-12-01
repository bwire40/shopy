@extends('layouts.main')

@section('content')
    @include('shared.header')


    {{-- products section --}}
    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">


            @include('products.partials.product_nav')

            @include('products.partials.product_card')

        </div>

    </section>

    {{-- about --}}
    @include('pages.partials.about_card')
@endsection
