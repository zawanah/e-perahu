/*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 var ticket_prices = new Array();
 ticket_prices["None"]=0;
 ticket_prices["One Way"]=1;
 ticket_prices["Two Way"]=2;
 ticket_prices["Kampong Ayer"]=7;
 ticket_prices["Pulau Chermin"]=14;
 ticket_prices["Nurul Iman"]=11;
 ticket_prices["Full"]=32;

 //Set up an associative array
 //The keys represent the quantity type
 //The value represents the ticket quantity
 //We use this this array when the user selects a quantity from the form
 var ticket_quantity= new Array();
 ticket_quantity["zero"]=0;
 ticket_quantity["one"]=1;
 ticket_quantity["two"]=2;
 ticket_quantity["three"]=3;
 ticket_quantity["four"]=4;
 ticket_quantity["five"]=5;
 ticket_quantity["six"]=6;
 ticket_quantity["seven"]=7;
 ticket_quantity["eight"]=8;
 ticket_quantity["nine"]=9;
 ticket_quantity["ten"]=10;

// getTicketPrice() finds the price based on selected ticket
// Here, we need to take user's the selection from radio button selection
function getTicketPrice()
{
    var ticketPrice=0;
    //Get a reference to the form id="ticketform"
    var theForm = document.forms["ticketform"];
    //Get a reference to the cake the user Chooses name=selectedticket":
    var selectedticket = theForm.elements["selectedticket"];
    //Here since there are 4 radio buttons selectedticket.length = 4
    //We loop through each radio buttons
    for(var i = 0; i < selectedticket.length; i++)
    {
        //if the radio button is checked
        if(selectedticket[i].selected)
        {
            //we set ticketPrice to the value of the selected radio button
            //by using the ticket_prices array
            //We get the selected Items value
            //For example ticket_prices["price8".value]"
            ticketPrice = ticket_prices[selectedticket[i].value];
            //If we get a match then we break out of this loop
            //No reason to continue if we get a match
            break;
        }
    }
    //We return the ticketPrice
    return ticketPrice;
}

//This function finds the ticket quantity based on the
//drop down selection
function getTicketQuantity()
{
    var ticketQuantity=0;
    //Get a reference to the form id="ticketform"
    var theForm = document.forms["ticketform"];
    //Get a reference to the select id="quantity"
     var selectedquantity = theForm.elements["quantity"];

    //set ticketquantity equal to value user chose
    ticketQuantity = ticket_quantity[selectedquantity.value];

    //finally we return ticketQuantity
    return ticketQuantity;
}

function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var ticketCost = getTicketPrice() * getTicketQuantity();

    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "BND$"+ticketCost;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}
