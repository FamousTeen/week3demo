@extends('base')

@section("content")
<div class="row">
  <div class="col-md-3 m-1 p-1 bg-primary">
    Column 1 of 2
  </div>
  <div class="col m-2 p-1 bg-secondary">
    Column 2 of 2
  </div>
</div>

<!-- Pop up modal -->
<div class="modal" id="notifModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Notification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="usernameModal">Username: </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

<!-- Custom form -->
<form action="" id="login">
  <div class="form-floating mt-3">
    <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
    <label for="username">Username</label>
  </div>
  <div class="form-floating mt-3">
    <input type="password" class="form-control" id="password" name="password" placeholder="Your Password">
    <label for="password">Password</label>
  </div>

  <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
</form>
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $("#login").on('submit', function () {
      var username = $("input[name=username]").val()
      $('#usernameModal').html("Username: " + username)
      $('#notifModal').modal('show');
      return false;
    })
  })
</script>
@endsection
