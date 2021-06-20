<?php include('header.php'); ?>
<div style="min-height:calc(100vh - 115px)" class="p-5 d-flex justify-content-center align-content-center">
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
                <ul class="nav nav-tabs my-2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">register</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Login</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <form method="POST">
                            <label class="label-control">Nom:</label>
                            <input name="nom" placeholder="Linda" class="form-control">
                            <label class="label-control">Prenom:</label>
                            <input name="prenom" placeholder="Williams" class="form-control">
                            <div class="row">
                                <div class="col-6">
                                    <label class="label-control">Age:</label>
                                    <input name="age" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="label-control">Ville:</label>
                                    <input name="ville" class="form-control">
                                </div>
                            </div>
                            <label class="label-control">Adresse:</label>
                            <input name="adresse" class="form-control">
                            <span>Card Number:</span>

                            <input placeholder="999-9999-9999-9909" class="form-control" name="card">
                            <div class="row">
                                <div class="col-4"><span>Expiry date:</span>
                                    <input placeholder="YY/MM" class="form-control">
                                </div>
                                <div class="col-4 mb-3">
                                    <span>CVV:</span>
                                    <input id="cvv" placeholder="999" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-primary">Valider</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="" method="post">
                            <label class="form-label" for="mail">
                                Adresse email:
                                <input type="text" id="mail" name="mail" class="form-control">
                            </label><br />
                            <label class="form-label" for="password">
                                Mot de passe:
                                <input type="password" name="password" id="password" class="form-control">
                            </label><br />
                            <input type="submit" value="Entrer" class="btn btn-primary">
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-5">
            <div class="p-4 border">
                <div class="header">Votre Panier</div>
                <p>2 articles</p>
                <div class="row py-2">
                    <div class="col-4 align-self-center"><img class="img-fluid" src="https://i.imgur.com/79M6pU0.png"></div>
                    <div class="col-8">
                        <div class="row"><b>$ 26.99</b></div>
                        <div class="row text-muted">Be Legandary Lipstick-Nude rose</div>
                        <div class="row">Qty:1</div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-4 align-self-center"><img class="img-fluid" src="https://i.imgur.com/Ew8NzKr.jpg"></div>
                    <div class="col-8">
                        <div class="row"><b>$ 19.99</b></div>
                        <div class="row text-muted">Be Legandary Lipstick-Sheer Navy Cream</div>
                        <div class="row">Qty:1</div>
                    </div>
                </div>
                <hr>
                <div class="row lower">
                    <div class="col text-left"><b>Total to pay</b></div>
                    <div class="col text-right"><b>$ 46.98</b></div>
                </div>
                <div class="row lower">
                </div> 
                <button class="btn btn-primary">Place order</button>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>