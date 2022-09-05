@extends('layouts.main')

@section('container')
    {{-- @include('sistem.create') --}}

    <h1>Prediksi Harga Ikan Koi</h1>
    <form action="/harga" method="post">
        @csrf
        <div class="mb-3">
            <label for="category" class="form-label">Jenis Ikan</label>
            <select class="form-select" name="jenis">
                <option value="Goromo">Goromo</option>
                <option value="Kohaku">Kohaku</option>
                <option value="Sanke">Sanke</option>
                <option value="Tancho">Tancho</option>
                <option value="Shiro">Shiro</option>
                <option value="Showa">Showa</option>
                <option value="Utsuri">Utsuri</option>
                <option value="Shusui">Shusui</option>
                <option value="Chagoi">Chagoi</option>
                <option value="Platinum">Platinum</option>
            </select>
            <label for="category" class="form-label">Ukuran</label>
            <select class="form-select" name="ukuran">
                @for ($i = 11; $i <= 50; $i++)
                    <option value={{ $i }}> {{ $i }}</option>
                @endfor
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Harga</button>
    </form>

    @if (session('harga'))
        <h1>{{ session()->get('harga') }}</h1>
    @endif

    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Jenis Ikan Yang Paling Banyak diminati</h1>
                </div>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </main>
        </div>
    </div>
@endsection
