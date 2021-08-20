<?php
  header('Content-type: text/css; charset:UTF-8');
?>

body {
  margin: 0;
  font-family: Verdana, sans-serif;
}
* {
  box-sizing:border-box;
}
/*BACKGROUNDS*/
.background1 {
  background-image: url("background1.jpg");
  width:100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.background4 {
  background-image: url("background4.jpg");
  width:100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/*BODY*/
.container {
  padding: 14px;
}
.row:after {
  content: "";
  display: table;
  clear: both
}
.column-20 {
  float: left;
  width: 20%;
  padding: 10px;
  text-align: center;
}
.column-25 {
  float: left;
  width: 25%;
  padding: 10px;
  text-align: center;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  text-align: center;

}
.column-66 {
  float: left;
  width: 66.66666%;
  padding: 10px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 10px;
}
@media screen and (max-width: 700px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
}
@media screen and (max-width: 700px) {
  .column {
    width: 100%;
    text-align: center;
  }
}
@media screen and (max-width: 1200px) {
  .column-25 {
    width: 50%;
    text-align: center;
  }
}
@media screen and (max-width: 600px) {
  .column-25 {
    width: 100%;
    text-align: center;
  }
}
@media screen and (max-width:1200px) {
  .column-20 {
    width: 100%;
    text-align: center;
  }
}
/*BUTTONS*/
.btn2 {
  border: 1px solid black;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.5); /* Black w/opacity/see-through */
  color: #FFFF00;
  padding: 1px;
  font-size: 20px;
  cursor: pointer;
  margin: 1px;
  width: 60%;
  height: 40px;
  text-align: center;
}
.btn5 {
  border: 1px solid black;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.5); /* Black w/opacity/see-through */
  color: #FFFF00;
  padding: 1px;
  font-size: 15px;
  cursor: pointer;
  margin: 1px;
  width: 15%;
  height: 30px;
  text-align: center;
}
.lnk {
  border-color: #FFFF00;
  color: white;
  border-radius: 10px;
}
.lnk:hover {
  background-color: #FFFF00;
  color: #000000;
}
/*SOCIAL MEDIA BUTTONS*/
.btn3 {
  border: 1px solid black;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.5); /* Black w/opacity/see-through */
  color: #FFFF00;
  padding: 1px;
  font-size: 20px;
  cursor: pointer;
  margin: 1px;
  width: 40px;
  height: 40px;
  text-align: center;
}
.social {
  border-color: #FFFF00;
  color: white;
  border-radius: 10px;
}
.social:hover {
  background-color: #FFFF00;
  color: #000000;
}
/*FORM*/
/*CONTACT CARD*/
.contactcard {
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.0);
  color: white;
  text-align: center;
}
.contactcard2 {
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.8);
  color: white;
  text-align: center;
}
.cardcontainer {
  padding: 10px;
}
/*PRODUCT CARD*/
.card {
  background-color: rgb(0,0,0);
  background-color: rgba(5,5,5, 0.0);
  max-width: 300px;
  margin: auto;
  border-radius: 10px;
  text-align: center;
  font-family: arial;
  color: #FFFF00;
}
.price {
  color: grey;
  font-size: 22px;
}
.cardbutton {
border: 1px solid black;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.5); /* Black w/opacity/see-through */
  color: #FFFF00;
  padding: 5px 5px;
  font-size: 13px;
  cursor: pointer;
  height: 50px;
  width: 100%;
  text-align: center;
  border-color: #FFFF00;
  color: white;
  border-radius: 10px;
}
.card button:hover {
  opacity: 0.7;
}
/*FORM*/
/* Style inputs with type="text", select elements and textareas */
input[type=text], input[type=password], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
.subbtn {
  background-color: #FFFF00;
  color: #000000;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
.subbtn:hover {
  background-color: #000000;
  color: #FFFF00;
}