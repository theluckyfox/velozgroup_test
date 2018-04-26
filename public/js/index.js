$(document).ready(function() {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /* submit form addBill */
    $('#edit-form').submit(addBill);

    /* add bill modal show */
    $('#add-bill').click(addBillModalShow);

    /* delete modal show */
    $('.section-bills > .bill-row > .bill-buttons > .delete-bill').click(deleteModalShow);

    $('#delete-modal > .form > .button-delete').click(deleteBill);

    /* close modal */
    $('.modal > .form .button-cancel').click(closeModal);
});

function deleteModalShow(event) {
    var id = $(this).parent().attr('data-bill-id');
    $('#delete-modal').attr('data-bill-id', id);
    $('#delete-modal').css({visibility: 'visible', opacity: '1'});
}

function addBillModalShow(event) {
    $('#edit-modal').css({visibility: 'visible', opacity: '1'});
}

function closeModal(event) {
    $('.modal').css({visibility: 'hidden', opacity: '0'});
};

function deleteBill() {
    var id = $(this).parent().parent().attr('data-bill-id');
    var elem = $('.section-bills [data-bill-id="' + id + '"]').parent();
    $.ajax({
      url: "/bills/" + id,
      dataType: 'json',
      type: 'DELETE',
      data: {
        'bill_id': id,
        '_method': 'DELETE',
        '_token': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (data) {        
        $(elem).fadeOut();
        $(elem).remove();
        closeModal();
      },
      error: function (data) {
       console.log(data);
      }
    });
  }

  function addBill(event) {
    event.preventDefault();

    var obj = {
        vendor: $('#form-field-vendor').val(),
        price: $('#form-field-price').val(),
        category: $('#form-field-category').val(),
        paid: $('#form-field-ispaid').is(':checked')
    };

    $.ajax({
        url: "/bills",
        dataType: 'html',
        type: 'POST',
        data: {
          'bill_obj': obj,
          '_method': 'POST',
          '_token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) { 
          closeModal();
          $('#main > .section-bills').append(data);
        },
        error: function (data) {
         console.log(data);
        }
    });
  }