// a simple function that triggers alert box  
function hello(){
    alert("welcome to my websites");
}
// a simple function to add 2 numbers
function add(){
    document.write(5+6);
}

function changecolor(){
    //function to change the background 
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor=color;
    }

function changefColor(){
//function to change font color
let fcolor 
= document.getElementById('fcolor').Value;
document.body.style.backgroundColor = fcolor;
}

//crud
function crud(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First Name must have at least 5 character");
        return false;
    }
}
function crud(){
    let lname=(document.form1.fname.value).trim();
    if (lname.length<8){
        alert("lastt Name must have at least 8 character");
        return false;
    }
}
function fnameVal(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First Name must have at least 5 character");
        return false;
    }

}