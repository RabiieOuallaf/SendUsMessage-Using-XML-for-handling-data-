const form = document.getElementById("form"),
      button = document.getElementById("button");


// This part is for preventing the button from refreshing our page
button.addEventListener("click" , (e) => {


    let Hxml = new XMLHttpRequest(); // Creating new xml object;

    Hxml.open("POST" , "formulair_data.php", true ); // Sending POST request to formulair_php file

    Hxml.onload = () => { // Once ajax is loaded

        if(Hxml.readyState == 4 && Hxml.status == 200){
            // If ajax is loaded completely and HTTP status is ok do the following 
            let res = Hxml.response; // Store ajax response

            console.log(res);
        }

    }

    let formData = new FormData(form) // Creating new FormData obj, thid form is responsible of sending 

    Hxml.send(formData);
    

});

// Same idea , just for the form 
form.addEventListener("submit" , (e) => {

    e.preventDefault();

    let Hxml = new XMLHttpRequest();

    Hxml.open("POST" , "formulair_data.php" , false);

    Hxml.onload = () => {
        if(Hxml.readyState == 4 && Hxml.status == 200){

            let res = Hxml.response;

            console.log(res);
        }
    }


    let FormData = new FormData(form);

    Hxml.send(FormData);


});

// This part is responsible of removing placeholder's input 

const input = document.querySelectorAll("#input");
    

for(let In of input){

    In.addEventListener("click", _ => {
        In.setAttribute("placeholder" , "");
    });

    In.addEventListener("blur" , _ => {
        In.setAttribute("placeholder" , "Please enter a value : ");
    });

}

// This part is responsibleo of removing textArea's placeholde

const textArea = document.getElementById("textarea");

textArea.addEventListener("click", _ => {
    textArea.setAttribute("placeholder" , ""); 
});

textArea.addEventListener("blur", _ => {
    textArea.setAttribute("placeholder" , "Please enter a message : "); 
});



