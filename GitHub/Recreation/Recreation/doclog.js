function authenticate(){
    let a=prompt("enter your Names");
    let b=prompt("enter your PhoneNumber");
    let c=prompt("what is your sex ");
    let d=prompt("Enter your age");
    let e=prompt("what is your blood group");
    let f=prompt("If you have any allergies please enter them here");
    let g=prompt("what is your marital status");
    let h=prompt("Enter your email");
    care(a,b,c,d,e,f,g,h);
}
function help(){
    alert(authenticate("you will recieve a confirmatory email shortly"));
}
function give(){
    alert(help());
}