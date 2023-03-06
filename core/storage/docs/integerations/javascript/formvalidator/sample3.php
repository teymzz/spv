<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=.9, maximum-scale=1.0, user-scalable=1" />
<meta name="description" content="website_description" />
<link rel="icon" href="http://localhost/trial/res/main/images/icons/favicon.png" />
        <title>Sample 2</title>
        <link  rel="stylesheet" type="text/css" href="http://localhost/trial/res/main/css/res.css" x-debug="res-css"><script src='http://localhost/trial/res/main/js/jquery-3.6.0.js'></script><script src='http://localhost/trial/res/main/css/bootstrap/js/bootstrap.min.js'></script><link  rel="stylesheet" type="text/css" href="http://localhost/trial/res/main/css/mdb5/css/mdb.min.css"><script src='http://localhost/trial/res/main/js/config.js'></script><script src='http://localhost/trial/res/main/js/core.js'></script><script src='http://localhost/trial/res/main/js/onLoaded.js'></script><script src='http://localhost/trial/res/main/js/custom.js'></script><script src='http://localhost/trial/res/main/js/device.js'></script><script src='http://localhost/trial/res/main/js/loadImages.js'></script><script src='http://localhost/trial/res/main/js/formValidator.js'></script><script src='http://localhost/trial/res/main/js/jquery.mousewheel.js'></script><script src='http://localhost/trial/res/main/js/anime.js'></script><script src='http://localhost/trial/res/main/js/init.js'></script>
        <style rel="integerations.template.css.index"> 

.content-field fieldset {
    margin-bottom: .5em;
}

.content-field fieldset input {
    padding: 12px 6px;
}

.content-field {
    /* width: 50vw; */
}

.control-btns {
    min-width: 120px;
}

button.flex-ico {

    color: rgb(75, 73, 73);

}

code.main {
    margin-left: 0;
}

.form-field .i-flex-full input {
    transition: color .4s ease-in-out, box-shadow .4s ease-in-out !important;
}

@media screen and (max-width:1000px) {
    .content-field {
        width: 100%;
    }
}

 </style>
        
    </head>

    <body>

        <div id="userscreen" data-height="full" data-form="validate" data-resp=".resp" class="grid-center bc-sky-blue-dd relative">
            <div class="overlay">
                <div class="padd-20 content-field xs-2s">
                    
    

    
    <div class=""> <br>
    
        <div class="flex-in midv font-em-2 bc-silver rad-4 calibri">
            <a href="<?= DomUrl('docs/other-features/javascript') ?>"><div class="fb-6 pxs-20 c-grey bc-silver-d pxv-10 mxr-10">Js</div></a>
            <div class="c-orange-dd">form validation</div>
        </div><br>

        <h4 class="c-orange-dd">Validating number fields</h4>
        <span class="font-em-d87">
            Input fields with attribute <code>type="number"</code> or <code>type="text"</code> can be validated by adding <code>data-type="number"</code> to that fields. <br><br>
            
            Input fields below are validated only by adding the following required attributes to the input field:<br><br>
            <code>data-init</code> - used on form field for initializing message display <br><br>
            <code>data-type="number"</code> - used on input field for changing accepted data to number
        </span>
    </div><br>

    <div class="pxv-4">
        <div class="bc-silver">
            <div class="form-field pxv-10" data-init data-form="validate" data-resp=".resp">
                <div class="form-title c-red-dd">
                    <h2>My Form</h2>
                </div> <br>
                <div class="resp"></div>
                <fieldset class="i-flex-full">
                    <button class="flex-child bc-silver-d c-white padd-x-10 flex-ico no-wrap">First Number</button>
                    <input type="text" name="first" required placeholder="10 chars max" data-max="10" data-type="number" class="flex-full">
                </fieldset>
                <fieldset class="i-flex-full padd-right-10">
                    <button class="flex-child bc-silver-d c-white padd-x-10 flex-ico no-wrap">Second Number</button>
                    <input type="number" name="second" required placeholder="10 chars max" data-max="10" data-type="number" class="flex-full">
                </fieldset>
                <fieldset class="i-flex-full bc bc-red-d bh-red-dd c-white anc-btn-link">
                    <button type="submit" data-type="submit" class="flex-btn-full c-white pxv-10"> submit </button>
                </fieldset>
            </div>            
        </div>
    </div> <br>

    <div class="font-em-d87 pxs-2">  
    
        <b>Note that:</b> When the form field is not initialized with <code>data-init</code>, all <code>input</code> elements with <code>type='number'</code> may not 
        display message when string is added intead of number. They however, will be validated
        internally. To solve this issue, consider using an input <code>&lt;input type="text"/&gt;</code> then set the data type to number i.e 
        <code>&lt;input type="text" data-type="number"/&gt;</code> <br> <br>
        
        <div class="font-em-d87 bold">
            <div class="box text-center">
                <a href="<?= DomUrl('docs/other-features/javascript/formvalidator') ?>" class="anc-btn-link">
                    <span class="span-btns rad-2 bc-sky-blue-dd c-white padd-6 control-btns"> << Home </span>
                </a>
                <a href="sample2.html" class="anc-btn-link">
                    <span class="span-btns rad-2 bc-red-dd c-white padd-6 control-btns"> << PREVIOUS </span>
                </a>
                <a href="sample4.html" class="anc-btn-link">
                    <span class="span-btns rad-2 bc-lime-dd c-white padd-6 control-btns"> NEXT >> </span>
                </a>
            </div>
        </div>

    </div>

                </div> <br>
            </div>
        </div>

    </body>

    
    <script>
        formValidator();

        function htmlentities(str) {
            return String(str).replace(/&/g, '&amp;');
        }
    </script>

</html>

