@extends('admin/layout')

@section('content')
  <div class="w-full p-5">
    <div class="min-w-full card card-outline-header-secondary">
      <div class="card-header">
        <h1 class="text-lg font-medium uppercase">Contact</h1>
      </div>
      <div class="card-body">
        <form id="form-contact">
          <div class="flex flex-col mb-3">
            <label class="form-label">Phone</label>
            <input id="input-phone" name="phone" type="text" class="rounded-md form-control form-control-base" />
          </div>
          <div class="flex flex-col mb-3">
            <label class="form-label">Whatsapp</label>
            <input id="input-whatsapp" name="whatsapp" type="text" class="rounded-md form-control form-control-base" />
          </div>
          <div class="flex flex-col mb-3">
            <label class="form-label">Email</label>
            <input id="input-email" name="email" type="text" class="rounded-md form-control form-control-base" />
          </div>
          <div class="flex flex-col mb-3">
            <label class="form-label">Address</label>
            <textarea id="input-address" name="address" class="rounded-md form-control form-control-base" rows="10">
            </textarea>
          </div>
          <div class="flex justify-end gap-2">
            <button type="reset" class="rounded-md btn btn-outline-danger">
              Reset
            </button>
            <button type="submit" class="rounded-md btn btn-primary">
              Save Changes
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    $(document).ready( function () {
      function getContact () {
        console.log('get new contact')
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.get('/ajax/contact', function (response) {
          $('#input-phone').val(response[0].phone)
          $('#input-whatsapp').val(response[0].whatsapp)
          $('#input-email').val(response[0].email)
          $('#input-address').val(response[0].address)
        })
      }

      getContact()

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#form-contact').submit(function (e) {
        e.preventDefault()

        var form = $(this)
        $.ajax({
          type: 'POST',
          url: '/ajax/contact',
          data: form.serialize(),
          success: function (response) {
            window.alert('Data updated');
            getContact()
          },
          statusCode: {
            400: function (response) {
              var alert = ''
              var error = response.responseJSON.errors
              console.log(error)

              if (error.phone && error.phone.length > 0) {
                alert += error.phone[0] + '\n\n'
              }

              if (error.email && error.email.length > 0) {
                alert += error.email[0] + '\n\n'
              }

              if (error.whatsapp && error.whatsapp.length > 0) {
                alert += error.whatsapp[0] + '\n\n'
              }

              if (error.address && error.address.length > 0) {
                alert += error.address[0] + '\n\n'
              }

              window.alert(alert);
            },
            500: function (response) {
              window.alert('500 status code! server error');
            }
          }
        })
      })
    })
  </script>
@endsection