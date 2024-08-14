<?php include('header.php')?>
     <!-- Page Header Start -->
     <div class="container-fluid  p-5" style="background-color:#3e8914;">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Membership</h1>
                <a href="" class="text-light">Home</a>
                <span class="text-light"> / </span>
                <a href="" class="text-light">Membership</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0 ">
            <div class="col-lg-12 py-6 px-5 effect fade-in"  style="max-width:1200px; display: block; margin: 0 auto;">
                <h1 class="display-5 mb-4 text-center" style="color:  #134611;">THE ALIGARH ALUMNI ASSOCIATION OF TEXAS</span></h1>
                <h2 class=" mb-4 text-center mb-3"  style="color:  #3e8914; ">Membership Application</h2>
                <h3 class=" mb-4 text text-left"  style="color: #3e8914;">January to December</h3>
            <h4><p class="mb-4 para" >The Aligarh Alumni Association is a non-political, non-profit, charitable, educational, social, and cultural organization of the alumni and well-wishers of Aligarh Muslim University (AMU).</p></h4>
                
            <h4><p class="mb-4 para">The aims and objectives of the Association are to (1) help AMU and its student body and other students through academic and scholarship programs, (2) develop and strengthen a sense of community by organizing social projects and events and (3) promote cultural awareness through cultural and literary activities.</p>
            

                <h4><p class="mb-4 para">Membership in the Association is open to all who believe in the aims and objectives of the Association. Please become member and support the Association with your active participation.</p>
                </h4>
            </div>

    <!-- About End -->

    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-12 py-0 px-5">
                <h6 class=" mb-4 " style="color:#000000;">Choose one<sup>*</sup></h6>
                <form>
                    <div class="row g-3">

                        <div class="col-6 ">
                        
                                <input type="radio" value="Choose membership" id="choose_membership" name="choose">
                                <label for="form-floating-1"><h5>Choose membership</h5></label>
                                <input type="radio" value="Renewal of membership" name="choose"  id="renewal_of_membership">
                                <label for="form-floating-1"><h5>Renewal of membership</h5></label>
                       
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Spouse’s name </label>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Address</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Phone(Home)</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Phone(Work)</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Cell Phone</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="form-floating-2" placeholder="name@example.com">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <h3 class="display-10 mb-4 " style="color:#3e8914;">Type of Membership</h3>
                        <div class="col-6 ">
                        
                            <h5><input type="radio" value="Choose membership" id="form-floating-1" name="choose">
                            <label for="form-floating-1">Family($25)</h5></label>
                            <h5><input type="radio" value="Renewal of membership" name="choose"  id="form-floating-1">
                            <label for="form-floating-1">Life($250)</h5></label>
                            <h5><input type="radio" value="Renewal of membership" name="choose"  id="form-floating-1">
                            <label for="form-floating-1">Education</h5></label>
                            <h5><input type="radio" value="Renewal of membership" name="choose"  id="form-floating-1">
                            <label for="form-floating-1">Scholarship</h5></label>
                            <h5><input type="radio" value="Renewal of membership" name="choose"  id="form-floating-1">
                            <label for="form-floating-1">Others</h5></label>
                   
                    </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-3" placeholder="Subject">
                                <label for="form-floating-3">Name and Ages of Children</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="file" class="form-control" placeholder="Message" id="form-floating-4" style="height: 100px"></input>
                                <label for="form-floating-4">Upload Payment Slip</label>
                              </div>
                        </div>
                        <div class="col-12">
                            <button class="btn text-light w-25 py-3 mb-5" type="submit" style="background-color:#3e8914;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <!-- Contact End -->
    
    
    <?php include('footer.php')?>