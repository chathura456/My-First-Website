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
    <title>JavaScript Learn</title>
</head>

<body>
 <!--*******************************************Header**********************************************-->   
 <header class="top">
    <a href="../index.php"><div class="logo"><img src="logo2.png" alt=""></div></a> 
    
    
        <div class="head">Learn JavaScript Basics</div>
        <div class="sub"><a href="../Compiler-Test/TestCompiler.php">Try it Yourself</a> </div>
               
</header>
<br><br><br><br><br>

<!--*******************************************New Section**********************************************--> 

<div class="main">
    <div class="left"><h3 >console.log()</h3><br>
        <p>The <code class="code__2rdF32qjRVp7mMVBHuPwDS">console.log()</code> method is used to log or print messages to the console. It can also be used to print objects and other info.</p>
        </div>  
    <div class="right"><div class="container"><pre class="language-js">
  <code>console.log('Hi there!');
  // Prints: Hi there!</code></pre></div></div>
    </div>
    <br><hr><br>

<!--*******************************************New Section**********************************************-->   

    <div class="main">
            
        <div class="left">
            <h3 >Strings</h3>
            <br>
            <p >Strings are a primitive data type. They are any grouping of characters (letters, spaces, numbers, or symbols) surrounded by single quotes <code class="code__2rdF32qjRVp7mMVBHuPwDS">'</code> or double quotes <code class="code__2rdF32qjRVp7mMVBHuPwDS">"</code>.</p>
        </div>
        <div class="right"><div class="container">
            <pre class="language-js">
  <code>let single = 'Wheres my bandit hat?';
  let double = "Wheres my bandit hat?";</code></pre>
        </div></div>
    </div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

    <div class="main">
                
        <div class="left">
            <h3 >String Interpolation</h3>
            <br>
            <p >String interpolation is the process of evaluating string literals containing one or more placeholders (expressions, variables, etc).</p><br>
            <p >It can be performed using template literals: <code class="code__2rdF32qjRVp7mMVBHuPwDS">text ${expression} text</code>.</p>
        </div>
        <div class="right"><div class="container">
            <pre class="language-js">
  <code>let age = 7;
 
  // String concatenation
  'Tommy is ' + age + ' years old.';
 
  // String interpolation
  `Tommy is ${age} years old.`;

</code></pre>
        </div></div>
    </div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

            <div class="main">
                <div class="left"><h3 >Arithmetic Operators</h3><br>
                    <p>An assignment operator assigns a value to its left operand based on the value of its right operand. Here are some of them:</p>
                    <ul class="lst">
                    <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">+=</code> addition assignment</li>
                    <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">-=</code> subtraction assignment</li>
                    <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">*=</code> multiplication assignment</li>
                    <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">/=</code> division assignment</li>
                    </ul></p>
                </div>  
            <div class="right"><div class="container">
                <pre class="language-js">
  <code>// Addition
  5 + 5
  // Subtraction
  10 - 5
  // Multiplication
  5 * 10
  // Division
  10 / 5
  // Modulo
  10 % 5</code></pre>
            </div></div>
                </div>
                <br><hr><br>

<!--*******************************************New Section**********************************************--> 

<div class="main">
    <div class="left"><h3>Null</h3><br>
        <p>Null is a primitive data type. It represents the intentional absence of value. In code, it is represented as <code class="code__2rdF32qjRVp7mMVBHuPwDS">null</code></p></div>
    <div class="right"><div class="container"><pre class="language-js">
  <code>let x = null;</code></pre></div></div>
    </div></div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                        
            <div class="left">
                <h3 >String .length</h3>
                <br>
                <p >The <code class="code__2rdF32qjRVp7mMVBHuPwDS">.length</code> property of a string returns the number of characters that make up the string.</p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-js">                   
  <code>let message = 'good nite';
  console.log(message.length);
  // Prints: 9
    
  console.log('howdy'.length);
  // Prints: 5</code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                
            <div class="left">
                <h3 >Variables</h3>
                <br>
                <p >Variables are used whenever there’s a need to store a piece of data. A variable contains data that can be used in the program elsewhere. Using variables also ensures code re-usability since it can be used to replace the same value in multiple places.</p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-js"><code>                 
  const currency = '$';
  let userIncome = 85000; 
    
  console.log(currency + userIncome + ' is more than the average income.');
  // Prints: $85000 is more than the average income.
                </code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                        
            <div class="left">
                <h3 >let Keyword</h3>
                <br>
                <p >let</code> creates a local variable in JavaScript &amp; can be re-assigned. Initialization during the declaration of a <code class="code__2rdF32qjRVp7mMVBHuPwDS">let</code> variable is optional. A <code class="code__2rdF32qjRVp7mMVBHuPwDS">let</code> variable will contain <code class="code__2rdF32qjRVp7mMVBHuPwDS">undefined</code> if nothing is assigned to it.</p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-js"><code>                 
  let count; 
  console.log(count); // Prints: undefined
  count = 10;
  console.log(count); // Prints: 10
                </code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                                
            <div class="left">
                <h3 >const Keyword</h3>
                <br>
                <p >A constant variable can be declared using the keyword <code class="code__2rdF32qjRVp7mMVBHuPwDS">const</code>. It must have an assignment. Any attempt of re-assigning a <code class="code__2rdF32qjRVp7mMVBHuPwDS">const</code> variable will result in JavaScript runtime error.</p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-js">
  <code>const numberOfColumns = 4;
  numberOfColumns = 8;
  // TypeError: Assignment to constant variable.
</code></pre>
            </div></div>
        </div>
        <br><hr><br>
       
       
        
</body>

</html>


