<!--solomon grundy@-->
<?php
global $row;
include ("config/database.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact For</title>

</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow p-4">
<h1  class="text-primary text-center"> Welcome To The College Complaint Form</h1>
<p class="text-center fw-bold h4">Please Fill The Form</p>
<form action="./handle.php" method="post" class="mt-3">

    <input type="text" name="f_name"  placeholder="Enter your FullName" required class="form-control">
    <div class="invalid-feedback">Full Name should contain only letters </div><br>

    <input type="text" name="age" placeholder="Enter your Age" required class="form-control">
    <div class="invalid-feedback">Please enter a valid age.</div><br>

    <select name="gender" id="" required class="form-select">
        <option value="" disabled selected >Select a Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <div class="invalid-feedback">Please select a gender</div>
    <br>

    <input type="text" name="email" placeholder="Enter your Email" required class="form-control">
    <div class="invalid-feedback">Please enter a valid mail.</div><br>

    <input type="text" name="phone" placeholder="Enter your PhoneNumber" required class="form-control" >
    <div class="invalid-feedback">Phone number should be of the format 233-000-000-000.</div><br>

    <textarea name="comment" id="" cols="30" rows="10" placeholder="Enter your Information or Complaint Here" required class="form-control"></textarea>
    <div class="invalid-feedback">Comment should be more than 10 characters.</div><br>
    <button type="submit"  name="submit" class="btn btn-primary w-100">Send Complaint</button>
    <br>


</form>

    </div>
</div>
<footer class="bg-black text-white text-center py-4 mt-5 fw-bold d-none footer-hidden">
    Created by <span class="fw-bold">$Void</span>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js""></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector("form").addEventListener("submit", function (event) {
            let isValid = true;

            // Get form values
            let fullName = document.querySelector("[name='f_name']").value.trim();
            let age = document.querySelector("[name='age']").value.trim();
            let gender = document.querySelector("[name='gender']").value;
            let email = document.querySelector("[name='email']").value.trim();
            let phone = document.querySelector("[name='phone']").value.trim();
            let comment = document.querySelector("[name='comment']").value.trim();

           // Validation of form
            if (!/^[A-Za-z\s]+$/.test(fullName)) {
                document.querySelector("[name='f_name']").classList.add("is-invalid");
                isValid = false;
            } else {
                document.querySelector("[name='f_name']").classList.remove("is-invalid");
            }


            if (!/^\d+$/.test(age) || age < 17 || age > 50) {
                document.querySelector("[name='age']").classList.add("is-invalid");
                isValid = false;
            } else {
                document.querySelector("[name='age']").classList.remove("is-invalid");
            }


            if (gender === "") {
                document.querySelector("[name='gender']").classList.add("is-invalid");
                isValid = false;
            } else {
                document.querySelector("[name='gender']").classList.remove("is-invalid");
            }


            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                document.querySelector("[name='email']").classList.add("is-invalid");
                isValid = false;
            } else {
                document.querySelector("[name='email']").classList.remove("is-invalid");
            }

            if (!/^\d{10,12}$/.test(phone)) {
                document.querySelector("[name='phone']").classList.add("is-invalid");
                isValid = false;
            } else {
                document.querySelector("[name='phone']").classList.remove("is-invalid");
            }


            if (comment.length < 10) {
                document.querySelector("[name='comment']").classList.add("is-invalid");
                isValid = false;
            } else {
                document.querySelector("[name='comment']").classList.remove("is-invalid");
            }

            // Prevent form submission if validation fails
            if (!isValid) {
                event.preventDefault();
            }
        });
    });
</script>

</body>
</html>
