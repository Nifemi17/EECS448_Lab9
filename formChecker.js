function validation()
{
  var qty = document.getElementById('qty-select').value;
  if(!qty ){
    console.log("nothing")
  }
  if (qty === "")
  {
    console.log("sup")
  }
   console.log(qty);
  var re = /\S+@\S+\.\S+/;
  let x = document.forms["myForm"]["uname"].value;
  if (x == "") {
    alert("Username must be filled out");
    return false;
  }
  if(re.test(x) == false)
  {
    alert("Please input a valid email address");
  }
  let y = document.forms["myForm"]["psw"].value;
  if (y == "") {
    alert("Please create a password");
    return false;
  }
  var checkShipping = document.querySelector('input[name="shipping"]:checked');
  if (checkShipping == null)
  {
    alert("Please select a shipping option")
    return false;
  }
}

