@template('template.t-tut')

    @lay('build.co.navbars:left-nav')

    <div class="box-full pxl-2 bc-white-dd pull-right">
    
        <section class="pxv-20 tutorial bc-white">
            <div class="font-em-1d2">

                @lay('build.co.links:tutor_pointer')

                <div class="start font-em-d8">
                    <div class="font-em-1d5 c-orange">Url</div> <br>  
                    
                    <div class="helper-classes">
                        <div class="fb-6">Introduction</div> <br>
                        <div class="">

                        <div class="">
                            The <code>url</code> class is a tool that is used to handle urls.
                            The methods available are as follows: 
                        </div> <br>

                            <ol class="c-olive">
                                <li> <a href="#path" data-scroll-hash="" data-minus="10" class="c-olive ch-orange"> path </a> </li>
                                <li> <a href="#follows" data-scroll-hash="" data-minus="10" class="c-olive ch-orange"> follows </a> </li>
                                <li> <a href="#islike" data-scroll-hash="" data-minus="10" class="c-olive ch-orange"> isLike </a> </li>
                                <li> <a href="#is" data-scroll-hash="" data-minus="10" class="c-olive ch-orange"> is </a> </li>
                                <li> <a href="#in" data-scroll-hash="" data-minus="10" class="c-olive ch-orange"> in </a> </li>
                                <li> <a href="#hash" data-scroll-hash="" data-minus="10" class="c-olive ch-orange"> hash </a> </li>
                                <li> <a href="#query" data-scroll-hash="" data-minus="10" class="c-olive ch-orange"> query </a> </li>
                            </ol>
                            
                        </div> 
                    </div>  


                    <div id="initialize" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                    </span> Initializing class
                                </div>
                            </div> <br>
                            <div class="">
                            The Url tool can be easily initialized as shown below.
                            <br><br>
                            
                        <div class="pre-area">
                            <div class="box-full">
                                <div class="pxv-6 bc-off-white"><code>Sample: Initializing Input</code></div>
                                <pre class="pre-code">
    $Url  = new Url;
                                </pre>
                            </div>
                        </div>

                            </div>
                        </div>
                    </div> <br>

                    <div id="keywords" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                    </span> keywords
                                </div>
                            </div> <br>
                            <div class="">
                            The following keywords should be noted:
                            <br><br>
                            
                        <div class="pre-area">
                            <div class="box-full">
                                <div class="pxv-6 bc-off-white"><code>keywords</code></div>
                                <pre class="pre-code">
    <span class="comment">
    $test_url : supplied url to be processed

    $some_url : supplied url to be compared
    </span>
                                </pre>
                            </div>
                        </div>

                            </div>
                        </div> <br><br>
                    </div>        

                    <div id="path" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">1.</span>
                                    </span> path
                                </div>
                            </div> <br>

                            <div class="">
                                The <code>path</code> method supplies a url to be tested.
                                <br><br>
                                
                                <div class="pre-area">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Syntax: path</code></div>
                                        <pre class="pre-code">
    $Url->path($test_url);
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                            
                        <div class="pre-area">
                            <div class="box-full">
                                <div class="pxv-6 bc-off-white"><code>Example: path</code></div>
                                <pre class="pre-code">
    $Url->path('/user/profile/settings');
                                </pre>
                            </div>
                        </div>

                    </div> <br>

                    <div id="follows" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">2.</span>
                                    </span> follows
                                </div>
                            </div> <br>
                            
                            <div class="">
                                The <code>follows()</code> method checks if a path follows a particular
                                url supplied. This returns a boolean value of true or false
                                <br><br>

                                <div class="pre-area">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Syntax: follows</code></div>
                                        <pre class="pre-code">
    $Url->follows($some_url); 
    <span class="comment">
      where: $some_url is the parent url structure that must be matched
    </span>
                                        </pre>
                                    </div>
                                </div>    
                                        
                                <div class="pre-area">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Examples: follows</code></div>
                                        <pre class="pre-code">
    <span class="comment">// Examples</span>
    $Url->path('index')->follows('index'); <span class="comment">// true</span>

    $Url->path('index/profile')->follows('index'); <span class="comment">// true</span>

    $Url->path('index/profile')->follows('index/profile/user'); <span class="comment">// false</span>

    $Url->path('index/profile')->follows('profile'); <span class="comment">// false</span>
                                        </pre>
                                    </div>
                                </div>
                        
                            </div>
                        </div> <br>
                    </div>

                    <div id="islike" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">3.</span>
                                    </span> isLike
                                </div>
                            </div> <br>

                            <div class="">
                                The <code>isLike()</code> method returns true if the url supplied into it exists as a root structure of the test url without any observable 
                                change in form.
                                <br><br>

                                <div class="pre-area">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Syntax: isLike</code></div>
                                        <pre class="pre-code">
    $Url->isLike($some_url); 
                                        </pre>
                                    </div>
                                </div>    

                                <div class="pre-area">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Examples: isLike</code></div>
                                        <pre class="pre-code">
    $Url->path('index')->isLike('index'); <span class="comment">// true</span>

    $Url->path('index/profile')->isLike('index'); <span class="comment">// true</span>

    $Url->path('index/profile/user')->isLike('index/profile'); <span class="comment">// true</span>

    $Url->path('index/profile/me')->isLike('index/profile/you'); <span class="comment">// false</span>
                                        </pre>
                                    </div>
                                </div>
                        
                            </div>
                        </div> <br>
                    </div>

                    <div id="is" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">4.</span>
                                    </span> is
                                </div>
                            </div> <br>

                            <div class="">
                                The <code>is()</code> method is used to check if two url is equal to each other
                                <br><br>
                        
                                <div class="pre-area">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Examples: is</code></div>
                                        <pre class="pre-code">
    $Url->path('index')->is('index');  <span class="comment">// true</span>

    $Url->path('index/user', 'index/person');  <span class="comment">//false</span>
                                        </pre>
                                    </div>
                                </div>

                            </div>
                        </div> <br>
                    </div>

                    <div id="in" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">5.</span>
                                    </span> in
                                </div>
                            </div> <br>
                            <div class="">
                                The <code>in()</code> method defines a list of urls that a supplied url must be a member 
                                of. If the array list supplied does not contain the url, then a boolean of false is returned.
                                <br><br>
                        
                                <div class="pre-area">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Examples: in</code></div>
                                        <pre class="pre-code">
    $Url->path('index')->in(['index', 'profile']); <span class="comment">// true</span>

    $Url->path('index')->in(['home', 'profile']);   <span class="comment">// false</span>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                    </div>

                    <div id="hash" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">6.</span>
                                    </span> hash
                                </div>
                            </div> <br>

                            <div class="">
                                The <code>hash()</code> method returns the hash of a string.
                                <br><br>
                        
                                <div class="pre-area">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Examples: hash</code></div>
                                        <pre class="pre-code">
    $Url->path('index#user');

    var_dump( $Url->hash() ); <span class="comment">//returns user</span>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                    </div>

                    <div id="query" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">7.</span>
                                    </span> query
                                </div>
                            </div> <br>
                            <div class="">
                                The <code>query</code> method returns the query of a url. If query string 
                                is found, an array is returned else, a null value is returned
                                <br><br>
                    
                                <div class="pre-area">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Example: query</code></div>
                                        <pre class="pre-code">
    $Url->path("http://site.com/user?name=foo&class=bar"); 
    var_dump( $Url->query() ); <span class="comment">//['name'=>'foo', 'class' => 'bar']</span>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                    </div>
                    
                @lay('build.co.links:tutor_pointer')

                </div>
            </div>
        </section>
    </div>
                    
    @lay('build.co.coords:footer')


@template;