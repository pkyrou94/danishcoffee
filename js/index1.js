$('.cart-container').on('mousemove', function(evt) {
  var windowWidth = $(window).width();
  var cartWidth = $('.product').length * 200;
  if(windowWidth < cartWidth)
    $('.cart').stop(false, true).animate({
      left: - (evt.clientX / windowWidth) * (cartWidth - windowWidth)
    });
  else
    $('.cart').stop(false, true).css({
      left: 0
    });
});

$('.plus').click( function() {
  var product = $(this).closest('.product')
  var q = product.data('quantity') + 1;
  product.data('quantity', q);
  updateProduct(product);
});

$('.minus').click( function() {
  var product = $(this).closest('.product')
  var q = Math.max(0, product.data('quantity') - 1); 
  product.data('quantity', q);
  updateProduct(product);
});

$('.del').click( function() {
  var product = $(this).closest('.product')
  product.hide('blind', {direction:'left'}, 500, function() {
    product.remove();
    updateProduct(product);
    if($('.product').length == 0)  {
      $('.cart-container .cart').hide();
      $('.cart-container .empty').show();
    }
  });
});

function updateProduct(product) {
  var quantity = product.data('quantity');
  var price = product.data('price');
  $('.product-quantity', product).text('x' + quantity);
  $('.product-price', product).text('€ ' + (price * quantity).toFixed(2));
  updateBill();
}

function updateBill() {
  var subtotal = 0;
  var total = 0;
  $('.product').each(function () {
    subtotal += $(this).data('quantity') * $(this).data('price');
  });
  total = subtotal;
  $('.subtotal .value').text('€ ' + subtotal.toFixed(2));
  $('.total .value').text('€ ' + total.toFixed(2));
  
}