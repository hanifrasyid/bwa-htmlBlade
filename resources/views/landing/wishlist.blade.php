@extends('layouts.front')
@section('title', 'My Wishlist')
@section('content')
<!-- isi dengan konten dari route/page tersebut -->
@include('components.navbar')
<section class="best-items">
    <div class="container">
        <div class="row text-center mb-50">
            <div class="col-lg-12">
                <img src="{{ asset('images/ic_best.svg') }}" height="42" alt="" class="mb-16">
                <h3 class="big-header">
                    My Wishlist
                </h3>
                <p class="paragraph">
                    Dolor space comfortable moments
                </p>
            </div>
        </div>
        <div class="row">
            <!-- anggap mengambil data dari DB tabel best of best -->
            @component('components.house_card')
            @slot('cover', 'images/house2.png')
            @slot('title', 'Brown House')
            @slot('price', '888')
            @slot('location', 'Bogor')
            @endcomponent
        </div>
    </div>
</section>
@endsection
@push('after-scripts')
    <script src="{{ asset('js/premium.js') }}"></script>
@endpush