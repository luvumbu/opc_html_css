<form class="form_bdd">
<h1>Identification</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom BDD </label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" id="user_name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password_name">
  </div>
  <div class="form-group form-check">
   </div>
  <div type="submit" class="btn btn-primary" onclick="connection_bdd()">Submit</div>
</form>

<style>
.form_bdd{
    width: 60%;
    margin: auto;
    margin-top: 100px;
}
</style>