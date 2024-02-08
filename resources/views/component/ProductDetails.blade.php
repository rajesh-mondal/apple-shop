<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                <div class="product-image">
                    <div class="product_img_box">
                        <img id="product_img1" class="w-100" src='assets/images/product_img1.jpg' />
                    </div>
                    <div class="row p-2">
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img1" src="assets/images/product_small_img3.jpg"/>
                        </a>
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img2" src="assets/images/product_small_img3.jpg"/>
                        </a>
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img3" src="assets/images/product_small_img3.jpg" alt="product_small_img3" />
                        </a>
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img4" src="assets/images/product_small_img3.jpg" alt="product_small_img3" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    <div class="product_description">
                        <h4 id="p_title" class="product_title"></h4>
                        <h1 id="p_price"  class="price"></h1>
                    </div>
                    <div>
                        <p id="p_des"></p>
                    </div>
                </div>

                <label class="form-label">Size</label>
                    <select id="p_size" class="form-select">

                    </select>
                <label class="form-label">Color</label>
                <select id="p_color" class="form-select">

                </select>

                <hr />

                <div class="cart_extra">
                    <div class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" class="minus">
                            <input id="p_qty" type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                            <input type="button" value="+" class="plus">
                        </div>
                    </div>
                    <div class="cart_btn">
                        <button onclick="AddToCart()" class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> Add to cart</button>
                        <a class="add_wishlist" onclick="AddToWishList()" href="#"><i class="icon-heart"></i></a>
                    </div>
                </div>
                <hr />
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    $('.plus').on('click', function() {
        if ($(this).prev().val()) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.minus').on('click', function() {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });

    let searchParams = new URLSearchParams(window.location.search);
    let id = searchParams.get('id');


    async function productDetails() {
        let res = await axios.get("/ProductDetailsById/"+id);
        let Details=await res.data['data'];

        document.getElementById('product_img1').src=Details[0]['img1'];
        document.getElementById('img1').src=Details[0]['img1'];
        document.getElementById('img2').src=Details[0]['img2'];
        document.getElementById('img3').src=Details[0]['img3'];
        document.getElementById('img4').src=Details[0]['img4'];

        document.getElementById('p_title').innerText=Details[0]['product']['title'];
        document.getElementById('p_price').innerText=`$ ${Details[0]['product']['price']}`;
        document.getElementById('p_des').innerText=Details[0]['product']['short_des'];
        document.getElementById('p_details').innerHTML=Details[0]['des'];

        // Product Size & Color
        let size= Details[0]['size'].split(',');
        let color=Details[0]['color'].split(',');

        let SizeOption=`<option value=''>Choose Size</option>`;
        $("#p_size").append(SizeOption);
        size.forEach((item)=>{
            let option=`<option value='${item}'>${item}</option>`;
            $("#p_size").append(option);
        })


        let ColorOption=`<option value=''>Choose Color</option>`;
        $("#p_color").append(ColorOption);
        color.forEach((item)=>{
            let option=`<option value='${item}'>${item}</option>`;
            $("#p_color").append(option);
        })

        $('#img1').on('click', function() {
            $('#product_img1').attr('src', Details[0]['img1']);
        });
        $('#img2').on('click', function() {
            $('#product_img1').attr('src', Details[0]['img2']);
        });
        $('#img3').on('click', function() {
            $('#product_img1').attr('src', Details[0]['img3']);
        });
        $('#img4').on('click', function() {
            $('#product_img1').attr('src', Details[0]['img4']);
        });
    }
    
</script>