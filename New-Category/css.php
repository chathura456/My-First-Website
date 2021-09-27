<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="prism.css">
        <script src="prism.js"></script>
        <link rel="stylesheet" href="style.css">
    <title>CSS Learn</title>
</head>

<body>
 <!--*******************************************Header**********************************************-->   
 <header class="top">
    <a href="../index.php"><div class="logo"><img src="logo2.png" alt=""></div></a> 
    
    
        <div class="head">Learn CSS Basics</div>
        <div class="sub"><a href="../Compiler-Test/TestCompiler.php">Try it Yourself</a> </div>
               
</header>
<br><br><br><br><br>

<!--*******************************************New Section**********************************************--> 

<div class="main">
    <div class="left"><h3 >Write CSS in Separate Files</h3><br>
        <p>CSS code can be written in its own files to keep it separate from the HTML code. The extension for CSS files is <strong>.css</strong>. These can be linked to an HTML file using a <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;link&gt;</code> tag in the <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;head&gt;</code> section.</p>
        <ul class="lst">
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">href</code> attribute to specify the URL to the external resource</li>
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">rel</code> attribute to specify the relationship of the linked document to the current document</li>
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">type</code> attribute to define the type of content being linked</li>
            </ul></div>  
    <div class="right"><div class="container"><pre class="language-html">
    <code>
&lt;head&gt;

&lt;link href="style.css" type="text/css" rel="stylesheet"&gt;

&lt;/head&gt;
    </code></pre></div></div>
    </div>
    <br><hr><br>

<!--*******************************************New Section**********************************************-->   

    <div class="main">
            
        <div class="left">
            <h3 >Write CSS in HTML File</h3>
            <br>
            <p >CSS code can be written in an HTML file by enclosing the code in <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;style&gt;</code> tags. Code surrounded by <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;style&gt;</code> tags will be interpreted as CSS syntax.</p>
        </div>
        <div class="right"><div class="container">
            <pre class="language-html">
<code>    &lt;head&gt;
        &lt;style&gt;
            h1 {
            color: blue;
            background-color: yellow;
            }
        &lt;/style&gt;
    &lt;/head&gt;</code></pre>
        </div></div>
    </div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

    <div class="main">
                
        <div class="left">
            <h3 >Inline Styles</h3>
            <br>
            <p >CSS styles can be directly added to HTML elements by using the <code class="code__2rdF32qjRVp7mMVBHuPwDS">style</code> attribute in the element’s opening tag. Each style declaration is ended with a semicolon. Styles added in this manner are known as <em>inline styles</em>.</p>
        </div>
        <div class="right"><div class="container">
            <pre class="language-xml">
<code> 
    &lt;h2 style="text-align: center;">Centered text&lt;/h2&gt;

    &lt;p style="color: blue; font-size: 18px;"&gt;Blue, 18-point text&lt;/p&gt;

</code></pre>
        </div></div>
    </div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

            <div class="main">
                <div class="left"><h3 >Class and ID Selectors</h3><br>
                    <p>CSS classes can be reusable and applied to many elements. Class selectors are denoted with a period <code class="code__2rdF32qjRVp7mMVBHuPwDS">.</code> followed by the class name. CSS ID selectors should be unique and used to style only a single element. ID selectors are denoted with a hash sign <code class="code__2rdF32qjRVp7mMVBHuPwDS">#</code> followed by the id name.</p>
                </div>  
            <div class="right"><div class="container">
                <pre class="language-css"><code>
    /* Selects all elements with class="column" */
    .column {
    }
        
    /* Selects element with id="first-item" */
    #first-item {
    }
                </code></pre>
            </div></div>
                </div>
                <br><hr><br>

<!--*******************************************New Section**********************************************--> 

<div class="main">
    <div class="left"><h3>Groups of CSS Selectors</h3><br>
        <p>Match multiple selectors to the same CSS rule, using a comma-separated list. In this example, the text for both <code class="code__2rdF32qjRVp7mMVBHuPwDS">h1</code> and <code class="code__2rdF32qjRVp7mMVBHuPwDS">h2</code> is set to red.</p></div>
    <div class="right"><div class="container"><pre class="language-css">
        <code>
    h1, h2 {
       color: red;
       background-color: yellow;
    }
        </code></pre></div></div>
    </div></div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                        
            <div class="left">
                <h3 >Chaining Selectors</h3>
                <br>
                <p >CSS selectors can be chained so that rule sets apply only to elements that match all criteria. For instance, to select <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;h3&gt;</code> elements that also have the <code class="code__2rdF32qjRVp7mMVBHuPwDS">section-heading</code> class, the selector <code class="code__2rdF32qjRVp7mMVBHuPwDS">h3.section-heading</code> can be used.</p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-css"><code>                   
    /* Select h3 elements with the section-heading class */
    h3.section-heading {
    color: blue;
    }
    
    /* Select elements with the section-heading and button class */
    .section-heading.button {
    cursor: pointer;
    }
                </code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                
            <div class="left">
                <h3 >CSS Type Selectors</h3>
                <br>
                <p >CSS type selectors are used to match all elements of a given type or tag name. Unlike for HTML syntax, we do not include the angle brackets when using type selectors for tag names. When using type selectors, elements are matched regardless of their nesting level in the HTML.</p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-css"><code>                 
    /* Selects all &lt;p&gt; tags */
    p {
    }
                </code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                        
            <div class="left">
                <h3 >CSS Class Selectors</h3>
                <br>
                <p >The CSS class selector matches elements based on the contents of their <code class="code__2rdF32qjRVp7mMVBHuPwDS">class</code> attribute. For selecting elements having <code class="code__2rdF32qjRVp7mMVBHuPwDS">calendar-cell</code> as the value of the <code class="code__2rdF32qjRVp7mMVBHuPwDS">class</code> attribute, a <code class="code__2rdF32qjRVp7mMVBHuPwDS">.</code> needs to be prepended.</p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-css"><code>                 
    .calendar-cell {
    color: #fff;    
    }
                </code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                                
            <div class="left">
                <h3 >Selector Specificity</h3>
                <br>
                <p >Specificity is a ranking system that is used when there are multiple conflicting property values that point to the same element. When determining which rule to apply, the selector with the highest specificity wins out. The most specific selector type is the ID selector, followed by class selectors, followed by type selectors. In this example, only <code class="code__2rdF32qjRVp7mMVBHuPwDS">color: blue</code> will be implemented as it has an ID selector whereas <code class="code__2rdF32qjRVp7mMVBHuPwDS">color: red</code> has a type selector.</p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-css">
    <code>h1 #header {
    color: blue;
    } /* implemented */

    h1 {
    color: red;
    } /* Not implemented */

</code></pre>
            </div></div>
        </div>
        <br><hr><br>
       
       
        
</body>

</html>


