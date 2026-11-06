body {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin: 0;
    padding: 0;
}

.heading_vintageEssence {
    text-align: center;
    background-color: #e0e0d3; /* creme */
    padding: 15px 0; /* Combined padding-top and padding-bottom */
    margin: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 4px 10px rgb(0 0 0 / 0.2);

}

.admin-panel {
    display: flex;
    align-items: center;
    padding: 13px;
    margin-top: 65px; /* Add margin to avoid overlap with fixed header */
    background-color: #676127; /* OLIVE */
}

.admin-heading {
    flex: 1;
    font-size: 1.8em;
    color: #ffffff;
    margin: 0;
}

.navbar {
    flex: 2;
    align-items: center;
    margin-left: 100px;
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.navbar ul li {
    display: inline;
    margin-left: 15px;
}
/* navbar texts */
.navbar ul li a {
    text-decoration: none;
    color: #cfc4b1; /* creme */
    font-size: medium;
}

.navbar ul li a:hover {
    color: #d2d2c5;
    padding: 6px;
    border-radius: 20px;
    background-color: #4d4f33;
}
/* main content */
.main-content{
    padding: 25px 0;
    background-color: #e0e0d3;
}
/* css for the boxes*/
.col-4{
    width: 18%;
    margin: 1%;
    padding: 1.5%;
    background-color: rgb(128, 60, 60);
    color: #e0e0d3;
    text-align: center;
    float: left;
    border-radius: 5px;
}

/* manage admin css  starts here*/
.table-manage-admin{
    width: 100%;
    text-align: center;
}

table tr th{
    border-bottom: 1px solid rgb(82, 63, 39);
    border-right:  1px solid rgb(82, 63, 39);
    padding: 1.5%;
    text-align: left;
    text-align: center;
}
table tr td{
    padding: 1.5%;
}

.logout-button{
    padding: 5px;
    float: right;
    background-color: rgba(215, 214, 190, 0.258);
    color: #1e1d1d;
    border: none;
    border-radius: 35px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-decoration: none;
}



.update-admin-button{
    padding: 10px;
    margin-right: 15px;
    background-color: rgb(68, 101, 68);
    color: #cfc4b1;
    border: none;
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-decoration: none;
}

.delete-admin-button{
    padding: 10px;
    background-color: rgb(102, 54, 45);
    color: #cfc4b1;
    border: none;
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-decoration: none;
}
.update-admin-button:hover{
    background-color: rgb(8, 83, 8);
    cursor: pointer;
    border: #fefbf5;
}
.delete-admin-button:hover{
    background-color: rgb(140, 15, 15);
    cursor: pointer;
    border: rgb(237, 231, 220);
}
.change-password{
    padding: 10px;
    margin-right: 15px;
    background-color: transparent;
    color: rgb(155, 108, 21);;
    border: 2px solid rgb(188, 141, 55);
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-decoration: none;
}


.success-message-add{
    font-style: italic;
    font-size: medium;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgb(35, 117, 35);
    font-weight: bolder;
}

.success-message-delete{
    font-style: italic;
    font-size: medium;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgb(151, 7, 7);
    font-weight: bolder;
}


.button-add-admin{
    background-color: rgb(192, 148, 68);
    color: black;
    padding: 15px;
    text-decoration: none;
}
.button-add-admin:hover{
    background-color: rgb(124, 105, 44);
    color: #e8dcc7;
}

.add-admin-table{
    width: 30%;
}


.input-of-add-admin{
    width: 100%;
    padding: 12px 20px;
    box-sizing: border-box;
    background-color: rgb(187, 179, 158);
    color: #000000;
}

.input-of-login-admin-username{
    width: 50%;
    padding: 12px 20px;
    box-sizing: border-box;
    background-color: rgb(196, 189, 172);
    color: #000000;
   
}
.input-of-login-admin-password{
    width: 50%;
    padding: 12px 20px;
    box-sizing: border-box;
    background-color: rgb(196, 189, 172);
    color: #000000;
 
}


/* footer starts here*/
.footer-text{
    text-align: center;
    background-color: #36341e;
    color: #cfc4b1;
    padding: 15px;
}

.clearfix{
    float: none;
    clear: both;
}

.wrapper{
    border: 1px;
    margin: 0 auto;
    padding: 1%;
    width: 80;
}

.text-center
{
    margin: auto;
}

