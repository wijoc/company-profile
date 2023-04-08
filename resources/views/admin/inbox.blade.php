@extends('admin/layout')

@section('content')
  <div class="w-full p-5">
    <div class="min-w-full card card-outline-header-secondary">
      <div class="card-header">
        <h1 class="text-lg font-medium uppercase">Inbox</h1>
      </div>
      <div class="card-body">
        <table id="inbox-table" class="w-full table table-auto border-[1px] border-black border-collapse ">
          <thead>
            <th class="text-left">Subject</th>
            <th class="text-left">Name</th>
            <th class="text-center">Email</th>
            <th>Action</th>
          </thead>
          <tbody>
            <tr>
              <td class="text-left">Subject 1</td>
              <td class="text-left">Sender Name</td>
              <td class="text-center">Sender Email</td>
              <td class="flex justify-center gap-1 border-0">
                <button class="btn btn-primary">
                  <i class="fa-solid fa-circle-info"></i>
                </button>
                <button class="btn btn-danger">
                  <i class="fa-solid fa-trash"></i>
                </button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <th class="text-left">Subject</th>
            <th class="text-left">Name</th>
            <th class="text-center">Email</th>
            <th>Action</th>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

  <script>
    $(document).ready( function () {
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.get('/ajax/inbox', function (response) {
        var output = ''
        response.forEach(element => {
          output += `<tr>
              <td>`+ element.subject +`</td>
              <td>`+ element.name +`</td>
              <td>`+ element.email +`</td>
              <td class="flex justify-center gap-1 border-0">
                <a href="/inbox/`+ element.id +`" class="btn btn-primary">
                  <i class="fa-solid fa-circle-info"></i>
                </a>
                <a class="btn btn-danger" onclick="deleteRow(`+ element.id +`)">
                  <i class="fa-solid fa-trash"></i>
                </a>
              </td>
            </tr>`
        });
        $('#inbox-table tbody').html(output)
      })
    })

    function deleteRow (id) {
      console.log(id)
    }
  </script>
@endsection