@extends('layouts.app')
@section('content')
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Hello, {{ Auth::user()->name }}</h4>
                        <p>Welcome to Crix Mobile Wallet</p>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">

            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Transactions</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0">
                            <ul class="list-group list-unstyled">
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <div class="transaction-date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">MAR</small><span class="h6">28</span>
                                        </div>

                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Jonathan</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">SIP Purchase</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            +500<br />
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="transaction-date d-flex w-100">
                                        <div class="date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">APR</small><span class="h6">12</span>
                                        </div>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">kelvin</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Mutual Funds</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-danger">
                                            -500<br />
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <div class="transaction-date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">MAY</small><span class="h6">13</span>
                                        </div>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Peter</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Equity</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-danger">
                                            +500<br />
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <div class="transaction-date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">JUN</small><span class="h6">23</span>
                                        </div>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Ray Sin</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Commodity</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-danger">
                                            +500<br />
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <div class="transaction-date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">JUL</small><span class="h6">16</span>
                                        </div>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Abexon Dixon</span><br />
                                            <p class="mb-0 font-w-500 tx-s-12">Real Estate</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            +500<br />
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 zoom">
                                    <div class="media d-flex w-100">
                                        <div class="transaction-date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">AUG</small><span class="h6">28</span>
                                        </div>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Nathan S. Johnson</span><br />
                                            <p class="mb-0 font-w-500 tx-s-12">Switch Out</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            +500<br />
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4  mt-3">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body p-4 text-center">

                            <div class="my-auto">
                                <img src="/dist/images/wallet.png" alt="author" width="48" class="my-auto">
                            </div>
                            <div class="content my-3">
                                <span class="mb-0 font-w-600 h5">CRIX WALLET</span><br>
                                <p class="mb-0 font-w-500 tx-s-12">
                                    Crix wallet allows you save, transfer, withdraw and pay for utilities.
                                </p>
                            </div>
                            <div class="card bg-primary my-3 text-left">
                                <div class="card-body">
                                    <div class="d-flex px-0 px-lg-2 py-2 align-self-center">
                                        <i class="fas fa-dollar-sign card-liner-icon mt-2 text-white"></i>
                                        <div class="card-liner-content">
                                            <h2 class="card-liner-title text-white">CRX
                                                {{ number_format(Auth::user()->wallet->balance) }}</h2>
                                            <h6 class="card-liner-subtitle text-white">Crix Balance</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-auto">
                                <a data-toggle="modal" data-target="#fund-modal" href="#"
                                    class="btn btn-outline-primary font-w-600 my-auto text-nowrap">Fund Wallet</a>
                            </div>



                            <ul class="list-inline my-3">
                                <li class="list-inline-item"><i class="fab fa-cc-mastercard h1 color-primary"></i></li>
                                <li class="list-inline-item"><i class="fab fa-cc-visa h1 color-primary"></i></li>
                                <li class="list-inline-item"><i class="fab fa-cc-paypal h1 color-primary"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Accounts & Cards</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0">
                            <ul class="list-group list-unstyled">
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <i class="fab fa-cc-mastercard h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Master Card</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">1234 1234 1234 1234</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            Active
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="transaction-date d-flex w-100">
                                        <i class="fab fa-cc-visa h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Visa Card</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">1234 1234 1234 1234</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-danger">
                                            Disable
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <i class="fab fa-cc-paypal h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Paypal</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">test@example.com</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            Active
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom">
                                    <div class="media d-flex w-100">
                                        <i class="fab fa-cc-amazon-pay h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Amazon Pay</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">amazon-pay@abc</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            Active
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <i class="fab fa-cc-stripe h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Stripe Payment</span><br />
                                            <p class="mb-0 font-w-500 tx-s-12">1234 1234 1234 1234</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            Active
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 zoom">
                                    <div class="media d-flex w-100">
                                        <i class="fab fa-cc-discover h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Discover Card</span><br />
                                            <p class="mb-0 font-w-500 tx-s-12">1234 1234 1234 1234</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-danger">
                                            Disable
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END: Card DATA-->
    </div>
</main>

<div class="modal fade" id="fund-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="modal-title" id="exampleModalLongTitle1">Fund Wallet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('wallet.fund') }}" method="post">@csrf
                    @foreach ($errors->all() as $err)
                    <p class="text-center text-danger">{{ $err }}</p>
                    @endforeach
                    <div class="form-group">
                        <label for="">Amount</label>
                        <input type="number" name="amount" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <input type="hidden" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
                    <input type="hidden" name="orderID" value="345">
                    <input type="hidden" name="quantity" value="100">
                    <input type="hidden" name="currency" value="NGN">
                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}">
                    {{-- For other necessary things you want to add to your payload. it is optional though --}}
                    <input type="text" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                    <input type="hidden" name="callback_url" value="{{route('wallet.callback')}}">




                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Continue</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
