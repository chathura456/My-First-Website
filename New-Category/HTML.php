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
    <title>HTML Learn</title>
</head>

<body>
    
    <header class="top">
        <a href="../index.php"><div class="logo"><img src="logo2.png" alt=""></div></a> 
            <div class="head">Learn HTML Basics</div>
            <div class="sub"><a href="../Compiler-Test/TestCompiler.php">Try it Yourself</a> </div>            
    </header>
    <div class="insvisible"></div>

        <div class="main">
            
            <div class="left">
                <h3>Basic HTML Code</h3><br><p>
                <ul>
                    <li>The <span class="nspan">&lt;!DOCTYPE html&gt;</span> declaration defines that this document is an HTML5 document</li>
                    <li>The <span class="nspan">&lt;html &gt;</span> element is the root element of an HTML page</li>
                    <li>The <span class="nspan">&lt;head&gt;</span> element contains meta information about the HTML page</li>
                    <li>The <span class="nspan">&lt;title&gt;</span> element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)</li>
                    <li>The <span class="nspan">&lt;body&gt;</span> element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
                    <li>The <span class="nspan">&lt;h1&gt;</span> element defines a large heading</li>
                    <li>The <span class="nspan">&lt;p&gt;</span> element defines a paragraph</li>
                </ul>
            </p></div>
            <div class="right"><div class="container">
                <pre class="language-xml"><code>
    &lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
    &lt;head&gt;
       &lt;meta charset="UTF-8"&gt;
       &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;HTML Basic code&lt;/title&gt;
    &lt;/head&gt;

    &lt;body&gt;

    &lt;h1&gt;Hello World!&lt;/h1&gt;
    &lt;p&gt;Let's Learn HTML&lt;/p&gt;

    &lt;/body&gt;
    &lt;/html&gt; </code></pre>
            </div></div>
        </div>
<br><hr><br>

<div class="main">
<div class="left"><h3>Heading Tags</h3><br>
    <p>HTML can use six different levels of heading elements.  The heading elements are ordered from the highest level <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;h1&gt;</code> to the lowest level <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;h6&gt;</code>.</p></div>
<div class="right"><div class="container"><pre class="language-html">
    <code>
    &lt;h1&gt;This is the Main Heading&lt;/h1&gt;
    &lt;h2&gt;This is the 1st subheading&lt;/h2&gt;
    &lt;h3&gt;This is the 2nd subheading&lt;/h3&gt;
    ...
    &lt;h6&gt;This is the 5th subheading&lt;/h6&gt;
    </code></pre></div></div>
</div></div>
<br><hr><br>

        <div class="main">
            <div class="left"><h3 ><code >&lt;div&gt;</code> Div Element</h3><br>
                <p>The <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;div&gt;</code> element is used as a container that divides an HTML document into sections and is short for “division”. <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;div&gt;</code> elements can contain <em>flow content</em> such as headings, paragraphs, links, images, etc.</p>
            </div>  
            <div class="right"><div class="container"><pre class="language-html">
            <code>
    &lt;div&gt;
    &lt;h1>A section of grouped elements&lt;/h1&gt;
    &lt;p>Here’s some text for the section&lt;/p&gt;
    &lt;/div &gt;
    &lt;div&gt;
    &lt;h1&gt;Second section of grouped elements&lt;/h1&gt;
    &lt;p>Here’s some text&lt;/p&gt;
    &lt;/div&gt;
            </code></pre></div></div>
            </div>
            <br><hr><br>

            <div class="main">
                <div class="left"><h3 >HTML Attributes</h3><br>
                    <p>HTML attributes are values added to the opening tag of an element to configure the element or change the element’s default behavior. In the provided example, we are giving the <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;p&gt;</code> (paragraph) element a unique identifier using the <code class="code__2rdF32qjRVp7mMVBHuPwDS">id</code> attribute and changing the color of the default text using the <code class="code__2rdF32qjRVp7mMVBHuPwDS">style</code> attribute.</p>
                </div>  
                <div class="right"><div class="container"><pre class="language-html">
                <code>
    &lt;p id="my-paragraph" style="color: green;">Here’s some text for a paragraph that is being altered by HTML attributes&lt;/p&gt;
                </code></pre></div></div>
                </div>
                <br><hr><br>

<div class="main">
    <div class="left"><h3>Attribute Name and Values</h3><br>
        <p>HTML attributes consist of a name and a value using the following syntax: <code class="code__2rdF32qjRVp7mMVBHuPwDS">name="value"</code> and can be added to the opening tag of an HTML element to configure or change the behavior of the element.</p></div>
    <div class="right"><div class="container"><pre class="language-html">
        <code>
    &lt;elementName name="value"&gt;Attributes&lt;/elementName&gt;
        </code></pre></div></div>
    </div></div>
    <br><hr><br>

    <div class="main">
        <div class="left"><h3> Span Element</h3><br>
            <p>The <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;span&gt;</code> element is an inline container for text and can be used to group text for styling purposes. However, as <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;span&gt;</code> is a generic container to separate pieces of text from a larger body of text, its use should be avoided if a more semantic element is available.</p></div>
        <div class="right"><div class="container"><pre class="language-html">
            <code>
    &lt;p&gt;&lt;span&gt;This text&lt;/span&gt;may be styled differently than the surrounding text.&lt;/p&gt;
            </code></pre></div></div>
        </div></div>
        <br><hr><br>

    <div class="main">
        <div class="left"><h3> <code>&lt;em&gt;</code> Emphasis Element</h3><br>
            <p>The <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;em&gt;</code> emphasis element emphasizes text and browsers will usually <em>italicize</em> the emphasized text by default.</p></div>
        <div class="right"><div class="container"><pre class="language-html">
            <code>
    &lt;p&gt;&lt;em&gt;This text&lt;/em&gt;will be emphasized in italics.&lt;/p&gt;
            </code></pre></div></div>
        </div></div>
        <br><hr><br>

    <div class="main">
        <div class="left"><h3> <code>&lt;strong&gt;</code> Strong Element</h3><br>
            <p>The <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;strong&gt;</code> element highlights important, serious, or urgent text and browsers will normally render this highlighted text in <strong>bold</strong> by default.</p></div>
        <div class="right"><div class="container"><pre class="language-html">
            <code>
    &lt;p&gt;This text&lt;strong&gt;is important&lt;/strong&gt;Text!&lt;/p&gt;
            </code></pre></div></div>
        </div></div>
        <br><hr><br>

        <div class="main">
            <div class="left"><h3> <code>&lt;br&gt;</code> Line Break Element</h3><br>
                <p>The <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;br&gt;</code> line break element will create a line break in text and is especially useful where a division of text is required, like in a postal address. The line break element requires only an opening tag and must not have a closing tag.</p></div>
            <div class="right"><div class="container"><pre class="language-html">
                <code>
    A line break haiku.&lt;br&gt;
    Poems are a great use case.&lt;br&gt;
    Oh joy! A line break.
                </code></pre></div></div>
            </div></div>
            <br><hr><br>
       
       
        
</body>

</html>


