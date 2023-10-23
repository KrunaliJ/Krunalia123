<!doctype html>
<html>
  <head>
    <title>Bootstrap Exercise</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
    <form class="row requires-validation" novalidate>
	<h1>form Validation</h1>
        <div class="col-md-8">
           <label for="username" class="form-label">Username:</label>
           <input type="text" class="form-control" id="username" required>
           <div class="invalid-feedback">
              Please fill out this field.
           </div>
        </div>
        <div class="col-md-8">
           <label for="password" class="form-label">Password:</label>
           <input type="password" class="form-control" id="password" required>
           <div class="invalid-feedback">
              Please fill out this field.
           </div>
<div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
<br>
        </div>
        <div class="col-12">
           <button class="btn btn-primary" type="submit">Submit</button>
        </div>
     </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        (function () {
        'use strict'
        const forms = document.querySelectorAll('.requires-validation')
        Array.from(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
          
              form.classList.add('was-validated')
            }, false)
          })
        })()
        </script>
</body>
</html>
