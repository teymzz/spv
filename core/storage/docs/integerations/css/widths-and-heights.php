<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=.9, maximum-scale=1.0, user-scalable=1" />
<meta name="description" content="website_description" />
<link rel="icon" href="http://localhost/trial/res/main/images/icons/favicon.png" />
        <title>Css Integerations - Widths</title>
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
                    

    
    <style rel="css.tutorial"> 

     body{
          color: rgb(111, 110, 110);
     }

     .pre-area{
          font: menu;
          font-size: .85em;
          display: inline-block;
          width:100%;
          background-color : rgba(var(--silver));
      }
  
     .pre-area.fix {
         font-size: 1em;
     }
     
     pre.pre-code {
          overflow: auto hidden;
          color: #4f58a0;
          font-size: .95em; 
          margin-bottom:0;
          padding-top:1em;
     }
     
     pre .comment {
          color: #909090;
     }
  
     .lacier.active {
          background-color: #3ecb32;
          color: white;
          box-shadow: 0 0 2px 2px #3ecb32;
     }
  
     .lacier.active .c-lime-dd{
          color: white;
     }  

     ul > li > a{
          color:inherit;
     }   

     ul > li > a:hover{
          color:inherit;
     }  

     [class*="foot-note"] {
         color: rgb(32, 130, 130);
     }

     :where(.d85){
          font-size: .85em;
     }
     :where(.d87){
          font-size: .87em;
     }
     :where([class*="foot-note"]){
          font-size: .87em;
     }
     :where([class*="foot-note"] .head){
          font-weight: 600;
     }

     [class*="rule-dashed"] {
          border-bottom: dashed .1em;
     }   
     
     [class*="hyperlink"] {
          border-bottom: dashed .1em;
     }

     .olist {
          font-family: calibri;
          color:#9d6216;
     }

     .control{
          right: 10px;
          top: 10px;
          opacity: 1;
          display: inline-block;
          transition: opacity .8s ease-in-out;
          z-index: 10;
      }

      .control .controller.fade-out{
          transition: transform .2s ease-in-out, opacity .3s ease-in-out ;
          transform: rotate(360deg);
      }

      .control .controller:not(.bi-x).fade-out{
          opacity: 0;
      }
      
      .blurry{
          z-index: 0;
      }

      @media (min-width: 1001px){

          .control{
               display: none;
          }

          .nav-left{
               left: 0;
          }

          .tutorial{
               width: calc(100% - 300px);
               float:right;
          }
          .blurry{
               display: none !important;
           }
     }


 

     body {
          color: rgb(111, 110, 110);
          background-color: #f1f1f1;
     }

 </style>
    


    
    <div class="padd-x-4"> <br>

        <div class="flex-in midv font-em-2 bc-silver rad-4 calibri">
            <a href="<?= DomUrl('docs/other-features/css') ?>"><div class="fb-6 pxs-20 c-grey bc-silver-d pxv-10 mxr-10">Css</div></a>
            <div class="c-orange-dd">utility classes</div>
        </div><br>

<span class="font-em-d87">
    <div class="wid-fit c-olive font-em-1d5">Element widths</div>
    There are four basic utilty classes that can be used to specify content element widths. These 
    classes are listed below: <br><br>
    <span class="form-field">
        
        <code class="main">wid-full</code> - 100% width<br>
        <code class="main">wid-min</code> - sets element width to min-content<br>
        <code class="main">wid-max</code> - sets element width to max-content<br>
        <code class="main">wid-fit</code> - sets element width to fit-content<br>
        <code class="main">wid-i</code> - inherit parent width property <br>

    </span><br>
    Although, the <code>wid-full</code> is specially designed to set element width to 100%, the directive 
    <code>-full</code> may also be allowed in some display items like flex items and boxes as though it is not
    applicable in all cases. Another utility class that can be used to set an element's width is the  <code>vx-full</code> class.
    It sets the view width of any content (i.e relative to the screen width). Other width setting classes are listed below: <br>
    <br>
    <span class="form-field">
        
        <code class="main">wper-50</code> - sets width at 50%<br>
        <code class="main">full-width</code> - sets element width at 100%<br>
        <code class="main">ll-full</code> - sets element width at 100%<br>

    </span>    <br>
    The <code>full-width</code> and <code>ll-full</code> have a much higher effect when applied on elements than <code>wid-full</code> 
    though they are not strictly defined. 
</span>

    </div> <br>

    <div class="padd-x-4">

        <span class="font-em-d85">
            <div class="wid-fit c-olive font-em-1d5">Element heights</div>
            Heights are mostly set based on the screen height. The two classes <code>vh-</code> and <code>vhm-</code> both measures the height of element 
            using the <code>vh</code> unit. While the <code>vh-</code> classes measure based on height, the <code>vhm-</code> classes measures based on minimum height.
            Heights range from the vh-80 to vh-90 utility classes. 
            The vh-80 series include <code>vh-80</code>, <code>vh-85</code> and <code>vh-87</code> utility classes while the vh-90 series include <code>vh-90</code>, <code>vh-95</code>,
            and <code>vh-97</code> classes. This same logic is applied for the <code>vhm-</code> series. The digits on these classes identifies the vertical height (vh) they give. '
            There are other classes that measures heights based on percentage. An example is the <code>h-full</code> class which sets the height of element to 100%.
        </span>

    </div> <br>

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

