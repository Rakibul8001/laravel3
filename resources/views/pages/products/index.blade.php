@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-3">
            <div class="margin-top">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="content-top">
                <div class="row">

                    @foreach( $products as $product)
                        <div class="col-md-3">
                            <div class="card">
                                @php
                                    $i=1;
                                @endphp
                                @foreach($product->images as $image)
                                    @if ($i>0)
                                        <img class="card-img-top feature-img" src="{{asset('images/products/product/'.$image->image)}}" alt="Card image" style="max-height: 200">
                                    @endif

                                    @php
                                        $i--;
                                    @endphp
                                    @endforeach
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            {{$product->title}}
                                        </h4>
                                        <p class="card-text">{{$product->description}}</p>
                                        <p class="card-text">{{$product->price}}</p>
                                        <a href="#" class="btn btn-warning">Details</a>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
