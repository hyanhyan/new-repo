<?php


session_destroy();





// tell the user order has been placed
echo "<div class='alert alert-success'>";
echo "<form action='/' method='post'>
<div class='form-group'>
            <label for='name'>Name</label>
         
   
            <input class='form-control' type='text' name='name' id='name'  required />
        </div>
<div class='form-group'>
            <label for='email'>Email</label>
         
               
       
            <input class='form-control' type='text' name='email' id='email'  required />
        </div>
        <div class='form-group'>
            <label for='comment'>Comment</label>
            <input class='form-control' type='textarea' name='comment' id='comment'  required />
        </div>
        <input type='submit' value='ok' name='submit'>
</form>";
echo "<div class='alert alert-success'>";

echo "<strong>Your order has been placed!</strong> Thank you very much!";
echo "</div>";

