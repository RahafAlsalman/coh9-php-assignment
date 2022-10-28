// Security Gaurd, allows people to enter to a party, only people between 18 and 35 years old can enter the party

// Loop through number of people.
let age=15;
do {
    
  console.log("hi waht is your age?" + age);
  age++;   // ask each user about his/her age.
  
  if(age < 18)  {  
  console.log("sorry you are too young");// if younger than 18, print: you are too young
}
 else if (age > 35) {
        console.log("sorry you are too old"); // if older than 35, print: you are too old
    }
    else{
        console.log("waht is your name? and welcom to the party"); // if between 18 and 35, ask the user about his/her name and welcome the user to the party.
    }
  
  } while (confirm("is there anyone else?"));
  
