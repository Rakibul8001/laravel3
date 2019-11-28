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
                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top img-top" src="{{asset('images/products/'.'huawei.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">huawei</h5>
                                <p class="card-text">2000 Tk.</p>
                                <a href="#" class="btn btn-outline-warning">Add card</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top img-top" src="{{asset('images/products/'.'blackberry.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">blackberry</h5>
                                <p class="card-text">2000 Tk.</p>
                                <a href="#" class="btn btn-outline-warning">Add card</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top img-top" src="{{asset('images/products/'.'nokia.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">nokia</h5>
                                <p class="card-text">2000 Tk.</p>
                                <a href="#" class="btn btn-outline-warning">Add card</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top img-top" src="{{asset('images/products/'.'huawei.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">huawei</h5>
                                <p class="card-text">2000 Tk.</p>
                                <a href="#" class="btn btn-outline-warning">Add card</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection
