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
                                        <label class="font-weight-bold text-dark text-2">First Name</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Last Name</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
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
                                href="#collapseTwo">
                                Shipping Address
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="collapse">
                        <div class="card-body">
                            <form action="/" id="frmShippingAddress" method="post">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="pb-3 custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipbillingaddress">
                                            <label class="custom-control-label" for="shipbillingaddress">Ship to billing
                                                address?</label>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">First Name</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Last Name</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
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
                            <table class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">
                                            &nbsp;
                                        </th>
                                        <th class="product-name">
                                            Product
                                        </th>
                                        <th class="product-price">
                                            Price
                                        </th>
                                        <th class="product-quantity">
                                            Quantity
                                        </th>
                                        <th class="product-subtotal">
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_table_item">
                                        <td class="product-thumbnail">
                                            <a href="shop-product-sidebar-left.html">
                                                <img width="100" height="100" alt="" class="img-fluid"
                                                    src="img/demos/product-landing/product-carousel-1.jpg">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            Porto Headphone
                                        </td>
                                        <td class="product-price">
                                            <span class="amount">$350</span>
                                        </td>
                                        <td class="product-quantity">
                                            1
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">$350</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr class="my-5 solid">

                            <h4 class="text-primary">Cart Totals</h4>
                            <table class="cart-totals">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>
                                            <strong class="text-dark">Cart Subtotal</strong>
                                        </th>
                                        <td>
                                            <strong class="text-dark"><span class="amount">$350</span></strong>
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
                                            <strong class="text-dark"><span class="amount">$350</span></strong>
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
                                            <label class="custom-control-label" for="paymentdirectbank">Direct Bank
                                                Transfer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="paymentcheque">
                                            <label class="custom-control-label" for="paymentcheque">Cheque
                                                Payment</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="paymentpaypal">
                                            <label class="custom-control-label" for="paymentpaypal">Paypal</label>
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
            <h4 class="text-primary text-uppercase">Cart Totals</h4>
            <table class="cart-totals">
                <tbody>
                    <tr class="cart-subtotal">
                        <th>
                            <strong class="text-dark">Cart Subtotal</strong>
                        </th>
                        <td>
                            <strong class="text-dark"><span class="amount">$350</span></strong>
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
                            <strong class="text-dark"><span class="amount">$350</span></strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection