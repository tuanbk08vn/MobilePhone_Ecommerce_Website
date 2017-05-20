$(document).ready(function() {
    var isLoad = false; //check LoadMore Button Event

    $('#register-submit').click(function() {
        document.getElementById("register-display").innerHTML = '';
        var username = document.getElementById("username").value;
        var errUsername = '';
        var password = document.getElementById("password").value;                
        var errPassword = '';
        var name = document.getElementById("name").value;
        var errName = '';
        var birthday = document.getElementById("birthday").value;
        var errBirthday = '';
        var email = document.getElementById("email").value;
        var errEmail = '';
        var matched_email = new RegExp("/.+@[a-zA-Z_]+?\.[a-zA-Z]{2,4}/");
        var is_match_email = matched_email.test(email);
        var phoneNumber = document.getElementById("phone-number").value;
        var errPhoneNumber = '';
        var address = document.getElementById("address").value;
        var errAddress = '';
        var userType = document.getElementById('user-type').value;
        if(username.length < 8){
            errUsername = "Username must be greater than 8 letters.";
            $('#register-display').html(errUsername);
            document.getElementById("username").innerHTML = '';
            return false;
        }
        else if(password.length < 8){
            errPassword = "Length of password must be larger than 8.";
            $('#register-display').html(errPassword);
            document.getElementById("password").innerHTML = '';
            return false;
        }
        else if(name.length < 1){
            errName = "Name is not empty.";
            $('#register-display').html(errName);
            document.getElementById("name").innerHTML = '';
            return false;
        }
        else if(birthday == '') {
            errBirthday = "Please choose your Birthday";
            $('#register-display').html(errBirthday);
            document.getElementById("birthday").innerHTML = '';
            return false;
        }
        else if(!validateEmail(email)) {
            errEmail = "Email is not correct.";
            $('#register-display').html(errEmail);
            document.getElementById("email").innerHTML = '';
            return false;
        }
        else {
            $.ajax({
                type: "POST",
                url: "../libraries/validateRegister.php",
                data: {username:username, password:password, name:name, birthday:birthday, email:email, address: address, phoneNumber:phoneNumber, userType:userType},
               success: function(response) {
                   alert("register successful!");
                   hideRegister();
                   showLogin();
               }
            });
        }
    });

    $('#login-submit').click(function() {
        var loginUsername = document.getElementById("login-username").value;
        var loginPassword = document.getElementById("login-password").value;
         $.ajax({
           type:"POST",
            url:"../libraries/checklogin.php",
            data: {login_username:loginUsername, login_password:loginPassword},
            success: function(response) {
                window.location.href = "index.php";
            }
        });
    });

    $('#logOut').click(function() {
        $.ajax({
            type: "POST",
            url: "../modules/logout.php",
            success: function(response) {
            }
        });
    });

    // Show more when click button ShowMore
    $('.product').on("click", ".btn-show-more", function() {
        isLoad = true;
        var last_displayed_id = $(".btn-show-more").attr('id');
        $(".btn-show-more").remove();
        $.ajax({
            type:"POST",
            url:"../modules/new_product.php",
            data:{last_displayed_id:last_displayed_id, isLoad:isLoad},
            success:function(html){
                $(".product").append(html);
                return false;
            }
        });
    });

    $('.product').on("click", ".btn-show-more1", function() {
        isLoad = true;
        var last_displayed_id1 = $(".btn-show-more1").attr('id');
        $(".btn-show-more1").remove();
        $.ajax({
            type:"POST",
            url:"../modules/custom_product.php",
            data:{last_displayed_id1:last_displayed_id1, isLoad:isLoad},
            success:function(html){
                $(".product").append(html);
                return false;
            }
        });
    });

    $("#order-submit").on("submit",function() {
        var order_name = document.getElementById('order-name').value;
        var order_address = document.getElementById('order-address').value;
        var order_phone = document.getElementById('order-phone').value;
        var order_note = $("#order-note").val();
        var order_quantity = new Array();
        $('*[id^="order-quantity"]').each(function(){
            order_quantity.push($(this).text());
        });
        var json_order_quantity = JSON.stringify(order_quantity);
        $.ajax({
            type:"POST",
            url:"../modules/order.php",
            data:{order_name:order_name, order_address:order_address,order_phone:order_phone, order_quantity:order_quantity, order_note:order_note},
            success: function(data) {
                window.location.replace("../modules/order_info.php");
            }
        });
    });

    // add items to Cart
    $('*[class*="btnCart"]').on("click",function() {
        var cart_id_array = $(this).attr('class').match(/\d+/);
        var cart_id = cart_id_array[0];
        $.ajax({
            type:"POST",
            data:{cart_id:cart_id},
            url:"../includes/session.php",
            success:function(data) {
               var count = $('.cart-amount').val();
               count++;
                $('.cart-amount').val(count);
               $('.cart-amount').text(count);
            }
        });
    });

    // Count and calculate Sum from Order
    $('*[id^="order-quantity"]').change(function() {
        var id =$(this).attr('id').match(/\d+/);
        var cart_qty = $(this).children(":selected").val();
        var price =$('*[id^="order-price"]').attr('id').match(/\d+/);
        var sum = $('#order-sum-'+id);
            sum.text(price*cart_qty + '$');
        var total = 0;
        $('*[id^="order-sum"]').each(function() {
            var item = $(this).text();
            item = parseInt(item);
            total = total + item;
        });
        $('.total').text(total + " $");
        $.ajax({
            type:"POST",
            url:"../includes/session.php",
            data: {id:id,cart_qty:cart_qty},
        });
    });

    // Change image between major and minor image in Detail Product
    $('.sub-image-item').on('click',function(){
       var url_image_1 = $(this).find('img').attr('src');
       var url_image_2 = $('.main-image').find('img').attr('src');
        $(this).find('img').attr('src',url_image_2);
        $('.main-image').find('img').attr('src',url_image_1);
    });
});

function hideLogin()  {
    $("#loginModal").modal("hide");
}

function showLogin() {
    $('#loginModal').modal('show');
}

function hideRegister()  {
    $('#registerModal').modal('hide');
}

function showOrder() {
    $('#orderModal').modal("show");
    var detail_product_id;
    $.ajax({
        type:"POST",
        url: "../includes/session.php",
        data:{detail_product_id:detail_product_id},
        success:function(data) {
        }
    });
}

function validateEmail(x) {
        var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})+$/;
        return regex.test(x);
}

function getBrand() {
        var custom_brand = $(".brand").attr('value');
        $.ajax({
            type:"POST",
            url:"../includes/session.php",
            data:{custom_brand:custom_brand},
            success:function(html){
                return true;
            }
        });
}
