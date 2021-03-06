@extends('admin.layout.index_head')
@extends('admin.layout.index_header')


@section('content')
    <style type="text/css">

        .menu-title {
            margin-left: 10px;
            color: #525252;
        }

        .am-g span {
            width: 80px;
            display: inline-block;
        }

        .am-g >p {
            margin-left: 10px;
        }

    </style>

    <div class="am-g container">

        <div class="menu-title">
            <h3>订单详情</h3>
        </div>

        <p><span>订单编号: </span>{{$order->order_id2}}</p>
        <p><span for="">订单总计: </span>{{$order->order_price}}￥</p>
        <p><span for="">下单人: </span>{{$order->order_username}}</p>
        <p><span for="">下单时间: </span>{{$order->order_addtime}}</p>
        <p><span for="">位置说明: </span>{{$order->order_text}}</p>

        <p>菜单列表:</p>
        <div class="am-scrollable-horizontal">
            <table class="am-table am-table-bordered am-table-striped am-text-nowrap">
                <thead>
                <tr>
                    <th>菜名</th>
                    <th>分类</th>
                    <th>单价(￥)</th>
                    <th>数量</th>
                    {{--<th>状态</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($order->carts as $cart)
                    <tr>
                        <td>{{$cart->food->food_name}}</td>
                        <td>{{$cart->food->foodsType->foodtype_name}}</td>
                        <td>{{$cart->food->food_price}}</td>
                        <td>{{$cart->cart_count}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection


