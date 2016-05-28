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

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" id="contactForm" method="post" action="#">

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
