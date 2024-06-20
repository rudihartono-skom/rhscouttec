@extends('layouts.main')
@section('title')
    Home
@endsection
@section('content')
    <section class="hero">
        <main class="content">
            <h1>Cetak Kebutuhan Dokumen Anda Disini</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, blanditiis.</p>
            <a href="/product" class="btn">Pesan Sekarang</a>
        </main>
    </section>

    <section class="about container">
        <h2 class="text-center mt-5 fw-bold">About Us</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <img src="{{ asset('images/bghero.png') }}" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <p class="justype">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem quis eos incidunt
                    commodi cum obcaecati facilis consectetur animi dignissimos reprehenderit. Nobis necessitatibus esse
                    quidem corporis odio ea non dolorum veniam dolorem in quibusdam pariatur animi, ipsam neque aperiam
                    repellat obcaecati assumenda. Necessitatibus, error placeat quasi reprehenderit velit id libero magnam.
                </p>
            </div>
        </div>
    </section>
    <section class="best-product py-4 mt-5 bg-warning-subtle">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Best Product</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/20210522_190017.jpg') }}" class="card-img-top" height="300px" alt="...">
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold">-- Gantungan Kunci --</h3>
                            <p class="fw-bold fs-5 text-danger">Rp. 3.250</p>
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/20211207_152346.jpg') }}" class="card-img-top" height="300px" alt="...">
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold">-- Badge Id Card --</h3>
                            <p class="fw-bold fs-5 text-danger">Rp. 5.250</p>
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
