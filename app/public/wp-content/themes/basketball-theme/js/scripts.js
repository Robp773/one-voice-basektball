jQuery(document).ready(function ($) {
  let currentImg;
  $('.store__item-image').on('click', function (e) {
    $('.page__modal-bg').removeClass('hidden');
    currentImg = e.currentTarget.dataset.imgName;
    $(`#${currentImg}`).removeClass('hidden');
  })

  $('.page__modal-bg').on('click', function () {
    $('.page__modal-bg').addClass('hidden');
    $(`#${currentImg}`).addClass('hidden');
  })

  // changing hat picture to match user color selection
  $("#hat-color").change(function (e) {
    if (e.target.value === "Black") {
      $("#white-hat").addClass("hidden");
      $("#black-hat").removeClass("hidden");
    } else {
      $("#black-hat").addClass("hidden");
      $("#white-hat").removeClass("hidden");
    }
  });

  let itemsArray = [];

  $("#add-hat").on("click", function (e) {
    itemsArray.push({
      item: "Hat",
      color: $("#hat-color").val(),
      cost: 17
    });
    updateOrder(itemsArray);
  });

  $("#add-tshirt").on("click", function (e) {
    itemsArray.push({
      item: "Shirt",
      color: $("#tshirt-color").val(),
      size: $("#tshirt-size").val(),
      cost: 10
    });
    updateOrder(itemsArray);
  });

  $("#add-magnet").on("click", function (e) {
    itemsArray.push({
      item: "Magnet",
      cost: 3
    });
    updateOrder(itemsArray);
  });

  $(".store__ordered-items").on("click", ".store__remove-item-btn", function (
    e
  ) {
    itemsArray.splice(e.currentTarget.dataset["itemNum"], 1);
    updateOrder(itemsArray);
  });

  let totalCost;

  function updateOrder(itemsArray) {
    totalCost = 0;
    $(".store__total-cost").removeClass("hidden");
    $(".store__ordered-items").empty();

    for (let i = 0; i < itemsArray.length; i++) {
      totalCost += itemsArray[i].cost;
      $(".store__ordered-items").append(`
            <li class='store__list-item'>

                    <div class='store__single-item'>

                        <div class='store__item-name'>${
                          itemsArray[i].item
                        }</div>
                        
                        <div class='store__item-details'>
                            ${
                              itemsArray[i].color
                                ? `<div class='u-inline-block'><b>Color</b>: ${
                                    itemsArray[i].color
                                  }</div>`
                                : ""
                            }
                            ${
                              itemsArray[i].size
                                ? `<div class='u-inline-block'><b>Size</b>: ${
                                    itemsArray[i].size
                                  }</div>`
                                : ""
                            }
                        </div>
                       
                        <div class='store__item-price'>$${
                          itemsArray[i].cost
                        }</div>

                    </div>  
                    
                    <button class='store__remove-item-btn' data-item-num=${i}><i class="fas fa-minus-circle"></i></button>

            </li>
            `);
    }

    $(".store__total-cost").text(`Total Cost: $${totalCost}`);
  }

  $(".store__submit-btn").on("click", function (e) {

    e.preventDefault();

    if (itemsArray.length === 0) {
      alert('There are no items in your order.')
      return;
    } else if ($('.store__name-input').val() === '' || $('.store__email-input').val() === '') {
      alert('Please fill out both the name and email fields.')
      return;
    }

    let emailMsg = `ORDER FROM: ${$('.store__name-input').val()}\nEMAIL: ${$('.store__email-input').val()}\nORDER COMMENTS: ${$('.store__comment-input').val()} \n`

    for (let i = 0; i < itemsArray.length; i++) {
      emailMsg += `\nITEM NAME: ${itemsArray[i].item} ${itemsArray[i].size ? 'ITEM SIZE: ' + itemsArray[i].size : ''} ${itemsArray[i].color ? 'ITEM COLOR: ' + itemsArray[i].color : ''} ITEM COST: ${itemsArray[i].cost}\n`
    }
    var data = {
      action: "mail_before_submit",
      msg: emailMsg,
      toemail: "robpeterman573@gmail.com",
      _ajax_nonce: $("#my_email_ajax_nonce").data("nonce")
    };

    jQuery.post(
      window.location.origin + "/wp-admin/admin-ajax.php",
      data,
      function (response) {
        // console.log(response);
      }
    );
  });
});