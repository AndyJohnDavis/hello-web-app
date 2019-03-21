
<!DOCTYPE html>
<html>
    <head>

        <title>Contact</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/base.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



    </head>

    <body>

        <?php include("include/nav.php"); ?>

        <!--header-->
        <header class="secondary-header">
            <div class="overlay">
                <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                </div>
            </div>  
        </header>

<!--form section-->

<section>
    <div class="container">
    <!--form-->
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-6">
                    <form>
                        <div class="form-group">
                            <label for="first">First Name *</label>
                            <input type="text" class="form-control" id="first" aria-describedby="textHelp" placeholder="Enter name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="second">Second Name *</label>
                            <input type="text" class="form-control" id="second" aria-describedby="textHelp" placeholder="Enter name">
                        </div>
                    </div>
                </div>  
                <div class="row mt-3">
                    <div class="col-6">
                    <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="text" class="form-control" id="email" aria-describedby="textHelp" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" class="form-control" id="phone" aria-describedby="textHelp" placeholder="Enter number">
                        </div>
                    </div>
                </div> 
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="message">Message*</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hearaboutus">Where did you hear about us? *</label>
                            <select  id="hearaboutus" class="form-control">
                                <option value=" ">-- Please select --</option>
                                <option value="Primary">Primary Times</option>
                                <option value="Digy">Digital Festival </option>
                                <option value="Facebook">Facebook</option>
                                <option value="Google">Google</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Newspapper">Newspapper</option>
                                <option value="Radio">Radio</option>
                                <option value="Linkdin">Linkdin</option>
                                <option value="Word and Mouth">Word and Mouth</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hearaboutus">Where did you hear about us? *</label>
                            <select  id="hearaboutus" class="form-control">
                                <option value=" ">-- Please select --</option>
                                <option value="Evening">Evening Course</option>
                                <option value="session">One to One session</option>
                                <option value="Bootcamp">Children's Bootcamp</option>
                                <option value="Code Club">Code club</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    
                </div>   
            
            </div>
            <!--address--> 
            <div class="col-4">
                <div class="box mt-4 contact">
                    <address>Codez Academy <br>
                    Barcleys Eadle Lab, <br>
                    Brunel House, <br>
                    Cardiff,<br>
                    CF24 0EB <br>
                        </address>

                    <p><tel 02920098495>02920 098495</p>
                    <a href="mailto:learn@codezacademy.co.uk">learn@codezacademy</a>
                </div>
            </div>
        </div>  
    </div>
</section>








        
        <?php include("include/footer.php"); ?>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>