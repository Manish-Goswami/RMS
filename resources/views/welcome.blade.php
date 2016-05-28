<?php  $base_url = URL::to('/'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Slider</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="<?php echo $base_url; ?>/assest/css/bootstrap.css" type="text/css" rel="stylesheet">        
        <link href="<?php echo $base_url; ?>/assest/css/custom.css" type="text/css" rel="stylesheet">    
    </head>
    <body>
        <header>
        <h1>Freebie: 7 Clean and Responsive Forms</h1>
        <a href="http://tutorialzine.com/2015/07/freebie-7-clean-and-responsive-forms/">Download</a>
    </header>

    <ul>
        <li><a href="index.html" class="active">Basic</a></li>
        <li><a href="form-register.html">Register</a></li>
        <li><a href="form-login.html">Login</a></li>
        <li><a href="form-mini.html">Mini</a></li>
        <li><a href="form-labels-on-top.html">Labels on Top</a></li>
        <li><a href="form-validation.html">Validation</a></li>
        <li><a href="form-search.html">Search</a></li>
    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="#">

            <div class="form-title-row">
                <h1>Form Example</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" name="name">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Dropdown</span>
                    <select name="dropdown">
                        <option>Option One</option>
                        <option>Option Two</option>
                        <option>Option Three</option>
                        <option>Option Four</option>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Textarea</span>
                    <textarea name="textarea"></textarea>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Checkbox</span>
                    <input type="checkbox" name="checkbox" checked>
                </label>
            </div>

            <div class="form-row">
                <label><span>Radio</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 1</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 2</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 3</span>
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-row">
                <button type="submit">Submit Form</button>
            </div>

        </form>
    </body>     
        <script src="assest/script/jquery.js" type="text/javascript"></script>
        <script src="assest/script/jquery.validate.js" type="text/javascript"></script>
        <script src="assest/script/bootstrap.min.js" type="text/javascript"></script>
        <script src="assest/script/script.js" type="text/javascript"></script>
</html>
