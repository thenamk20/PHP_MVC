<?php

?>

<h1>contact page</h1>

<form method="post" action="">
    <div class="mb-3">
        <label  class="form-label">Subject</label>
        <input type="text" class="form-control" name="subject">
        <div class="form-text"></div>
    </div>
    <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
        <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
       <textarea name="body" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>