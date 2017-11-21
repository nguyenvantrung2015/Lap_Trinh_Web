@extends('layouts.menu')
@section('style')
    {{ HTML::style('css/sites/profile.css') }}
@endsection

@section('content')
    <div class="nav-icon">
        <a href="#" class="navicon"></a>
        <div class="toggle">
            <ul class="toggle-menu">
                @if(Auth::user()->level == 1)
                    <li><a class="active" href="#">ADMIN</a></li>
                @endif
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('menu')}}">Menu</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Contact</a></li>
                <li><a class="active" href="#">Profile</a></li>
                <li>
                    <a href="javascript:void(0)" id="logout-1">
                        Logout
                    </a>
                    {!! Form::open(['role'=>'form', 'route'=> 'logout', 'method'=>'POST', 'id'=>'logout-form']) !!}
                    {{ csrf_field() }}
                    {!! Form::close() !!}
                </li>
            </ul>
        </div>
    </div>
    @include('sections.menu.header')

    <div class="container bootstrap snippet background_user user-profile">
        <div class="col-sm-3 sidebar">
            <div class="row fix-profile-bottom">
                <div class="img-avata-icon">
                    @if((Auth::user()->avatar) != null)
                        <img src="{!! Auth::user()->avatar !!}" class="img-responsive"/>
                    @else
                        <img src="{!! asset('/img/avata.png') !!}" class="img-responsive"/>
                    @endif
                    <div class="edit-icon">
                        <a href="javascript:void(0)" data-toggle="modal"
                           data-target="#modalAvatar">
                            <i class="fa fa-pencil"></i> {{ __('edit') }}
                        </a>
                    </div>
                </div><!--col-md-4 col-sm-4 col-xs-12 close-->
                <div class="fullname">
                    <h2>{!! Auth::user()->name !!}</h2>
                </div>
            </div>
            <div class="row"><!--left col-->
                <ul class="list-group list-info">
                    <li class="list-group-item text-center pull">Profile</li>
                    <li class="list-group-item text-right">
                        <span class="pull-left"><strong>Email:</strong></span> {!! Auth::user()->email !!}
                    </li>
                    <li class="list-group-item text-right">
                        <span class="pull-left"><strong>Phone :</strong></span> {!! Auth::user()->phone !!}
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Birthday:</strong>
                        </span> {!! Auth::user()->date_of_birth !!}
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Address:</strong>
                        </span> {!! Auth::user()->address !!}
                    </li>
                </ul>
            </div><!--/col-3-->
            <div class="row edit">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#modalProfile">
                    (<i class="fa fa-pencil"></i> {{ __('Edit Profile') }})
                </a>
                <a href="javascript:void(0)" class="text-center" data-toggle="modal" data-target="#modalProfile">
                    (<i class="fa fa-pencil"></i> {{ __('Edit Password') }})
                </a>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="title-thongtindonhang">Thong tin don hang</div>
            <hr>
            <div class="row">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#order-doing" data-toggle="tab">Các đơn hàng đang thực hiện</a></li>
                    <li><a href="#order-done" data-toggle="tab">Các đơn hàng đã đặt</a></li>
                    <li><a href="#order-cancel" data-toggle="tab">Các đơn hàng đã hủy</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="order-doing">
                        <div class="table-responsive status-order">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center weight-title">Thời gian</th>
                                        <th class="text-center weight-title">Tên hàng</th>
                                        <th class="text-center weight-title">Số lượng</th>
                                        <th class="text-center weight-title">Đơn giá</th>
                                        <th class="text-center weight-title">Thành tiền</th>
                                        <th class="text-center weight-title" colspan="2">Action </th>
                                    </tr>
                                </thead>
                                <tbody id="items">
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button type="button" class="update btn btn-warning btn-sm">Huy</button>
                                        </td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button type="button" class="update btn btn-warning btn-sm">Huy</button>
                                        </td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button type="button" class="update btn btn-warning btn-sm">Huy</button>
                                        </td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button type="button" class="update btn btn-warning btn-sm">Huy</button>
                                        </td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button type="button" class="update btn btn-warning btn-sm">Huy</button>
                                        </td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button type="button" class="update btn btn-warning btn-sm">Huy</button>
                                        </td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button type="button" class="update btn btn-warning btn-sm">Huy</button>
                                        </td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-4 text-center">
                                    <ul class="pagination" id="myPager"></ul>
                                </div>
                            </div>
                        </div><!--/table-resp-->
                        <hr>
                    </div><!--/tab-pane-->
                    <div class="tab-pane" id="order-done">
                        <div class="table-responsive status-order">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center weight-title">Thời gian</th>
                                    <th class="text-center weight-title">Tên hàng</th>
                                    <th class="text-center weight-title">Số lượng</th>
                                    <th class="text-center weight-title">Đơn giá</th>
                                    <th class="text-center weight-title">Thành tiền</th>
                                    <th class="text-center weight-title" colspan="2">Action </th>
                                </tr>
                                </thead>
                                <tbody id="items">
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{!! $order->create_at !!}</td>
                                        <td class="text-center">{!! $productDetail->name !!}</td>
                                        <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                        <td class="text-center">{!! $productDetail->price !!}</td>
                                        <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                        <td>
                                            <button data-toggle="collapse" data-target="#demo1"
                                                    class="accordion-toggle btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-4 text-center">
                                    <ul class="pagination" id="myPager"></ul>
                                </div>
                            </div>
                        </div><!--/table-resp-->
                        <hr>
                    </div><!--/tab-pane-->
                    <div class="tab-pane" id="order-cancel">
                        <div class="table-responsive status-order">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center weight-title">Thời gian</th>
                                    <th class="text-center weight-title">Tên hàng</th>
                                    <th class="text-center weight-title">Số lượng</th>
                                    <th class="text-center weight-title">Đơn giá</th>
                                    <th class="text-center weight-title">Thành tiền</th>
                                    <th class="text-center weight-title" colspan="2">Action </th>
                                </tr>
                                </thead>
                                <tbody id="items">
                                <tr>
                                    <td class="text-center">{!! $order->create_at !!}</td>
                                    <td class="text-center">{!! $productDetail->name !!}</td>
                                    <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                    <td class="text-center">{!! $productDetail->price !!}</td>
                                    <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                    <td>
                                        <button type="button" class="update btn btn-warning btn-sm">Đặt Lại</button>
                                    </td>
                                    <td>
                                        <button data-toggle="collapse" data-target="#demo1"
                                                class="accordion-toggle btn btn-default btn-xs">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">{!! $order->create_at !!}</td>
                                    <td class="text-center">{!! $productDetail->name !!}</td>
                                    <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                    <td class="text-center">{!! $productDetail->price !!}</td>
                                    <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                    <td>
                                        <button type="button" class="update btn btn-warning btn-sm">Đặt Lại</button>
                                    </td>
                                    <td>
                                        <button data-toggle="collapse" data-target="#demo1"
                                                class="accordion-toggle btn btn-default btn-xs">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">{!! $order->create_at !!}</td>
                                    <td class="text-center">{!! $productDetail->name !!}</td>
                                    <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                    <td class="text-center">{!! $productDetail->price !!}</td>
                                    <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                    <td>
                                        <button type="button" class="update btn btn-warning btn-sm">Đặt Lại</button>
                                    </td>
                                    <td>
                                        <button data-toggle="collapse" data-target="#demo1"
                                                class="accordion-toggle btn btn-default btn-xs">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">{!! $order->create_at !!}</td>
                                    <td class="text-center">{!! $productDetail->name !!}</td>
                                    <td class="text-center">{!! $orderDetail->quantity !!}</td>
                                    <td class="text-center">{!! $productDetail->price !!}</td>
                                    <td class="text-center">{!! $productDetail->price*$orderDetail->quantity !!}</td>
                                    <td>
                                        <button type="button" class="update btn btn-warning btn-sm">Đặt Lại</button>
                                    </td>
                                    <td>
                                        <button data-toggle="collapse" data-target="#demo1"
                                                class="accordion-toggle btn btn-default btn-xs">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="12" class="hiddenRow">
                                        <div class="accordian-body collapse" id="demo1">

                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-4 text-center">
                                    <ul class="pagination" id="myPager"></ul>
                                </div>
                            </div>
                        </div><!--/table-resp-->
                        <hr>
                    </div>
                </div><!--/tab-pane-->
            </div><!--/tab-content-->
        </div><!--/col-9-->
    </div><!--/row-->

    @include('sections.menu.footer')
@endsection

@section('script')
    {{ HTML::script('js/sites/homepage.js') }}
@endsection

