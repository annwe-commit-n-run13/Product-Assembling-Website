/* Reset and Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

/* Navbar Styling */
.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 80px; /* Adjust height based on your navbar */
    background-color: #191a2b; /* Navbar background color */
    display: flex;
    align-items: center;
    padding: 0 20px;
    z-index: 1000; /* Ensure navbar stays on top */
}

/* Main Container */
.container {
    min-height: 100vh;
    width: 100%;
    background-color: #191a2b;
    padding-top: 80px; /* Matches navbar height */
}

/* Service Wrapper */
.service-wrapper {
    padding: 5% 8%;
}

/* Service Section */
.service {
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Main Heading */
h1 {
    color: #fff;
    font-size: 5rem;
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: transparent;
    letter-spacing: 4px;
    background: linear-gradient(
        8deg,
        rgba(8, 52, 83, 1) 0%,
        rgba(0, 230, 173, 1) 41%,
        rgba(41, 17, 45, 1) 100%
    );
    
    -webkit-text-fill-color: transparent;
    position: relative;
    z-index: 1; /* Content below navbar */
}

/* Decorative Elements for h1 */
h1::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 10%;
    height: 8px;
    width: 80%;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.05);
    z-index: 0; /* Below content */
}

h1 span {
    position: absolute;
    top: 100%;
    left: 10%;
    height: 8px;
    width: 8px;
    border-radius: 50%;
    background-color: #72e2ae;
    animation: anim 5s linear infinite;
    z-index: 0; /* Ensure it doesn’t overlap navbar */
}

/* Animation for h1 span */
@keyframes anim {
    95% {
        opacity: 1;
    }
    100% {
        opacity: 0;
        left: 88%;
    }
}

/* Cards Section */
.cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 80px;
}

/* Card Styling */
.card {
    height: 350px;
    width: 370px;
    background-color: #1c2335;
    padding: 3% 8%;
    border: 0.2px solid rgba(114, 226, 174, 0.2);
    border-radius: 8px;
    transition: 0.6s;
    display: flex;
    align-items: center;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    z-index: 1; /* Ensure content below navbar */
}

.card::after {
    content: "";
    position: absolute;
    top: 150%;
    left: -200px;
    width: 120%;
    transform: rotate(50deg);
    background-color: #fff;
    height: 18px;
    filter: blur(30px);
    opacity: 0.5;
    transition: 1s;
}

.card:hover::after {
    width: 225%;
    top: -100%;
}

/* Card Icons */
.card i {
    color: #72e2ae;
    margin-top: 30px;
    margin-bottom: 20px;
    font-size: 4.8rem;
}

/* Card Titles */
.card h2 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
}

/* Card Paragraph */
.card p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 16px;
    line-height: 1.5;
    text-align: center;
    margin-top: 10px;
}
