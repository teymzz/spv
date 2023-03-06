

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/trial/res/main/images/icons/favicon.png">
    <title></title>
    
    <link  rel="stylesheet" type="text/css" href="http://localhost/trial/res/main/css/res.css" x-debug="res-css"><script src='http://localhost/trial/res/main/js/jquery-3.6.0.js'></script><script src='http://localhost/trial/res/main/css/bootstrap/js/bootstrap.min.js'></script><link  rel="stylesheet" type="text/css" href="http://localhost/trial/res/main/css/mdb5/css/mdb.min.css"><script src='http://localhost/trial/res/main/js/config.js'></script><script src='http://localhost/trial/res/main/js/core.js'></script><script src='http://localhost/trial/res/main/js/custom.js'></script><script src='http://localhost/trial/res/main/js/device.js'></script><script src='http://localhost/trial/res/main/js/loadImages.js'></script><script src='http://localhost/trial/res/main/js/formValidator.js'></script><script src='http://localhost/trial/res/main/js/jquery.mousewheel.js'></script><script src='http://localhost/trial/res/main/js/anime.js'></script><script src='http://localhost/trial/res/main/js/init.js'></script> 
    <style rel="css.tutorial"> 

     body{
          color: rgb(111, 110, 110);
     }

     .pre-area{
          font: menu;
          font-size: .85em;
          display: inline-block;
          width:100%;
          background-color : #f4f4f4;
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


 </style>
    



    
</head>
<body>

    <script>
        $(document).ready(function(){
            $('.control').click(function(){
                $btn = $(this).find('.controller')
                $isActive = $btn.hasClass('active');

                $btn.toggleClass('fade-out')
                $('.nav-left').toggleClass('in');
                $('.blurry').fadeToggle(function(){
                    if(!$isActive) { 
                        $btn.removeClass('bi-list').addClass('active bi-x') 
                    }else{
                        $btn.removeClass('active bi-x').addClass('bi-list') 
                    }
                });
            }) 
            $('.blurry').click(function(){
                $btn = $('.controller')
                $btn.toggleClass('fade-out')
                $('.nav-left').toggleClass('in');
                $('.blurry').fadeToggle(function(){
                    $btn.removeClass('active bi-x').addClass('bi-list')
                });
            });
        })
    </script>
    <section class="">
        <div class="control font-em-2 fixed c-orange box">
            <div class="flex px-40 mid rad-r shadow anc-btn-link bc-white">
                <span class="bi-list controller flex"></span>
            </div>
        </div>
         

  <!-- @lay('build.co.coords:header') -->

   

     <style rel="css.navbars"> 

     .nav-left{
          min-height: 100vh;
          width: 300px;
          background-color: #f2f2f2;
          box-shadow: 0px 1px 1px 1px #e0dddd;
          display: inline-block;
          left: -300px;
          transition: left .2s ease-in-out;
          z-index: 1;
     }

     .nav-left.in{
          left: 0;
     }

     .nav-left ul > li:hover{
          color: var(--orange-dd);
          cursor:pointer;
     }

     .nav-left ul a{
         color: rgb(114, 110, 105);
         list-style: none; 
     }

     .nav-left ul li {
         list-style: none;
     }

     .nav-left ul li:hover .ico:before {
         content: "◈";
         display: inline-block;
         padding: 4px;
         color: #bebebe;
     }

     .nav-left ul li a.active {
          color: orange;
     }

     .tutorial{
          width: 100%;
          transition: width .2s ease-in-out;
     }

     @media (min-width: 1001px){

          .nav-left{
               left: 0 !important;
          }

          .tutorial{
               width: calc(100% - 300px);
               float:right;
          }
     }
 </style>

     <nav class="nav-left fixed">

          <div class="flex pxv-10">
               <a href="<?= DomUrl('') ?>" class="flex">
                    <div class="flex-icon box bd-silver border rad-r flow-hide bc-silver ico-spin ripple">
                         <div class="px-40 b-cover" data-src="http://localhost/trial/res/main/images/icons/favicon.png"></div>
                    </div>
               </a>
               <div class="flex midv mxl-8 fb-9 font-menu font-em-1d2" style="color: #202dd5">SPOOVA</div>
          </div> <br>

          <ul class="list-square">
               <li> <a href="<?= DomUrl('tutorial/installation') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Installation</a> </li>
               <li> <a href="<?= DomUrl('tutorial/live-server') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Live Server</a></li>
               <li> <a href="<?= DomUrl('tutorial/database') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Database</a> </li>
               <li> <a href="<?= DomUrl('tutorial/resource') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Resource class</a> </li>
               <li> <a href="<?= DomUrl('tutorial/routings') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Routing System</a> </li>
               <li> <a href="<?= DomUrl('tutorial/sessions') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Sessions</a> </li>
               <li> <a href="<?= DomUrl('tutorial/forms') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Forms</a> </li>
               <li> <a href="<?= DomUrl('tutorial/useraccounts') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Users</a> </li>
               <li> <a href="<?= DomUrl('tutorial/database/data-model') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling DBModels</a> </li>
               <li> <a href="<?= DomUrl('tutorial/classes') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Helper Classes</a> </li>
               <li> <a href="<?= DomUrl('tutorial/functions') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Helper Functions</a> </li>
               <li> <a href="<?= DomUrl('tutorial/directives') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Helper Directives</a> </li>
               <li> <a href="<?= DomUrl('tutorial/setters') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Global Setters</a> </li>
               <li> <a href="<?= DomUrl('tutorial/mails') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Mails</a> </li>
               <li> <a href="<?= DomUrl('tutorial/cli') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Cli Commands</a> </li>         
               <li> <a href="<?= DomUrl('tutorial/plugins') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Composer and Plugins</a></li>
               <li> <a href="<?= DomUrl('tutorial/wmv') ?>" class="<?= inPath('active') ?>" ><span class="ico ico-spin"></span>The <span class="fb-6 pointer" title="Windows Models View">WMV</span> PATTERN</a></li>
               <li> <a href="<?= DomUrl('tutorial/apis') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>The <span class="fb-6 pointer" title="Windows Models View">WMV</span> APIs</a> </li>
          </ul>
      
     </nav>



  <div class="box-full pxl-2 bc-white-dd pull-right">
    <section class="pxv-20 tutorial database bc-white">
      <div class="font-em-1d2">

        
 <div class="font-menu pvs-4"> <a href="http://localhost/trial/tutorial">Tutorial</a> <span class="bi-chevron-right"></span> <a href="http://localhost/trial/tutorial/directives">Directives</a>  </div>


        <div class="start font-em-d8">


          <div class="font-em-1d5 c-orange">Directives</div> <br>  
          
          <div class="directives-intro">
              <div class="fb-6">Introduction</div>
              <div class="">
                  Helper directives are predefined template directives that are used within 
                  template files. These directives are preceeded by an <code>@</code> symbol. 
                  They are listed below:
                  <br><br>

                  <ul class="font-em-d9">
                    <li><a href="#meta">@meta</a></li>
                    <li><a href="#res">@res</a></li>
                    <li><a href="#src">@src / ress</a></li>
                    <li><a href="#import">@import</a></li>
                    <li><a href="#live">&#64;live</a></li>
                    <li><a href="#domurl">@domurl</a></li>
                    <li><a href="#assets">@assets</a></li>
                    <li><a href="#mapp">@mapp</a></li>
                    <li><a href="#mass">@mass</a></li>
                    <li><a href="#images">@images</a></li>
                    <li><a href="#include">&#64;include</a></li>
                    <li><a href="#template">@template</a></li>
                    <li><a href="#meta">@title</a></li>
                    <li><a href="#layout">@layout</a></li>
                    <li><a href="#inpath">@inPath</a></li>
                    <li><a href="#ispath">@isPath</a></li>
                    <li><a href="#style">@style</a></li>
                    <li><a href="#script">@script</a></li>
                    <li><a href="#onscript">@onscript</a></li>
                    <li><a href="#onshow">@onShow</a></li>
                    <li><a href="#onhide">@onHide</a></li>
                    <li><a href="#flash">@flash</a></li>
                    <li><a href="#auth">&#64;auth:</a></li>
                    <li><a href="#guest">&#64;guest:</a></li>
                    <li><a href="#authdirect">@authdirect</a></li>
                    <li><a href="#guestdirect">@guestdirect</a></li>
                    <li><a href="#btn">&#64;btn</a></li>
                    <li><a href="#post">&#64;post</a></li>
                    <li><a href="#get">&#64;get</a></li>
                    <li><a href="#old">&#64;old</a></li>
                    <li><a href="#csrf">&#64;csrf</a></li>
                    <li><a href="#error">&#64;error</a></li>
                    <li><a href="#vdump">&#64;vdump</a></li>
                    <li class="conditionals c-olive">
                      <span class="fb-6 calibri pvs-10 box">CONDITIONALS</span>
                      <ul class="list-square pxs-14">
                        <li><a href="#conditionals">@if</a></li>
                        <li><a href="#conditionals">@for</a></li>
                        <li><a href="#conditionals">@foreach (or @each)</a></li>
                        <li><a href="#conditionals">@do</a></li>
                        <li><a href="#conditionals">@while</a></li>
                        <li><a href="#conditionals">@switch</a></li>
                        <li><a href="#conditionals">@break</a></li>
                      </ul>
                    </li>
                  </ul>
                  
                  
              </div> 
          </div>
          
          <div id="meta" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">1. @meta</div>
              </div> <br>
              
              <div>
                This directive is used to load meta tags that are set by default within the 
                <code>$_ENV</code> variable. It takes the parameter <code>dump</code> or 
                <code>drop</code> which is one of its methods. BY defining <code>dump</code>, 
                it dumps all the default meta tag that was set with the help of the <code>Meta</code> class.
                Before this tag can work successfully, the default meta tags must have been properly configured
                in the <code>icore/filemeta</code> file. You can learn how to set up meta tags using <code>Meta</code> 
                class from <a href="<?= DomUrl('docs/classes/meta') ?>">here</a>.
                
                <br><br>
                <div class="font-menu mvb-6">The example below shows how the meta 
                directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  <span class="comment">&lt;head&gt;</span> &#64;meta('dump') <span class="comment">&lt;/head&gt;</span> 
                  </pre>

                </div>
                <!-- code line ended -->

              </div>
        
          </div>   
          
          <!---------------------------- res -->
          <div id="res" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">2. &#64;res</div>
              </div> <br>
              
              <div>
                The <code>@Res</code> directive is a bit different from other directives. It has two 
                different modes of application which resolves into different responses. <br>
                <ul class="font-em-d9 mvt-6">
                  <li>&#64;Res::import()</li>
                  <li>&#64;Res()</li>
                </ul> 
                
                The <code>&#64;Res::import</code> works similarly as the <code>Res::import()</code> method 
                while the <code>&#64;Res()</code> is used to resolve static files. 

                <div class="font-menu mvb-6">The example below shows how the <code>&#64;Res()</code> 
                directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  &#64;Res('res/file.css') <span class="comment no-select"> &lt;script src="http://localhost/spoova/res/file.css"&gt;&lt;/script&gt;</span>

  &#64;Res('file.js') <span class="comment no-select"> &lt;link href="http://localhost/spoova/file.js" rel="stylesheet" type="text/css"/&gt; </span>
                  </pre>

                </div>
                <!-- code line ended -->

              </div>
        
          </div> 
          
          <!---------------------------- src -->
          <div id="src" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">3. &#64;src / &#64;ress</div>
              </div> <br>
              
              <div>
                The <code>@src</code> directive returns resources from the <code>res/</code> directory. If the path 
                of file supplied exists within the res folder, an equivalent http address of the static file is returned<br>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  &#64;src('res/file.css') <span class="comment no-select"> http://site-domain/res/file.css</span>
  
  &#64;ress('res/file.css') <span class="comment no-select"> http://site-domain/res/file.css</span>
                  </pre>

                </div>
                <!-- code line ended -->

              </div>
        
          </div> 
          
          <!-------------------------------- import -->
          <div id="import" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">4. @import</div>
              </div> <br>
              
              <div>
                The <code>@import</code> directive is similar to the <code>Res::import()</code> 
                function. It is specifically being used to import two things: <br>

                <ul>
                  <li>static resources group <code>&#64;import(':group')</code></li>
                  <li>live server <code>&#64;import('::watch')</code></li>
                </ul>
                
                <div class="font-menu mvb-6">The example below shows how the import 
                directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  <span class="comment">&lt;head&gt;</span>
    &#64;import(':header')  
    &#64;import('::watch')  
  <span class="comment">&lt;/head&gt;</span> 
                  </pre>

                </div>
                <!-- code line ended -->

              </div> <br>
        
          </div>  

          <!---------------------------------- live -->
          <div id="live" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">5. &#64;live / &#64;live()</div>
              </div> <br>
              
              <div>
                The <code>&#64;live</code> directive is the shorthand directive for <code>&#64;Res::import('::watch')</code> 
                function. It is specifically being used to import the live server into a specific template engine if 
                switched off by default. 
              </div>
        
          </div>  
          
          <!--------------------------------- domurl -->
          <div id="domurl" class=""> 
            <br>
            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
              <div class="flex-full">6. &#64;domurl</div>
            </div> <br>
            
            <div>
              Just like the domurl function, <code>@domurl</code> is being used to resolve 
              local urls into http protocol urls. Within the spoova framework, developers should 
              use the <code>domurl</code> when linking static files as it properly maps the local url
              supplied. This creates a handshake between : <br> <br>
              <ul>
                <li>offline - online projects</li>
                <li>desktop - mobile device developments</li>
              </ul> 
              
              <div class="font-menu mvb-6">The example below shows how the import 
              directive can be applied in template files</div>

              <!-- code line started -->
              <div class="pre-area shadow">

                <pre class="pre-code">
  <span class="comment">&lt;head&gt;</span>
    &lt;a href="&#64;domurl('res/images/myimage.jpg')"&gt; myimage &lt;/a&gt;   

    &lt;link href="&#64;domurl('https://site.com/assets/css/site.css')" /&gt; 
  <span class="comment">&lt;/head&gt;</span> 
                </pre>

              </div>
              <!-- code line ended -->

            </div> <br>
        
          </div> 


          <!------------------------------- assets -->
          <div id="assets" class=""> 
            <br>
            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
              <div class="flex-full">7. &#64;assets</div>
            </div> <br>
            
            <div>
              The <code>@assets</code> directive is a shorthand directive that loads static files directly from the  
              assets folder which is a subdirectory of the <code>res/</code> folder. This directive can also be applied 
              to load grouped static files just like the <code>&#64;Res()</code> method.
              <br><br>

              <div class="font-menu mvb-6">The example below shows how the directive can be applied in template files</div>

              <!-- code line started -->
              <div class="pre-area shadow">
                <div class="pxv-10 bc-silver">Example 1 - Loading urls</div>
                <pre class="pre-code">
  &#64;assets('css/file.css') <span class="comment no-select">// &lt;link href=":domainurl/res/assets/css/file.css"/&gt;</span>
                </pre>

                <div class="pxv-10 bc-silver">Example 2 - Importing resource groups</div>
                <pre class="pre-code">
  &#64;assets(':headers') <span class="comment no-select">// import headers </span>
                </pre>

              </div>
              <!-- code line ended -->

            </div> <br>
        
          </div> 

          <!------------------------------- mapp -->
          <div id="mapp" class=""> 
            <br>
            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
              <div class="flex-full">8. &#64;mapp</div>
            </div> <br>
            
            <div>
              The <code>@mapp</code> directive is a shorthand directive that returns files url using 
              static resources main folder (i.e res/main) as its base path
              <br><br>

              <div class="font-menu mvb-6">The example below shows how the directive can be applied in template files</div>

              <!-- code line started -->
              <div class="pre-area shadow">

                <pre class="pre-code">
  &lt;img src="&#64;mapp('images/image.jpg')"&gt; <span class="comment no-select">// &lt;img src=":domainurl/res/main/images/image.jpg"/&gt;</span>
                </pre>

              </div>
              <!-- code line ended -->

            </div> <br>
        
          </div> 

          <!------------------------------- mapp -->
          <div id="mass" class=""> 
            <br>
            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
              <div class="flex-full">9. &#64;mass</div>
            </div> <br>
            
            <div>
              The <code>@mass</code> directive is a shorthand directive that returns files url using 
              static resources main folder (i.e res/assets) as its base path
              <br><br>

              <div class="font-menu mvb-6">The example below shows how the directive can be applied in template files</div>

              <!-- code line started -->
              <div class="pre-area shadow">

                <pre class="pre-code">
  &lt;img src="&#64;mass('images/image.jpg')"&gt; <span class="comment no-select">// &lt;img src=":domainurl/res/assets/images/image.jpg"/&gt;</span>
                </pre>

              </div>
              <!-- code line ended -->

            </div> <br>
        
          </div> 
          
          <!-------------------------------- images -->
          <div id="images" class=""> 
            <br>
            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
              <div class="flex-full">10. &#64;images</div>
            </div> <br>
            
            <div>
              The <code>@images</code> is a shorthand directive that loads images directly from the  
              images folder which is a subdirectory of the <code>res/assets/</code> folder. When it is used, 
              images from this folder will be loaded into the webpage if exists. Subdirectories of that folder 
              can also be applied.
              <br><br>

              <div class="font-menu mvb-6">The example below shows how the directive can be applied in template files</div>

              <!-- code line started -->
              <div class="pre-area shadow">

                <pre class="pre-code">
  &lt;img src="&#64;images('myimage.jpg')"&gt; <span class="comment no-select">// &lt;img src="/res/assets/images/image.jpg"/&gt;</span>
                </pre>

              </div>
              <!-- code line ended -->

            </div> <br>
        
          </div> 
          
          <!---------------------------------- include -->
          <div id="include" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">11. &#64;include</div>
              </div> <br>
              
              <div>
                The <code>&#64;include()</code> is a shorthand directive for php internal <code>include</code> function. Any file 
                included should only follow the document root. For example, if a file <code>file.php</code> exists within the project root,
                then including that file will be as follows:
                <br><br>

                <div class="font-menu mvb-6">The example below shows how the directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  &#64;include('file.php') <span class="comment no-select">// include "file.php" from the document root.</span>
                  </pre>

                </div>
                <!-- code line ended -->

              </div> <br>
        
          </div> 
          
          <!-------------------------------- template -->
          <div id="template" class=""> 
            <br>
            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
              <div class="flex-full">12. &#64;template()</div>
            </div> <br>
            
            <div>
              The <code>&#64;template()</code> function is used to load templates into another template file. A template 
              is more like a layout structure of how a page should look like. When such template has been successfully created, 
              a specific part of the layout can be allocated for external structure to fill up using the <code>&#64;yield()</code>
              directive. This is explained by using file1.rex.php and file2.rex.php below as examples.
              <br><br>

              <div class="font-menu mvb-6">The example below shows how the <code>&#64;template</code> and <code>&#64;yield</code> directives can be applied in template files</div>

              
              <!-- code line started -->
              <div class="pre-area shadow">
                <div class="pxv-6 bc-silver font-menu mvb-6">file1.rex.php</div>
                <pre class="pre-code">
  
    &lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
      &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
      &lt;title&gt;Document&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;

      @yield()

    &lt;/body&gt;
    &lt;/html&gt;
                    </pre>

              </div>
              <!-- code line ended -->

            </div> <br>

            
            <!-- code line started -->
            <div class="pre-area shadow">
              <div class="pxv-6 bc-silver font-menu mvb-6">file2.rex.php</div>
              
              <pre class="pre-code">
  <span class="comment no-select">// include "file.php" from the document root.</span>
  &#64;template('file1.rex.php')
  
    This is a content from file2.rex.php

  &#64;template;
              </pre>

            </div> <br>
            <!-- code line ended -->

            <div class="font-menu mvt-10">file2.rex.php will be resolved to </div>

            <!-- code line started -->
            <div class="pre-area shadow mvt-10">

              <div class="pxv-10 bc-silver no-select"> Include "file.php" from the document root.</div>
              <pre class="pre-code">
  
    &lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
      &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
        &lt;title&gt;Document&lt;/title&gt;
      &lt;/head&gt;
      &lt;body&gt;

        This is a content from file2.rex.php

      &lt;/body&gt;
    &lt;/html&gt;
                  </pre>

            </div>
            <!-- code line ended -->


            <div class="font-menu mvt-6">Note: when building template files, 
              the template files should be separated from the real contents. Templates by 
              default are loaded from the <code>windows\Rex</code> folder. 
              It is advisable that the real content may be located within the
              template engine <code>rex</code> folder directory while the template 
              files may be in a subdirectory for proper file organization. Also, when 
              a parent template file has the live server turned on, a child page 
              can be employed to turn it off by calling the <code>:off</code> directive 
              on the template url just as below:
            </div>

            <!-- code line started -->
            <div class="pre-area shadow mvt-6">

              <div class="pxv-10 bc-silver no-select"> Turn off live server on template import.</div>
            <pre class="pre-code">
  &#64;template('file1:off')
  
    This is a content from file2.rex.php

  &#64;template;
              </pre>

            </div>
            <!-- code line ended -->


          </div>

          <!-- title -->
          <div id="title" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">13. @title</div>
              </div> <br>
              
              <div>
                This directive is used to set a webpage title. It works along with the <code>&#64;template</code> 
                directive. It is important to declare this above the <code>&#64;template</code> directive. When 
                importing templates, the application will first check for the page title ad successfully map
                it to the current page.
                
                <br><br>
                <div class="font-menu mvb-6">The example below shows how the title 
                directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  &#64;title('home')
  @template('some-template-file')@

  <span class="comment">...new content here...</span>

  &#64;template;
                  </pre>

                </div>
                <!-- code line ended -->

              </div>
        
          </div> 
          
          <!------------------------------- layout -->
          <div id="layout" class=""> 
            <br>
            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
              <div class="flex-full">14. &#64;layout()</div>
            </div> <br>
            
            <div>

              <div class="font-menu font-em-d9 helvetica">
                The <code>&#64;layout()</code> function is similiar to the <code>&#64;template()</code> directive.
                While <code>&#64;template</code> loads a full layout from a file, the <code>&#64;layout</code> directive picks a 
                layout from a group of layouts within a file. When grouping layouts, it is not advisable to put all eggs 
                in one basket as they will break. Layout files are only used to group files of similar functionalities together.
                For example, a <b>footer</b>  and <b>header</b> content can be grouped together in one single layout file, each separated with its own layout id.
                When importing or picking a layout from a layout file, the id can then be called and only the specific layout relative to that id 
                will be returned.
              </div>
              <br>

              <div class="font-menu mvb-6">The example below shows how the <code>&#64;layout</code> and <code>&#64;lay</code> directives can be applied in template files</div>

              
              <!-- code line started -->
              <div class="pre-area shadow">
                <div class="pxv-6 bc-silver font-menu mvb-6">lay.rex.php</div>
                <pre class="pre-code">
    &#64;layout:header
      &lt;header&gt; This is my page header &lt;/header&gt; 
    &#64;layout;  


    &#64;layout:footer
      &lt;header&gt; This is my page footer &lt;/header&gt; 
    &#64;layout;        
                    </pre>
              </div>
              <!-- code line ended -->

            </div> <br>

            
            <!-- code line started -->
            <div class="pre-area shadow">
              <div class="pxv-6 bc-silver font-menu mvb-6">page.rex.php</div>
              <pre class="pre-code">
  
      &lt;!DOCTYPE html&gt;
      &lt;html lang="en"&gt;
      &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
        &lt;title&gt;Document&lt;/title&gt;
      &lt;/head&gt;
      &lt;body&gt;

        &#64;lay('lay:header') 

      
        <span class="comment no-select">// other contents here...</span>
      

        &#64;lay('lay:footer') 
        
      &lt;/body&gt;
      &lt;/html&gt;
                    </pre>
            </div> <br><br>
            <!-- code line ended -->

            <!-- code line started -->
            
            <div class="pre-area shadow">
              <div class="pxv-6 bc-silver font-menu mvb-6">page.rex.php will be resolve to </div>

              <pre class="pre-code">
  
    &lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
      &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
      &lt;title&gt;Document&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;

      &lt;header&gt; This is my page header &lt;/header&gt;


      &lt;footer&gt; This is my page footer &lt;/footer&gt;

    &lt;/body&gt;
    &lt;/html&gt;
                  </pre>

            </div>
            <!-- code line ended -->

            <div class="font-menu mvb-6"> 
              <div class="pvs-8">Note: In the above,</div>
              <code>&#64;lay</code> is the directive for importing layouts <br>
              <code>lay</code> is the file name (or file path if within subdirectory) <br>
              <code>:</code> column is used to denote the id while
              <code>footer</code> or <code>header</code> is the id name without special characters.
            </div> 

          </div>

          
          <!------------------------------- inpath -->
          <div id="inpath" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">15. &#64;inPath</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                  The <code>@inPath</code> checks if the current request url has a parent address which is supplied 
                  within the <code>&#64;inPath()</code> directive. If the parent address matches, the second argument 
                  supplied will be returned.
                </div>
                <br>

                <div class="font-em-d87 mvb-6">The example below shows how the <code>&#64;inPath()</code> directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">
  <div class="pxv-10 bc-silver">Examples with assumed test pages</div>
                  <pre class="pre-code">
  <span class="comment no-select">
  Assumed Page 1: http://localhost/tutorial/resource/item
  Assumed Page 2: http://localhost/tutorial/some/page
  </span> 
  <span class="comment">Page 1:</span> &#64;inPath('tutorial.resource', 'hi')  <span class="comment">returns "hi"</span> 
  <span class="comment">Page 2:</span> &#64;inPath('tutorial.resource', 'hi')  <span class="comment">returns ""</span> 
                  </pre>

                </div>
                <!-- code line ended -->


                <!-- code line started -->
                <div class="pre-area shadow">
  <div class="pxv-10 bc-silver">Example - Integrating domUrl with inPath </div>
                  <pre class="pre-code">
  &lt;a href="&#64;domUrl('tutorial/resource')" class="&#64;inPath(':dom-path', 'active')"&gt; 
  &lt;a href="&#64;domUrl('tutorial/users')" class="&#64;inPath(':dom-path', 'active')"&gt; 
                  </pre>

                </div>
                <!-- code line ended -->

                <div class="font-em-d8 mvt-10">
                  In the code above, <code>active</code> will be returned once the <code>&#64;domUrl()</code> path is 
                  visited. This happens because the <code>:dom-path</code> will automatically use the last path supplied on 
                  <code>@domUrl</code>, saving us the time to rewrite urls. This  behaviour is good for navigation bar menus. 
                  Also, for this to work, the <code>&#64;inPath()</code> must come immediately after <code>&#64;domUrl()</code> directive is used. Now  
                  it even gets easier when only one argument is supplied. If it is only one single argument supplied on  <code>&#64;inPath()</code>, then 
                  <code>&#64;inPath</code> will automatically call the <code>:dom-path</code> argument on itself. This can save a lot of time when building 
                  web applications just as below:
                </div> <br>

                <!-- code line started -->
                <div class="pre-area shadow">
  <div class="pxv-10 bc-silver">Example 2 - Integrating domUrl with inPath </div>
                  <pre class="pre-code">
  &lt;a href="&#64;domUrl('tutorial/resource')" class="&#64;inPath('active')"&gt; 
  &lt;a href="&#64;domUrl('tutorial/users')" class="&#64;inPath('active')"&gt; 
                  </pre>

                </div>
                <!-- code line ended -->
                
              </div> <br>
        
          </div>  
          
          <!------------------------------- inpath -->
          <div id="inpath" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">16. &#64;isPath</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                  The <code>@isPath</code> works similary as <code>@inPath</code> directive except that the exact path 
                  must be the same. This means that unlike <code>@inPath</code> which uses parent url, <code>@inPath</code> 
                  matches only the exact url supplied
                </div>
                <br>

                <div class="font-em-d87 mvb-6">The example below shows how the <code>&#64;inPath()</code> directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">
  <div class="pxv-10 bc-silver">Examples with assumed test pages</div>
                  <pre class="pre-code">
  <span class="comment no-select">
  Assumed Page 1: http://localhost/tutorial/resource
  Assumed Page 2: http://localhost/tutorial/resource/item
  </span> 
  <span class="comment">Page 1:</span> &#64;isPath('tutorial.resource', 'hi')  <span class="comment">returns "hi"</span> 
  <span class="comment">Page 2:</span> &#64;isPath('tutorial.resource', 'hi')  <span class="comment">returns ""</span> 

                  </pre>

                </div>
                <!-- code line ended -->

                <div class="font-em-d8 mvt-10">
                  The code above reveals that when <code>&#64;inPath</code> is used in page 1, it returned the second argument because 
                  the exact url matches the supplied argument for the directive. However, in page 2, the value returned is empty 
                  because the the request url is not the same with value supplied. This directive can also be integerated with <code>&#64;domUrl()</code> 
                  just like  the <code>&#64;inPath()</code> directive.
                </div>

              </div> <br>
        
          </div>  
          
          <!------------------------------- style -->
          <div id="style" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">17. &#64;style</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                  This is used to pull the contents of a rex css template file into an html template file. It works similarly as the  
                  layout method. The rex css template file is structured to contain multiple divisions of css codes. The <code>@style</code> 
                  is a directive that is structure to pull only specifically needed divisions of css codes from the css template file. 
                </div>
                <br>

                <div class="font-em-d87 mvb-6">The example below shows how the <code>&#64;style</code> directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">
  <div class="pxv-10 bc-silver">Example: Css Rex File (index.rex.css)</div>
                  <pre class="pre-code">
  <span class="c-orange-d">#style:css1</span>
    <span class="c-olive">
    body {
      background-color:red;
    }
    </span>
  <span class="c-orange-d">#style;</span>

  <span class="c-orange-d">#style:css2</span>
    <span class="c-olive">
    body {
      font-size:1em;
    }
    </span>
  <span class="c-orange-d">#style;</span>

                  </pre>

                </div>
                <!-- code line ended -->

                <!-- code line started -->
                <br>
                <div class="pre-area shadow">
                  <div class="bc-silver comment no-select pxv-10">Now, we can import our css file codes using the division name</div>
                  <pre class="pre-code">
  &#64;style('index:css1')  <span class="comment">returns code in css1 above</span> 
  &#64;style('index:css2')  <span class="comment">returns code in css2 above</span> 
  
  <span class="comment no-select">We can also import both css at once</span>

  &#64;style('index:css1:css2')  <span class="comment">returns code in css1 & css2 above</span> 
                  </pre>
                </div>
                <!-- code line ended -->

                <div class="font-em-d8 mvt-10">
                  In the example above, the contents of the rex css template file can be imported into any template file just as
                  shown above. It is important not to store heavy css files into the css rex template file as this may break the 
                  application. Developers should organize and simplify their codes into different files which can then be imported 
                  by the <code>&#64;style()</code> directive. It is also important to note that every rex file must be located within the 
                  rex directory or subdirectory folders as this is the location the application will start searching for files from. In 
                  situtation where our <code>index.rex.css</code> file is in <code>rex/css</code> directory for example, then the path can be 
                  resolved by using dots as shown below
                </div> <br>

                <!-- code line started -->
                <div class="pre-area shadow">
  <div class="pxv-10 bc-silver">Example: Css Rex File (rex.css.index.rex.css)</div>
                  <pre class="pre-code">
  &#64;style('css.index:css1')  <span class="comment">resolves as rex/css/index.rex.css:css1</span>  
                  </pre>

                </div>
                <!-- code line ended -->

                
              </div> <br>
        
          </div>  
          
          <!------------------------------- script -->
          <div id="script" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">18. &#64;script</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                  This is used to pull the contents of a rex css template file into an html template file. It works similarly as the  
                  layout method. The rex css template file is structured to contain multiple divisions of css codes. The <code>@style</code> 
                  is a directive that is structure to pull only specifically needed divisions of css codes from the css template file. 
                </div>

                <div class="font-em-d8 mvt-6 mvb-6">The example below shows how the <code>&#64;style</code> directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">
  <div class="pxv-10 bc-silver">Example: Javascript Rex File (index.rex.js)</div>
                  <pre class="pre-code">
  <span class="comment no-select">
  <span class="c-orange-d">#script:js1</span>
    <span class="c-olive">
    function hi(){
      console.log('hi')
    }
    </span>
  <span class="c-orange-d">#script;</span>

  <span class="c-orange-d">#script:js2</span>
    <span class="c-olive">
    hi();
    </span>
  <span class="c-orange-d">#script;</span>
  </span> 
  <span class="comment no-select">Now, we can import our js file codes using the division name</span>
  
  &#64;script('index:js1')  <span class="comment">returns code in js1 above</span> 
  &#64;script('index:js2')  <span class="comment">returns code in js2 above</span> 
  
  <span class="comment no-select">We can also import both js at once</span>

  &#64;style('index:js1:js2')  <span class="comment">returns code in js1 & js2 above</span> 

                  </pre>

                </div>
                <!-- code line ended -->

                <div class="font-em-d8 mvt-10">
                  In the example above, the contents of the rex javascript template file can be imported into any template file just as
                  shown above. It is important not to store heavy javascript files into the javascript rex template file as this may break the 
                  application. Developers should organize and simplify their codes into different files which can then be imported 
                  by the <code>&#64;script()</code> directive. It is also important to note that every rex file must be located within the 
                  rex directory or subdirectory folders as this is the location the application will start searching for files from. In 
                  situtation where our <code>index.rex.js</code> file is in <code>rex/js</code> directory for example, then the path can be 
                  resolved by using dots as shown below
                </div> <br>

                <!-- code line started -->
                <div class="pre-area shadow">
  <div class="pxv-10 bc-silver">Example: Css Rex File (rex.js.index.rex.js)</div>
                  <pre class="pre-code">
  &#64;script('js.index:js1')  <span class="comment">resolves as rex/js/index.rex.js:js1</span>  
                  </pre>

                </div>
                <!-- code line ended -->

                
              </div> <br>
        
          </div>  
          
          <!------------------------------- onscript -->
          <div id="onscript" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">19. &#64;onscript</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                  This function works similary as the <code>@script</code>directive. The only major difference 
                  is the any script pulled by this directive will be pulled into javascript's <code>window.onload</code> 
                  function.
                </div>

              </div>
        
          </div>  

          <!------------------------------- onShow -->
          <div id="onshow" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">20. &#64;onShow</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                  This function is specially built for html tag's attribute <code>"hidden"</code>. It is used to display a 
                  string value "hidden" when the returned value of a function is not an empty value. This means that when 
                  a non-empty value is returned by a function, then <code>@onShow</code> will return a string value <code>"hidden"</code>. 
                  It takes a function name as its first main arguments. Other arguments are optional based on the supplied 
                  function's argument. The function name supplied must be an already defined function that is accessible.
                </div> <br>

<div class="pre-area">
  <div class="pxv-10 bc-silver">Example for onShow() directive</div>
    <pre class="pre-code">
  function test($name){

    if($name == 'Rolland') {

      return 'some_non_empty_value';

    } 

  }

  &#64;onShow('test', 'Rolland') <span class="comment no-select">// returns 'hidden'</span>

  &#64;onShow('test', 'Russell') <span class="comment no-select">// returns empty string</span>
    </pre>
</div>

              </div> <br>

        
          </div>  

          <!------------------------------- onShow -->
          <div id="onhide" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">21. &#64;onHide</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                  This function is the inverse of <code>@onShow</code> directive. When a non-empty value is returned by 
                  a function, the <code>"hidden"</code> attribute will not be shown. However when an empty value is returned, 
                  then the <code>"hidden"</code> attribute will be returned.
                </div> <br>

<div class="pre-area">
  <div class="pxv-10 bc-silver">Example for onHide() directive</div>
    <pre class="pre-code">
  function test($name){

    if($name == 'Rolland') {

      return 'some_non_empty_value';

    } 

  }

  &#64;onHide('test', 'Rolland') <span class="comment no-select">// returns empty string</span>
  
  &#64;onHide('test', 'Russell') <span class="comment no-select">// returns 'hidden'</span>
    </pre>
</div>

              </div> <br>

        
          </div>  

          
          <!------------------------------- flash -->
          <div id="flash" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">22. &#64;flash</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                  The <code>@flash</code> is a shorthand directive for <code>Res::flash</code> 
                  It is used to display a message or notification once. Every notice is defined by
                  a unique notice key which anchors the notice itself. When this key is called, the 
                  value of that key (which is the notice itself) is returned. This makes it easier to
                  display only messages or notifications only when they exist. The directive can also be used to update 
                  an already existing message or notification. 
                </div>
                <br>

                <div class="font-menu mvb-6">The example below shows how the <code>&#64;flash()</code> directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  <span class="comment no-select">
  &lt;?php 
    
    Res::setFlash('notice', 'Thanks');  // used in windows or controllers
  
  ?&gt;</span> 

  &#64;flash('notice') <span class="comment no-select"> // returns: Thanks</span>
                  </pre>

                </div>
                <!-- code line ended -->

              </div> <br>
        
          </div>  

          
          <!------------------------------- auth -->
          <div id="auth" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">23. &#64;auth</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                  The <code>&#64;auth:</code> directive only displays a section of code within it when the 
                  user account is logged in or the current session is active. When the user is not 
                  logged in, the the block of code within it is never displayed. The closing directive is 
                  <code>&#64;auth;</code>
                </div>
                <br>

                <div class="font-menu mvb-6">The example below shows how the <code>&#64;auth:</code> and <code>&#64;auth;</code> directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  &#64;auth:
    Welcome <span class="comment no-select"> // show this only if user is logged in.</span>
  &#64;auth;
                  </pre>

                </div>
                <!-- code line ended -->

              </div> <br>
        
          </div>  

          <!------------------------------- guest -->
          <div id="guest" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">24. &#64;guest</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                  Just like the <code>&#64;auth:</code> directive, the <code>&#64;guest:</code> directive only displays a section of code within it when the 
                  user account is NOT logged in or the current session is NOT active. When the user is 
                  logged in, the the block of code within it is never displayed. The equivalent closing directive is 
                  <code>&#64;guest;</code>
                </div>
                <br>

                <div class="font-menu mvb-6">The example below shows how the <code>&#64;auth:</code> and <code>&#64;auth;</code> directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  &#64;guest:
    Login <span class="comment no-select"> // show this only if user is not logged in.</span>
  &#64;guest;
                  </pre>

                </div>
                <!-- code line ended -->

              </div> <br>
        
          </div>  

          <!------------------------------- authDirect -->
          <div id="authdirect" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">25. &#64;authDirect</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                The <code>&#64;authDirect()</code> directive is used for redirecting users from a page 
                  when the session is active or user session is logged in.
                </div>
                <br>

                <div class="font-menu mvb-6">The example below shows how the <code>&#64;authDirect()</code> directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  &#64;authDirect('home/profile') <span class="comment no-select">// redirect when user is logged in</span>
                  </pre>

                </div>
                <!-- code line ended -->

              </div> <br>
        
          </div>  

          <!------------------------------- guestDirect -->
          <div id="guestdirect" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">26. &#64;guestDirect</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                The <code>&#64;guestDirect()</code> directive is used for redirecting users from a page 
                  when session is not active or user session is logged out.
                </div>
                <br>

                <div class="font-menu mvb-6">The example below shows how the <code>&#64;authDirect()</code> directive can be applied in template files</div>

                <!-- code line started -->
                <div class="pre-area shadow">

                  <pre class="pre-code">
  &#64;guestDirect('/') <span class="comment no-select">// redirect when user is logged out</span>
                  </pre>

                </div>
                <!-- code line ended -->

              </div> <br>
          </div>

          <!------------------------------- btn -->
          <div id="btn" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">27. &#64;btn</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                The <code>&#64;btn()</code> adding attributes into buttons. When working with submit buttons, we sometimes tend to 
                add a value for form buttons. The <code>Request</code> class requires that all html input fields and button must have 
                a name and a value set. The <code>@btn</code> takes a single parameter and uses it to specify the name and value of a 
                submit button. For example 
                </div>
                <br>

                
                <!-- code line started -->
                <div class="pre-area shadow">
                  <div class="pxv-10 bc-silver font-menu mvb-6">Using @btn directive</code> </div>

                  <pre class="pre-code">
  &lt;button &#64;btn('logout')&gt;&lt;/button&gt; <span class="comment no-select">&lt;button name="logout" value="logout"&gt;&lt;/button&gt;</span>
                  </pre>

                </div>
                <!-- code line ended -->

              </div>
          </div>

          <!------------------------------- get -->
          <div id="get" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">28. &#64;get</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                When forms are submitted using get request, the string data can be obtained within the template file using this directive.  
                </div>
                <br>

                
                <!-- code line started -->
                <div class="pre-area shadow">
                  <div class="pxv-10 bc-silver font-menu mvb-6">Using &#64;get directive</code> </div>

                  <pre class="pre-code">
  &lt;form method="get"&gt;
  
    &#64;csrf

    &lt;input type="text" name="firstname" value="&#64;get.firstname" &gt;
    &lt;input type="text" name="lastname" value="&#64;get.lastname"&gt;

    &lt;button &#64;btn('login')&gt;&lt;/button&gt; 
  &lt;/form&gt;
                  </pre>
                  
                </div>

                <div class="font-em-d8 mvt-6">
                  The value attributes above will remain empty until the form is submitted and all defined names are obtained from the <code>get</code> 
                  request. 
                </div>
                <!-- code line ended -->

              </div> 
          </div>

          <!------------------------------- post -->
          <div id="post" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">29. &#64;post</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                When forms are submitted using post request, the string data can be obtained within the template file using the <code>post()</code> directive.  
                </div>
                <br>

                
                <!-- code line started -->
                <div class="pre-area shadow">
                  <div class="pxv-10 bc-silver font-menu mvb-6">Using &#64;post directive</code> </div>

                  <pre class="pre-code">
  &lt;form method="get"&gt;
  
    &#64;csrf

    &lt;input type="text" name="firstname" value="&#64;post.firstname" &gt;
    &lt;input type="text" name="lastname" value="&#64;post.lastname"&gt;
    &lt;input type="text" name="data['a']" value="&#64;post.data['a']"&gt;

    &lt;button &#64;btn('login')&gt;&lt;/button&gt; 
  &lt;/form&gt;
                  </pre>
                  
                </div>

                <div class="font-em-d8 mvt-6">
                  The value attributes above will remain empty until the form is submitted and all defined names are obtained from the <code>post</code> 
                  request. 
                </div>
                <!-- code line ended -->

              </div> 
          </div>

          <!------------------------------- old -->
          <div id="old" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">30. &#64;old</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                When forms are submitted using post request, just like the <code>&#64;post</code> and <code>&#64;get</code> directives, 
                the <code>&#64;old</code> directive returns the old data submitted. This can be used as replacement for the <code>&#64;get</code> or 
                <code>&#64;post</code> directive.
                </div>
                <br>

                
                <!-- code line started -->
                <div class="pre-area shadow">
                  <div class="pxv-10 bc-silver font-menu mvb-6">Using &#64;old directive</code> </div>

                  <pre class="pre-code">
  &lt;form method="get"&gt;
  
    &#64;csrf

    &lt;input type="text" name="firstname" value="&#64;old.firstname" &gt;
    &lt;input type="text" name="lastname" value="&#64;old.lastname"&gt;
    &lt;input type="text" name="data['a']" value="&#64;old.data['a']"&gt;

    &lt;button &#64;btn('login')&gt;&lt;/button&gt; 
  &lt;/form&gt;
                  </pre>
                  
                </div>

                <div class="font-em-d8 mvt-6">
                  The value attributes above will remain empty until the form is submitted and all defined names are obtained from the <code>post</code> 
                  request. 
                </div>
                <!-- code line ended -->

              </div> 
          </div>

          <!------------------------------- csrf -->
          <div id="csrf" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">31. &#64;csrf</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                Before a form's data can be successfully obtained by the <code>Request</code> class, 
                it must contain a valid token forwarded as part of request which in turn is validated within the 
                application. The failure to generate this token, forms will not submit forwarded data. The 
                <code>&#64;csrf()</code> directives ensures that the specifically needed token field which helps to 
                prevent cross-site request forgery, is placed is within the form. Once it is added within a form, 
                then our form will be protected from cross-site request forgery
                </div>
                <br>

                
                <!-- code line started -->
                <div class="pre-area shadow">
                  <div class="pxv-10 bc-silver font-menu mvb-6">Using &#64;csrf directive</code> </div>

                  <pre class="pre-code">
  &lt;form method="post"&gt;
  
    &#64;csrf

    &lt;input type="text"&gt;
    &lt;input type="text"&gt;
    &lt;input type="text"&gt;

    &lt;button &#64;btn('login')&gt;&lt;/button&gt; 
  &lt;/form&gt;
                  </pre>
                  
                </div>

                <div class="font-em-d8 mvt-6">
                  The <code>&#64;csrf</code> directive above will be resolved to a hidden field with a token will will be 
                  forwarded along with submitted data. 
                </div>
                <!-- code line ended -->

              </div> <br>
          </div>

          <!------------------------------- error -->
          <div id="error" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">32. &#64;error</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                The <code>&#64;error()</code> directive is used to pull errors on <a href="<?= DomUrl('tutorial/forms#managing-errors') ?>" class="font-em-1 fb-6 hyperlink"><span class="c-olive">Forms</span></a>
                </div>
        
              </div> 
          </div>

          <!------------------------------- vdump -->
          <div id="vdump" class=""> 
              <br>
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">33. &#64;vdump</div>
              </div> <br>
              
              <div>

                <div class="font-menu font-em-d9 helvetica">
                The <code>&#64;vdump()</code> is spoova's inbuilt directive for dumping data information. It is designed to use the php's <code>var_dump</code> method.
                </div>
        
              </div> 
          </div>

            <div id="conditionals" class="conditonals">

              <div class="font-em-1d5 c-orange">The Conditionals</div> <br> 
              <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                <div class="flex-full">34. Conditionals</div>
              </div> <br>
              <div class="font-menu font-em-d9 helvetica">
                The conditonal directives are directives that follows php conditional operators.
                They are listed below:
              </div>
              <br>
              <ul class="font-em-d9">
                <li><code>@if</code> <code>@elseif</code> and <code>@endif</code></li>
                <li><code>@for</code> </li>
                <li><code>@foreach</code> and <code>@endforeach</code> or <code>@each</code> and <code>endeach</code></li>
                <li><code>@while</code> <code>@do</code> and <code>@dowhile</code></li>
                <li><code>@switch</code> and <code>@endswitch</code>
              </ul>   
              <div class="font-menu mvb-6">Examples of their applications</div>            
              <!-- code line started -->
              <div class="pre-area shadow">
                <!-- conditionals: if -->
                <div class="bc-blue c-white pxv-6">using if </div>
                <pre class="pre-code">
  &#64;if($user == 'foo'):
    
      &lt;div&gt;foo&lt;/div&gt;

  &#64;endif; 
                </pre>

               <!-- conditionals: for -->
                <div class="bc-blue c-white pxv-6">using for</div>   
                <pre class="pre-code"> 
  &#64;for($arrays as $array):
    
      &#123{ $array }&#125 &lt;br&gt;
      
  &#64;endforeach; 

  <span class="comment no-select">// Note: when breaking out of foreach loops the &#64;break; directive should be applied</span>
                </pre>

                <div class="bc-blue c-white pxv-6">using foreach </div>   
                <pre class="pre-code"> 
  &#64;foreach($arrays as $array):
    
      &#123{ $array }&#125 &lt;br&gt;
      
  &#64;endforeach; 

  <span class="comment no-select">// Note: when breaking out of foreach loops the &#64;break; directive should be applied</span>
                </pre>
              
                <div class="bc-blue c-white pxv-6">using each - same as foreach </div>   
                <pre class="pre-code">
  &#64;each($arrays as $array):
    
      &#123{ $array }&#125 &lt;br&gt;
      
  &#64;endeach; 
                </pre>

                <!-- conditionals switch -->
                <div class="bc-blue c-white pxv-6">using switch </div>   
                <pre class="pre-code">
  &#64;switch(1):
    
      case 1 : echo 'one';
      
  &#64;endswitch; 

  &#64;(switch($var)):
    
      case 'fit' : echo $var;
      
  &#64;endswitch;    
                </pre>

              </div>
              <div class="font-menu mvs-6">
                Footnotes:
                <ul class="pxl-20 mvt-4">
                  <li>Variables can be transferred as arguments from Router function or classes</li>
                  <li>
                    Escaping directives can be done through
                    the use of <code>&#64;(directive)&#64;</code> where <code>directive</code> is the name 
                    of the specified directive. For example <code>&#64;(domurl())&#64;</code> will resolve to  
                    <code>&#64;domurl()</code> as a text rather than process it as a directive.
                  </li>
                </ul>
                
              </div>
              <!-- code line ended -->
            </div>
          </div>  

        </div> 
      
      </div>
    </section>

  </div>
  




         <div class="blurry overlay ov-d5 hide"></div>
    </section>

</body>
</html>