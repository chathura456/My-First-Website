const left = document.querySelector(".left"),
    right = document.querySelector(".right"),
    editor = document.querySelector(".editor"),
    run = document.querySelector(".btn-run"),
    iframe = document.querySelector(".iframe"),
    dark = document.querySelector(".btn-dark"),
    light = document.querySelector(".btn-light");


//Run Btn Event Listner
run.addEventListener("click",()=>{
    const html = editor.textContent;
    iframe.src="data:text/html;charset=utf-8,"+encodeURI(html);
})

//Set dark mode
dark.addEventListener("click",()=>{
    editor.style.backgroundColor="#363836";
    editor.style.color="#eee";
})

//Set Light Mode
light.addEventListener("click",()=>{
    editor.style.backgroundColor="";
    editor.style.color="";
})

//Set Live Mode
document.getElementById("live").onclick=function(){
    if(this.checked){
        editor.addEventListener("keyup",()=>{
            const html = editor.textContent;
            iframe.src="data:text/html;charset=utf-8,"+encodeURI(html);
        })
    }
}