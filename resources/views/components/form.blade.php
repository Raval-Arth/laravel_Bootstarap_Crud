<form action='/do_register' method='post'>
  @csrf

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="name">
    <div id="emailHelp" class="form-text">You name Please</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name='password' class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
