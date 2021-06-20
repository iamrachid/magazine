<?php include('header.php'); ?>
<div style="min-height:calc(100vh - 115px)" class="p-5 d-flex justify-content-center align-content-center">
    <div class="card">
        <div class="px-4">
            <div class="d-flex justify-content-evenly py-3"> <span><i class="fa fa-check-circle-o"></i> Shopping bag</span> <span><i class="fa fa-check-circle-o"></i> Order details</span> <span id="payment"><span id="three">3</span>Payment</span> </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="p-4 border">
                        <div class="d-flex justify-content-between">
                            <span class="fs-m">Payment</span>
                            <div class="icons">
                                <img src="https://img.icons8.com/color/48/000000/visa.png" class="w-2" />
                                <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" class="w-2" />
                                <img src="https://img.icons8.com/color/48/000000/maestro.png" class="w-2" />
                            </div>
                        </div>
                        <form> <span>Cardholder's name:</span>
                        <input placeholder="Linda Williams" class="form-control">
                        <span>Card Number:</span>
                        <input placeholder="0125 6780 4567 9909" class="form-control">
                            <div class="row">
                                <div class="col-4"><span>Expiry date:</span>
                                    <input placeholder="YY/MM" class="form-control">
                                </div>
                                <div class="col-4">
                                    <span>CVV:</span>
                                    <input id="cvv" class="form-control">
                                </div>
                            </div> <input type="checkbox" id="save_card" class="align-left"> <label for="save_card">Save card details to wallet</label>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="p-4 border">
                        <div class="header">Order Summary</div>
                        <p>2 items</p>
                        <div class="row item">
                            <div class="col-4 align-self-center"><img class="img-fluid" src="https://i.imgur.com/79M6pU0.png"></div>
                            <div class="col-8">
                                <div class="row"><b>$ 26.99</b></div>
                                <div class="row text-muted">Be Legandary Lipstick-Nude rose</div>
                                <div class="row">Qty:1</div>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-4 align-self-center"><img class="img-fluid" src="https://i.imgur.com/Ew8NzKr.jpg"></div>
                            <div class="col-8">
                                <div class="row"><b>$ 19.99</b></div>
                                <div class="row text-muted">Be Legandary Lipstick-Sheer Navy Cream</div>
                                <div class="row">Qty:1</div>
                            </div>
                        </div>
                        <hr>
                        <div class="row lower">
                            <div class="col text-left">Subtotal</div>
                            <div class="col text-right">$ 46.98</div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left">Delivery</div>
                            <div class="col text-right">Free</div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left"><b>Total to pay</b></div>
                            <div class="col text-right"><b>$ 46.98</b></div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left"><a href="#"><u>Add promo code</u></a></div>
                        </div> <button class="btn">Place order</button>
                        <p class="text-muted text-center">Complimentary Shipping & Returns</p>
                    </div>
                </div>
            </div>
        </div>
        <div> </div>
    </div>
</div>
<?php include('footer.php'); ?>