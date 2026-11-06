/* *{
    margin: 0 0;
    padding: 0 0;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
} */

body {
    padding-top: 60px; /* Adjust the padding to match the height of your header */
}
.navbar + section {
    margin-top: 40px; /* Adjust the margin to match the height of your header */
}

.container{
    margin: 0 auto;
    border: 1px solid rgb(0, 0, 0);
    width:  80%;
    padding: 1%;
    border-bottom: none;
    border-top: none;
    border-left: none;
    border-right: none;
    
}

.container.header {
        margin: 0 auto;
        width: 80%;
        padding: 1%;
        border: none;
        box-shadow: 0 4px 10px -5px rgba(0, 0, 0, 0.2); /* Box shadow at the bottom */
        position: fixed; /* Make the header fixed */
        top: 0; /* Stick the header to the top */
        left: 0;
        right: 0;
        background-color: white; /* Ensure background color to avoid transparency issues */
        z-index: 1000; /* Ensure the header stays on top */
}


.logo{
    width: 12%;
    float: left;
}
.image-responsive{
    width: 90%;
}
.image-responsive .accessories{
    opacity: 70%;
}

/* css for navbar section */
.text-center{
    text-align: center;
}
.menu ul{
    list-style-type: none;
}
.menu li{
    display: inline;
    margin: 15px;
}
.menu a{
    text-decoration: none;
    width: 10px;
    color: rgb(0, 0, 0);
    font-weight: bolder;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.menu a:hover{
    background-color: rgb(245, 140, 20);
    color: white;
    font-weight: lighter;
    transition: ease;
    padding: 10px;
    border-radius: 2px;
    box-shadow: 0 4px 10px rgb(0 0 0 / 0.2);
}

/* css for product search section */
/* .product-search{
    background-image: url(../images/empty-streaming-room-with-professional-powerful-computer-rgb-keyboard-mouse-headphones-microphone.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: left;
    width: 60%;
    padding: 14% 0;
    margin-left: 135px;
} */

/* Updated product-search section */
.product-search .container {
    display: flex;
    align-items: center;
    background-color: white;
    color: black;
    padding: 1%;
}

.left-side {
    flex: 1;
}

.background-img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
    opacity: 0; /* Initially hidden */
    transform: translateY(-30px); /* Start position (slightly above) */
    animation: slideDown 2s ease-out forwards; /* Smooth transition */
}

@keyframes slideDown {
    to {
        opacity: 1; /* Fade in */
        transform: translateY(0); /* Move to the original position */
    }
}


.right-side {
    flex: 1;
    padding-left: 2%;
}

.right-side h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    margin-right: 85px;
    transition: transform 0.4s ease;
}
.right-side h1:hover {
    transform: translateY(-12px); /* Moves the image up by 10px */
}

.right-side p {
    font-size: 1.1rem;
    text-align: left;
    line-height: 1.5;
    margin-right: 15px;
    opacity: 1; /* Initially hidden */
    transition: transform 0.4s ease; 
}
.right-side p:hover {
    transform: translateY(-12px); /* Moves the image up by 10px */
}



/* Styling the button */
.search-container {
    position: relative;
    margin-top: 20px;
}

.button {
    background-color: #ff7f50; /* Warm orange color */
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 1.1rem;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    text-decoration: none;
}

.button:hover {
    background-color: #e67300; /* Slightly darker shade on hover */
}

/* Styling the form */
.search-form {
    display: none;
    margin-top: 10px;
}

.search-container:hover .search-form {
    display: block;
}

.search-form input[type="search"] {
    padding: 8px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
}

.search-form input[type="submit"] {
    background-color: #ff7f50;
    color: white;
    padding: 8px 16px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.search-form input[type="submit"]:hover {
    background-color: #e67300;
}

.search-container {
    clear: both;
    margin-top: 20px;
    text-align: center; /* Center the button */
}



/* product search ends here */


/* redirecting to about page starts here */

/* Updated product-search section */
.product-search .container {
    display: flex;
    align-items: center;
    background-color: white;
    color: black;
    padding: 1%;
}

.left-side {
    flex: 1;
    padding-right: 2%; /* Space between text and image */
}

.right-side {
    flex: 1;
    text-align: right;
}

.background-img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
}

/* Styling the h1 and p */
.left-side h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    transition: transform 0.4s ease;
}
.left-side h1:hover {
    transform: translateY(-12px); /* Moves the image up by 10px */
}

.left-side p {
    font-size: 1.2rem;
    line-height: 1.5;
    opacity: 1; /* Initially hidden */
    transition: transform 0.4s ease;
}

.left-side p:hover {
    transform: translateY(-12px); /* Moves the image up by 10px */
}


/* Styling the button */
.learn-more-button {
    display: inline-block;
    background-color: black;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    font-size: 1.1rem;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    margin-top: 20px;
    transition: transform 0.4s ease;
}

.learn-more-button:hover {
    background-color:#0707079d;
    transform: translateY(-12px); /* Slightly lighter shade on hover */
}






/* redirecting to about page ends here */

/* css for categories section starts here */
.categories .container{
    background-color: black;
    color: white;
}

.categories h1{
    font-size: 2.5rem;
}

.categories .orange{
    color: #ff7f50;
}

.box-3{
    border: 2px solid rgb(254, 254, 254);
    border-radius: 8px;
    width: 25%;
    float: left;
    margin: 1.3% 3.5%;
    transition: transform 0.3s ease;
}

.image-curve{
    border-radius: 8px;
    text-align: center;
}

.image-responsive-box{
    width: 100%;
    justify-content: center;
}

.box-3:hover {
    transform: scale(1.1); /* Slightly lighter shade on hover */
}


h3{
    color: white;
    font-size: 1.5rem;
}

.float-container{
    position: relative;
}
.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}

.text-center .categories{
    color: #e67300;
}

/* categories section ends here */


/* css for products section starts here */

.product-menu h1{
    font-size: 2.5rem;
}

.product-menu-box{
    border: 2px solid rgb(255, 255, 255);
    border-radius: 5px;
    box-shadow: 0 4px 6px rgb(0 0 0 / 0.2);
    width: 43%;
    margin: 1%;
    padding: 1%;
    float: left;
}


.product-menu{
    margin-bottom: 2%;
}

.product-menu-img{
    width: 33%;
    float: left;
}

.product-menu-desc{
    width: 65%;
    float: left;
    margin-left: 10px;
}

.product-detail{
    font-size: 1rem;
    color: #585858;
}

.order-button{
    display: inline-block;
    background-color: black;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    font-size: 1.1rem;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    margin-top: 1px;
    transition: transform 0.4s ease;
}

.order-button:hover{
    background-color:#0707079d;
    transform: translateY(-12px);
}
.see-all{
    text-decoration: none;
    border-radius: 8px;
    padding: 13px;
    color: white;
    background-color: #ff7f50;
    
}
.see-all:hover{
    background-color: #da6d00;
    border: 2px solid orange;
}

/* css for products section ends here */

/* css for product search section starts here */
.search-text{
    color: #e67300;
    text-decoration: none;
}

.product-search-front2{
    padding-left: 360px;
    padding-right: 360px;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-left: 100px;
}



/* css for product search section ends here */



/* css for order section starts here */
.cart-item {
    padding: 20px;
    border-bottom: 1px solid #ddd;
}

.checkout-button, .remove {
    background-color: #e77518;
    color: white;
    padding: 10px;
    text-decoration: none;
    border-radius: 5px;
}

.checkout-button:hover, .remove:hover {
    background-color:#944a01;
}



.cart-icon img {
    vertical-align: middle;
    width: 30px;
}

.cart-icon span {
    font-size: 14px;
    font-weight: bold;
}

/* css for order section ends here */



.social{
    background-color: rgb(0 0 0 / 57%);
    color: white;
    margin-left: 135px;
    margin-right: 135px;
}
.social a{
    text-decoration: none;
    width: 10px;
    color: rgb(255, 248, 234);
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.footer{
    background-color: black;
    color: white;
    margin-left: 135px;
    margin-right: 135px;
}

.clearfix{
    clear: both;
    float: none;
}





/* product page trial */

