<div class="nav container">
    <a href="#" class="logo">Pancong Store</a>
    <i class="bx bx-shopping-bag" id="cart-icon"></i>
    <div class="cart">
        <h2 class="cart-title">Pesananmu</h2>
        <div class="cart-content">
        </div>
        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price"></div>
        </div>
        <button type="button" class="btn-buy">Beli Sekarang</button>

        <i class="bx bx-x" id="close-cart"></i>
    </div>
</div>
</header>
<section class="shop container">
    <h2 class="section-title">Products</h2>
    <div class="shop-content">
<?php foreach($data as $d):?>
        <div class="product-box">
            <img src="storage/<?= $d->gambar?>"  alt="menu" style="min-height: 10vh;" class="product-img">
            <h2 class="product-title">
                {{$d->nama_menu}}
            </h2>
            <span class="price">{{$d->harga_menu}}</span>
            <i class="bx bx-shopping-bag add-cart"></i>
        </div>

<?php endforeach;?>
</div>
</section>
