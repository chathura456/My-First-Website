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
    <title>JAVA Learn</title>
</head>

<body>
 <!--*******************************************Header**********************************************-->   
        <header class="top">
            <a href="../index.php"><div class="logo"><img src="logo2.png" alt=""></div></a> 
            
            
                <div class="head">Learn JAVA Basics</div>
                <div class="sub"><a href="#">Try it Yourself</a> </div>
                       
        </header>
    <div class="insvisible"></div>

<!--*******************************************New Section**********************************************--> 

<div class="main">
    <div class="left"><h3 >Basic Structure</h3><br>
        <p>In Java, every application must contain a <code class="code__2rdF32qjRVp7mMVBHuPwDS">main()</code> method, which is the entry point for the application. All other methods are invoked from the <code class="code__2rdF32qjRVp7mMVBHuPwDS">main()</code> method.</p><br>
        <p >The signature of the method is <code class="code__2rdF32qjRVp7mMVBHuPwDS">public static void main(String[] args) { }</code>. It accepts a single argument: an array of elements of type <code class="code__2rdF32qjRVp7mMVBHuPwDS">String</code>.</p>
        </div>  
    <div class="right"><div class="container"><pre class="language-java">
  <code>public class Person {
  
    public static void main(String[] args) {
      
      System.out.println("Hello, world!");
   
    }
    
  }</code></pre></div></div>
    </div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

    <div class="main">
                
        <div class="left">
            <h3 >Primitive Data Types</h3>
            <br>
            <p >Java’s most basic data types are known as <em>primitive data types</em> and are in the system by default.</p>
            <p >The available types are as follows: </p>
            <ul class="lst">
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">int</code></li>
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">char</code></li>
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">boolean</code></li>
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">byte</code></li>
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">long</code></li>
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">short</code></li>
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">double</code></li>
            <li ><code class="code__2rdF32qjRVp7mMVBHuPwDS">float</code></li>
            </ul>
            <p ><code class="code__2rdF32qjRVp7mMVBHuPwDS">null</code> is another, but it can only ever store the value <code class="code__2rdF32qjRVp7mMVBHuPwDS">null</code>.</p>
        </div>
        <div class="right"><div class="container">
            <pre class="language-java">
  <code>
    int age = 28; 
     
    char grade = 'A';
     
    boolean late = true;
     
    byte b = 20;
     
    long num1 = 1234567;
     
    short no = 10;
     
    float k = (float)12.5;
     
    double pi = 3.14;

</code></pre>
        </div></div>
    </div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

            <div class="main">
                <div class="left"><h3 >Static Typing</h3><br>
                    <p>In Java, the type of a variable is checked at compile time. This is known as static typing. It has the advantage of catching the errors at compile time rather than at execution time. </p><br>

                    <p>  Variables must be declared with the appropriate data type or the program will not compile.</p>
                </div>  
            <div class="right"><div class="container">
                <pre class="language-java">
  <code>
  int i = 10;         // type is int
  char ch = 'a';      // type is char
     
  j = 20;             // won't compile, no type is given
  char name = "Lil";  // won't compile, wrong data type

</code></pre>
            </div></div>
                </div>
                <br><hr><br>

<!--*******************************************New Section**********************************************-->   

<div class="main">
            
    <div class="left">
        <h3 >if else Statements</h3>
        <br>
        <p >An <code class="code__2rdF32qjRVp7mMVBHuPwDS">if</code> statement executes a block of code when a specified boolean expression is evaluated as <code class="code__2rdF32qjRVp7mMVBHuPwDS">true</code></p><br>
        <p >The <code class="code__2rdF32qjRVp7mMVBHuPwDS">else</code> statement executes a block of code when the condition inside the <code class="code__2rdF32qjRVp7mMVBHuPwDS">if</code> statement is <code class="code__2rdF32qjRVp7mMVBHuPwDS">false</code>. The <code class="code__2rdF32qjRVp7mMVBHuPwDS">else</code> statement is always the last condition.</p>
    </div>
    <div class="right"><div class="container">
        <pre class="language-java">
  <code>
  if (true) {
    System.out.println("This code executes");
  }
  // Prints: This code executes
    
  if (false) {
    System.out.println("This code does not execute");
  }
  // There is no output for the above statement

</code></pre>
    </div></div>
</div>
<br><hr><br>

<!--*******************************************New Section**********************************************--> 

<div class="main">
    <div class="left"><h3>Nested Conditional Statements</h3><br>
        <p>A <code class="code__2rdF32qjRVp7mMVBHuPwDS">while</code> loop statement repeatedly executes the code block within as long as the condition is <code class="code__2rdF32qjRVp7mMVBHuPwDS">true</code>. The moment the condition becomes <code class="code__2rdF32qjRVp7mMVBHuPwDS">false</code>, the program will exit the loop.</p><br>
        <p >Note that the <code class="code__2rdF32qjRVp7mMVBHuPwDS">while</code> loop might not ever run. If the condition is <code class="code__2rdF32qjRVp7mMVBHuPwDS">false</code> initially, the code block will be skipped.</p></div>
    <div class="right"><div class="container"><pre class="language-java">
  <code>
    boolean studied = true;
    boolean wellRested = true;
     
    if (wellRested) {
      System.out.println("Best of luck today!");  
      if (studied) {
        System.out.println("You are prepared for your exam!");
      } else {
        System.out.println("Study before your exam!");
      }
    }
     
    // Prints: Best of luck today!
    // Prints: You are prepared for your exam!</code></pre></div></div>
    </div></div>
    <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                        
            <div class="left">
                <h3 >Array creation in Java</h3>
                <br>
                <p >In Java, an array can be created in the following ways:</p>
                <ul class="lst">
                <li >Using the <code class="code__2rdF32qjRVp7mMVBHuPwDS">{}</code> notation, by adding each element all at once.</li>
                <li >Using the <code class="code__2rdF32qjRVp7mMVBHuPwDS">new</code> keyword, and assigning each position of the array individually.</li>
                </ul></p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-java">                   
  <code>int[] age = {20, 21, 30};
 
  int[] marks = new int[3];
  marks[0] = 50; 
  marks[1] = 70;
  marks[2] = 93;

</code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                
            <div class="left">
                <h3 >Modifying ArrayLists in Java</h3>
                <br>
                <p >An <code class="code__2rdF32qjRVp7mMVBHuPwDS">ArrayList</code> can easily be modified using built in methods. </p><br>
                <p >To add elements to an <code class="code__2rdF32qjRVp7mMVBHuPwDS">ArrayList</code>, you use the <code class="code__2rdF32qjRVp7mMVBHuPwDS">add()</code> method. The element that you want to add goes inside of the <code class="code__2rdF32qjRVp7mMVBHuPwDS">()</code>.</p><br>
                <p >To remove elements from an <code class="code__2rdF32qjRVp7mMVBHuPwDS">ArrayList</code>, you use the <code class="code__2rdF32qjRVp7mMVBHuPwDS">remove()</code> method. Inside the <code class="code__2rdF32qjRVp7mMVBHuPwDS">()</code> you can specify the index of the element that you want to remove. Alternatively, you can specify directly the element that you want to remove.</p>
            </div>
            <div class="right"><div class="container">
                <pre class="language-java">                 
    <code>import java.util.ArrayList;
     
    public class Students {
      public static void main(String[] args) {
        
        // create an ArrayList called studentList, which initially holds []
        ArrayList&lt;String&gt; studentList = new ArrayList&lt;String&gt;();
        
        // add students to the ArrayList
        studentList.add("John");
        studentList.add("Lily");
        studentList.add("Samantha");
        studentList.add("Tony");
        
        // remove John from the ArrayList, then Lily
        studentList.remove(0);
        studentList.remove("Lily");
        
        // studentList now holds [Samantha, Tony]
        
        System.out.println(studentList);
      }
    }</code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                        
            <div class="left">
                <h3 >concat() String Method in Java</h3>
                <br>
                <p> In Java, the <code class="code__2rdF32qjRVp7mMVBHuPwDS">concat()</code> string method is used to append one <code class="code__2rdF32qjRVp7mMVBHuPwDS">String</code> to the end of another <code class="code__2rdF32qjRVp7mMVBHuPwDS">String</code>. This method returns a <code class="code__2rdF32qjRVp7mMVBHuPwDS">String</code> representing the text of the combined strings.</p>
                
            </div>
            <div class="right"><div class="container">
                <pre class="language-java">                 
    <code>String s1 = "Hello";
    String s2 = " World!";
     
    String s3 = s1.concat(s2);
    // concatenates strings s1 and s2
     
    System.out.println(s3);
    // prints "Hello World!"</code></pre>
            </div></div>
        </div>
        <br><hr><br>

<!--*******************************************New Section**********************************************--> 

        <div class="main">
                                                
            <div class="left">
              
                    <h3 >final Keyword</h3>
                    <br>
                    <p>The value of a variable cannot be changed if the variable was declared using the <code class="code__2rdF32qjRVp7mMVBHuPwDS">final</code> keyword.</p><br>
                    <p class="p__1qg33Igem5pAgn4kPMirjw">Note that the variable must be given a value when it is declared as <code class="code__2rdF32qjRVp7mMVBHuPwDS">final</code>. <code class="code__2rdF32qjRVp7mMVBHuPwDS">final</code> variables cannot be changed; any attempts at doing so will result in an error message.</p>
                    
       
            </div>
            <div class="right"><div class="container">
                <pre class="language-java">
    <code>// Value cannot be changed:
    final double PI = 3.14;</code></pre>
            </div></div>
        </div>
        <br><hr><br>
       
       
        
</body>

</html>


