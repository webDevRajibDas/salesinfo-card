@extends('frontend.layouts.app')

@section('title')
    Check Out
@endsection
@section('content')




<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
    <div class="container">
        <div class="row">
            <div class="order-2 col-md-8 order-md-1 align-self-center p-static">
                <h1 class="mb-1 font-weight-semibold ls-0 line-height-2 text-7 text-uppercase text-dark">Checkout</h1>
            </div>
            <div class="order-1 col-md-4 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="#">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-3 shop">
    <div class="pb-4 row">
        <div class="col-lg-9">

           <h3> অর্ডার করতে নিচের ফর্মটি সঠিক ভাবে পুরন করুন।</h3>

            <div class="accordion accordion-modern" id="accordion">
                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="m-0 card-title">
                            <a class="accordion-toggle text-uppercase" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseOne">
                                Billing Address
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="collapse show">
                        <div class="card-body">
                            <form action="/" id="frmBillingAddress" method="post">
                               
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Full Name</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Whatsapp Number:</label>
                                        <input type="text" value="" class="form-control" placeholder="018********">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Item</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Full Customize NFC Card</option>
                                            <option>Business Card</option>
                                            <option>Smart Unity Card</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Email</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Company Name</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="font-weight-bold text-dark text-2">Address </label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="font-weight-bold text-dark text-2">City </label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="submit" value="Continue"
                                            class="float-right pl-4 pr-4 mb-2 btn btn-rounded btn-xl btn-light text-2 font-weight-semibold text-uppercase"
                                            data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="m-0 card-title">
                            <a class="accordion-toggle text-uppercase" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseThree">
                                Review &amp; Payment
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="collapse">
                        <div class="card-body">


                            <hr class="my-5 solid">

                            <h4 class="text-primary">Cart Totals</h4>
                            <table class="cart-totals">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>
                                            <strong class="text-dark">Cart Subtotal</strong>
                                        </th>
                                        <td>
                                            <strong class="text-dark"><span class="amount"></span></strong>
                                        </td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>
                                            Shipping
                                        </th>
                                        <td>
                                            Free Shipping<input type="hidden" value="free_shipping" id="shipping_method"
                                                name="shipping_method">
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <th>
                                            <strong class="text-dark">Order Total</strong>
                                        </th>
                                        <td>
                                            <strong class="text-dark"><span class="amount"></span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr class="my-5 solid">

                            <h4 class="text-primary">Payment</h4>

                            <form action="/" id="frmPayment" method="post">
                                <div class="form-row">
                                    <div class="form-group col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="paymentdirectbank">
                                            <label class="custom-control-label" for="paymentdirectbank">Bkash</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="paymentcheque">
                                            <label class="custom-control-label" for="paymentcheque">Rocket</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="paymentpaypal">
                                            <label class="custom-control-label" for="paymentpaypal">Nagad</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="actions-continue">
                <input type="submit" value="Place Order" name="proceed"
                    class="px-5 mt-5 mb-5 btn btn-rounded btn-primary btn-modern font-weight-bold text-uppercase text-3 mb-lg-2">
            </div>

        </div>
        <div class="col-lg-3">
            <h4 class="text-primary text-uppercase">Totals</h4>

        </div>
    </div>
</div>

@endsection