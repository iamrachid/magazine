function showCart() 
{
    document.getElementById("but_chart").click();
}

function validateCard(num)
{
    var oddSum = 0;
    var evenSum = 0;
    var numToString = num.toString().split("");
    for(var i = 0; i < numToString.length; i++){
      if(i % 2 === 0){
        if(numToString[i] * 2 >= 10){
          evenSum += ((numToString[i] * 2) - 9 );
        } else {
          evenSum += numToString[i] * 2;
        }
      } else {
        oddSum += parseInt(numToString[i]);
      }
    }
    if((oddSum + evenSum) % 10 === 0)
    {
        document.location.replace('facture.php');
    }
    else
    {
        window.alert("Carte non valide,réessayez avec une nouvelle carte");
    }
  }
