<?php

?>

<h1>Register page</h1>

<form method="post" action="">
    <div class="mb-3">
        <label  class="form-label">Firstname</label>
        <input type="text" class="form-control" name="firstname">
        <div class="form-text"></div>
    </div>

    <div class="mb-3">
        <label  class="form-label">Lastname</label>
        <input type="text" class="form-control" name="lastname">
    </div>

    <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <div class="mb-3">
        <label  class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="confirmPassword">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>