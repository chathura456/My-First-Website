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
    <title>C++ Learn</title>
</head>

<body>
 <!--*******************************************Header**********************************************-->   
 <header class="top">
    <a href="../index.php"><div class="logo"><img src="logo2.png" alt=""></div></a> 
    
        <div class="head">Learn C++ Basics</div>
        <div class="sub"><a href="#">Try it Yourself</a> </div>
               
</header>
<br><br><br><br><br>

<!--*******************************************New Section**********************************************--> 

<div class="main">
    <div class="left"><h3 >Program Structure</h3><br>
        <p>The program runs line by line, from top to bottom:</p>
        <ul class="lst">
        <li>The first line instructs the compiler to locate the file that contains a library called <code class="code__2rdF32qjRVp7mMVBHuPwDS">iostream</code>. This library contains code that allows for input and output.</li>
        <li>The <code class="code__2rdF32qjRVp7mMVBHuPwDS">main()</code> function houses all the instructions for the program.</li>
        </ul></p>
        </div>  
    <div class="right"><div class="container"><pre class="language-cpp">
  <code>#include &lt;iostream&gt;
 
    int main() {
     
      std::cout << "1\n";
      std::cout << "2\n";
      std::cout << "3\n";
     
    }</code></pre></div></div>
    </div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

    <div class="main">
                
        <div class="left">
            <h3 >Basic Output</h3>
            <br>
            <p ><code class="code__2rdF32qjRVp7mMVBHuPwDS">std::cout</code> is the “character output stream” and it is used to write to the standard output. It is followed by the symbols <code class="code__2rdF32qjRVp7mMVBHuPwDS">&lt;&lt;</code> and the value to be displayed.</p>
        </div>
        <div class="right"><div class="container">
            <pre class="language-cpp">
  <code>std::cout << "Hello World!\n"; 
</code></pre>
        </div></div>
    </div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

            <div class="main">
                <div class="left"><h3 >User Input</h3><br>
                    <p><code class="code__2rdF32qjRVp7mMVBHuPwDS">std::cin</code>, which stands for “character input”, reads user input from the keyboard.</p>
                    <br><p class="p__1qg33Igem5pAgn4kPMirjw">Here, the user can enter a number, press <kbd>enter</kbd>, and that number will get stored in <code class="code__2rdF32qjRVp7mMVBHuPwDS">tip</code>.</p>
                </div>  
            <div class="right"><div class="container">
                <pre class="language-cpp">
  <code>int tip = 0;
 
  std::cout << "Enter amount: ";
  std::cin >> tip;</code></pre>
            </div></div>
                </div>
                <br><hr><br>

<!--*******************************************New Section**********************************************-->   

<div class="main">
            
    <div class="left">
        <h3 >New Line</h3>
        <br>
        <p >The escape sequence <code class="code__2rdF32qjRVp7mMVBHuPwDS">\n</code> (backward slash and the letter n) generates a new line in a text string.</p>
    </div>
    <div class="right"><div class="container">
        <pre class="language-cpp">
<code>std::cout << "Hello\n";
std::cout << "Hello again\n";</code></pre>
    </div></div>
</div>
<br><hr><br>

<!--*******************************************New Section**********************************************--> 

<div class="main">
    <div class="left"><h3>while Loop</h3><br>
        <p>A <code class="code__2rdF32qjRVp7mMVBHuPwDS">while</code> loop statement repeatedly executes the code block within as long as the condition is <code class="code__2rdF32qjRVp7mMVBHuPwDS">true</code>. The moment the condition becomes <code class="code__2rdF32qjRVp7mMVBHuPwDS">false</code>, the program will exit the loop.</p><br>
        <p class="p__1qg33Igem5pAgn4kPMirjw">Note that the <code class="code__2rdF32qjRVp7mMVBHuPwDS">while</code> loop might not ever run. If the condition is <code class="code__2rdF32qjRVp7mMVBHuPwDS">false</code> initially, the code block will be skipped.</p></div>
    <div class="right"><div class="container"><pre class="language-cpp">
  <code>while (password != 1234) {
     
      std::cout << "Try again: ";
      std::cin >> password;
     
    }</code></pre></div></div>
    </div></div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                        
            <div class="left">
                <h3 >for Loop</h3>
                <br>
                <p >A <code class="code__2rdF32qjRVp7mMVBHuPwDS">for</code> loop executes a code block a specific number of times. It has three parts: </p>
                <ul class="lst">
                <li >The initialization of a counter</li>
                <li >The continue condition</li>
                <li >The increment/decrement of the counter</li>
                </ul>
                <p >This example prints 0 to 9 on the screen.</p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-cpp">                   
  <code>for (int i = 0; i < 10; i++) {
      
    std::cout << i << "\n";
      
  }</code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                
            <div class="left">
                <h3 >.size() Function</h3>
                <br>
                <p >The <code class="code__2rdF32qjRVp7mMVBHuPwDS">.size()</code> function can be used to return the number of elements in a vector, like <code class="code__2rdF32qjRVp7mMVBHuPwDS">name.size()</code></p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-cpp">                 
  <code>std::vector &lt;std::string&gt; employees;

    employees.push_back("michael");
    employees.push_back("jim");
    employees.push_back("pam");
    employees.push_back("dwight");
        
  std::cout << employees.size();
  // Prints: 4</code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                        
            <div class="left">
                <h3 >push_back() & .pop_back()</h3>
                <br>
                <p >The following functions can be used to add and remove an element in a vector:</p>
                <ul class="lst">
                <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">.push_back()</code> to add an element to the “end” of a vector</li>
                <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">.pop_back()</code> to remove an element from the “end” of a vector</li>
                </ul></p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-cpp">                 
  <code>std::vector &lt;std::string&gt; wishlist;
 
    wishlist.push_back("Oculus");
    wishlist.push_back("Telecaster");
     
    wishlist.pop_back();
     
  std::cout << wishlist.size(); 
  // Prints: 1</code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                                
            <div class="left">
                <h3 >Class Members</h3>
                <br>
                <p >A class is comprised of class members:</p>
                <ul class="lst">
                <li ><em>Attributes</em>, also known as member data, consist of information about an instance of the class. </li>
                <li ><em>Methods</em>, also known as member functions, are functions that can be used with an instance of the class.</li>
                </ul></p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-cpp">
  <code>class City {
 
    // Attribute
    int population;
   
  public:
    // Method
    void add_resident() {
      population++;
    }
   
  };</code></pre>
            </div></div>
        </div>
        <br><hr><br>
       
       
        
</body>

</html>


