@extends('layouts.admin')
@section('title')
Admin Dasboard
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    <center>
                        <h2>Welcome , {{Auth::user()->name}}</h2>
                        <hr>
                        <h6>Silahkan pilih menu di navbar</h6>
                        <hr>
                        <?php
                        $saldo = \App\Saldo::where('id',1)->first();
                        ?>
                        <h2><i class="far fa-money-bill-alt"></i> Saldo Anda : {{$saldo->saldo}}</h2>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection