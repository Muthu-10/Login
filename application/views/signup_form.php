<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN_FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
     <!-- this is font style latest links -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <!-- this line css path -->
     <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/signup.css');?>"/> -->
</head>
<body>
    <h2 class='text-center mt-3 h2'>SIGN_UP PAGE</h2>
    <div><?php echo validation_errors() ?></div>
        <div class="container login">
        <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="https://previews.123rf.com/images/nicolasmenijes/nicolasmenijes1505/nicolasmenijes150500658/40605587-3d-renderer-illustration-white-people-writing-sign-up-on-notebook-page-isolated-white-background.jpg" class="img-fluid" alt=" ">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                   
            <form method="post" action="<?=base_url('user/submit')?>">
                <form class='row form '>
                    <div class='form'>
                        <div class='row  mt-4  d-flex justify-content-center form '>
                            <div class= "col-sm-6"> 
                                <div class= "input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i><label>Name</label></span>
                                    <input type='text' class="form-control" name='name' placeholder='Your Name..'/>
                                </div>
                            </div>
                        </div>
                        <br>
                    <div class='row  mt-4  d-flex justify-content-center form '>
                        <div class= "col-sm-6"> 
                            <div class= "input-group">
                                <span class="input-group-text"><i class="fa-solid fa-envelope"></i><label>Email ID</label></span>
                                <input type='email' class="form-control" name='email' placeholder='email'/>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='row  mt-4  d-flex justify-content-center form '>
                        <div class= "col-sm-6"> 
                            <div class= "input-group">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i><label>Password</label></span>
                                <input type='password' class='form-control' name='password' placeholder='password'/>
                             </div>
                        </div>
                     </div>
                    <br>
                    <div>
                        <div class='row  mt-4  d-flex justify-content-center form '>
                            <button class='col-sm-3 btn btn-primary button'type='submit' value='submit' >Login</button>
                        </div>
                     </div>
            </div>                            
</form> 
</div>           
</body>
</html>