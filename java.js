function myFunction() {
    var x = document.getElementById("exampleInputpassward");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }




  function IsEmpty() {
    if (document.forms['frm'].question.value === "") {
        document.getElementById("EMail").style.borderBlockColor="red"
        document.getElementById("emailerror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The email field is required.';
    //   return false;
        let email=document.forms['frm'].question.value
    }
    if (document.forms['frm'].passwardin.value === "") {
      document.getElementById("exampleInputpassward").style.borderBlockColor="red"
      document.getElementById("passwarderror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The Passward field is required.';
      let Passward=document.forms['frm'].passwardin.value 
   
  }

    if (document.forms['frm'].number1.value === "") {
        document.getElementById("exampleInputEmail12").style.borderBlockColor="red"
        document.getElementById("numbererror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The mobile field is required.';
    //   return false;
    }
    if (document.forms['frm'].fullname.value === "") {
      document.getElementById("full").style.borderBlockColor="red"
      document.getElementById("FullNameerror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The full name field is required.';
  //   return false;
      let email=document.forms['frm'].fullname.value
  }


    if (document.forms['frm'].passwardin2.value === "") {
      document.getElementById("exampleInputpassward2").style.borderBlockColor="red"
      document.getElementById("passwarderror2").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The Passward field is required.';
      let Passward=document.forms['frm'].passwardin2.value 
   
  }
  
  if(document.forms['frm'].passwardin2.value != document.forms['frm'].passwardin.value){
    document.getElementById("exampleInputpassward").style.borderBlockColor="red"
    document.getElementById("exampleInputpassward2").style.borderBlockColor="red"
    document.getElementById("passwarderror2").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The Passward doesnt match.'
    let Passward=document.forms['frm'].passwardin2.value 

  }


  if (document.forms['frm'].birthday.value === "") {
    document.getElementById("birthday").style.borderBlockColor="red"
    document.getElementById("birthdayerror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The Birthday field is required.';
    let Passward=document.forms['frm'].birthday.value 
 
}

 numberLength= document.forms['frm'].number1.value.length
if (numberLength!=14){
  document.getElementById("exampleInputEmail12").style.borderBlockColor="red"
  document.getElementById("numbererror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The mobile number length have to be 14 digits.';

}

  



     var y= document.forms['frm'].passwardin.value.length
    if ( y<8) {
        document.getElementById("exampleInputpassward").style.borderBlockColor="red"
        document.getElementById("passwarderror").textContent=' "The Passward should be more than 8 characters';
      return false;
    }

    var lowerCaseLetters = /[a-z]/g;
    if(document.forms['frm'].passwardin.value.match(lowerCaseLetters)==false) {  
      document.getElementById("exampleInputpassward").style.borderBlockColor="red"
      document.getElementById("passwarderror3").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The Passward should have lower case letters';
  }

  var upperCaseLetters = /[A-Z]/g;
  if(document.forms['frm'].passwardin.value.match(lowerCaseLetters)==false) {  
    document.getElementById("exampleInputpassward").style.borderBlockColor="red"
    document.getElementById("passwarderror4").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The Passward should have lower case letters';
}
else{
  window.open("login.php") ;

}



// if (document.forms['frm'].question.value !== ""&& document.forms['frm'].number1.value !== ""&& document.forms['frm'].passwardin.value !== ""&& y>8 && y<16 && document.getElementById("flexCheckDefault1").checked === true){
//       var data= window.localStorage.getItem("data") 
//       if (data){
//         data=JSON.parse(data)
//         data.push([document.forms['frm'].question.value,document.forms['frm'].passwardin.value])
//       }else{
//         var data=[]
//         data.push([document.forms['frm'].question.value,document.forms['frm'].passwardin.value])

//       }
//       window.localStorage.setItem("data",JSON.stringify(data))
//     // window.localStorage.setItem(document.forms['frm'].question.value ,document.forms['frm'].passwardin.value)
// }
//   }
  
//   function IsEmptyLog() {
  
//     if (document.forms['frm'].question.value === "") {
//         document.getElementById("EMail").style.borderBlockColor="red"
//         document.getElementById("emailerror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The email field is required.';
//     //   return false;
//         let email=document.forms['frm'].question.value
//     }
//     if (document.forms['frm'].passwardin.value === "") {
//         document.getElementById("exampleInputpassward").style.borderBlockColor="red"
//         document.getElementById("eyeslash").style.marginTop="-14px"
//         document.getElementById("passwarderror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The Passward field is required.';
//         let Passward=document.forms['frm'].passwardin.value 
//       return false;
//     }
// var y= document.forms['frm'].passwardin.value.length
// if ( y<8 || y>16) {
//     document.getElementById("exampleInputpassward").style.borderBlockColor="red"
//     document.getElementById("passwarderror").innerHTML='<i class="fa fa-exclamation-triangle"</i>; "The Passward should be between (8-16) characters';
//   return false;
// }

//  if (document.forms['frm'].question.value !== ""&& document.forms['frm'].passwardin.value !== "" ){
//     var data= window.localStorage.getItem("data") 
//     data=JSON.parse(data)
//     for(let i=0; i<data.length; i++){
//         if (document.forms['frm'].question.value==data[i][0]&& document.forms['frm'].passwardin.value ==data[i][1]){
//             window.sessionStorage.setItem("hello",document.forms['frm'].question.value)
            
//         }
//         else if (document.forms['frm'].question.value!==data[i][0]&& document.forms['frm'].passwardin.value !==data[i][1]){
//             // alert("the passward or username is incorrect!")
//         }
//     }
//  }
  }