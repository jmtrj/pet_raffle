$(document).ready(function() {
  $(document).on('click','.examplemodal', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    $('#examplemodal').modal('show');
    getRow(id);
  });

  function getRow(id){
    $.ajax({
      type: 'POST',
      url: 'row.php',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        $('#Price').val("₱"+response.Price);
        $('#Price2').val(response.Price);
        $('#Title').text(response.Name);
        $('#Description').text(response.Description);
        $('#Activeimage').attr('src',"assets/img/"+response.Image);
        $('#Image_1').attr('src',"assets/img/"+response.Image_1);
        $('#Image_2').attr('src',"assets/img/"+response.Image_2);
        $('#Image_3').attr('src',"assets/img/"+response.Image_3);
      }
    });
  }

  // Fetch data using Ajax
  $.ajax({
    url: "fetch.php",
    type: "GET",
    success: function(data) {
      // Parse the JSON data
      var raffleData = JSON.parse(data);

      // Display the data in a table or a list
      var raffleList = $("#raffle-list");

      $.each(raffleData, function(index, raffle) {

        var raffleItem = "<div class='col-lg-4 col-md-6 d-flex align-items-stretch'>" +
          "<div class='card mb-3'>" +
          "<div class='img-wrapper'>" +
          "<a data-id="+raffle.Id+" class='btn btn-success btn-sm examplemodal'><img src='assets/img/"+raffle.Image + "' class='d-block w-100' alt='" +raffle.Name + "'></a>" +
          "</div>" +
          "<div class='card-body'>" +
          "<h5 class='card-title'>"+raffle.Name + "</h5>"+
          "<p class='card-text'>"+raffle.Description + " </p>"+
          "<p class='card-text'><small class='text-muted'>₱ "+raffle.Price+ " </small></p>"+
          "</div>"+
          "</div>";

        raffleList.append(raffleItem);

      });

      // Add CSS for image zoom effect
      $('.img-wrapper').hover(function() {
        $(this).find('img').css('transform', 'scale(1.1)');
      }, function() {
        $(this).find('img').css('transform', 'scale(1)');
      });
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });

  // Get the increment and decrement buttons, order total input field, and total amount input field
  var incrementBtn = $('#increment-btn');
  var decrementBtn = $('#decrement-btn');
  var orderTotalInput = $('#order-total');
  var totalAmountInput = $('#Price2');
  var totalAmountInput1 = $('#Price');

  // Set up click event listeners for the buttons
  incrementBtn.click(function() {
    // Get the current order total and increment it by 1
    var currentTotal = parseInt(orderTotalInput.val());
    var newTotal = currentTotal + 1;

    // Update the order total input field with the new total
    orderTotalInput.val(newTotal);

    // Get the ticket price from the total amount input field
    var ticketPrice = parseInt(totalAmountInput.val());

    // Update the total amount input field based on the new total number of tickets and the ticket price
    totalAmountInput1.val("₱"+newTotal * ticketPrice);
  });

  decrementBtn.click(function() {
    // Get the current order total and decrement it by 1
    var currentTotal = parseInt(orderTotalInput.val());
// Make sure the order total cannot be negative
if (currentTotal > 1) {
  var newTotal = currentTotal - 1;

  // Update the order total input field with the new total
  orderTotalInput.val(newTotal);

  // Get the ticket price from the total amount input field
  var ticketPrice = parseInt(totalAmountInput.val());

  // Update the total amount input field based on the new total number of tickets and the ticket price
  totalAmountInput1.val("₱"+newTotal * ticketPrice);
}
})
});

      // Submit form using Ajax
    $('#order-form').submit(function(e) {
      e.preventDefault();

      // Get the form data
      var formData = $(this).serialize();

      // Send the form data using Ajax
      $.ajax({
      type: 'POST',
      url: 'submit.php',
      data: formData,
      dataType: 'json',
      success: function(response) {
      // Display a success message to the user
      alert(response.message);

       // Reset the form fields
        $('#order-form')[0].reset();
        $('#order-total').val('1');
        $('#Price').val('');
        $('#Price2').val('');
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
     })
  });









