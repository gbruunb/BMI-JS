function bmi(){
    let height = document.getElementById("height").value;
    let weight = document.getElementById("weight").value;
    
    let bmi = (weight/((height/100)**2)).toFixed(2);
    let total = document.getElementById("bmi");
    total.innerHTML = bmi;

    if(bmi<18.50){
        document.querySelector("#meaning").innerHTML="น้ำหนักต่ำกว่าเกณฑ์";
        document.querySelector(".order-card").classList.remove("bg-c-blue");
        document.querySelector(".order-card").classList.remove("bg-c-green");
        document.querySelector(".order-card").classList.remove("bg-c-pink");
        document.querySelector(".order-card").classList.toggle("bg-c-blue");
    }else if(bmi<23.00){
        document.querySelector("#meaning").innerHTML="สมส่วน";
        document.querySelector(".order-card").classList.remove("bg-c-blue");
        document.querySelector(".order-card").classList.remove("bg-c-green");
        document.querySelector(".order-card").classList.remove("bg-c-pink");
        document.querySelector(".order-card").classList.toggle("bg-c-green");

    }else if(bmi<25.00){
        document.querySelector("#meaning").innerHTML="น้ำหนักเกิน";
        document.querySelector(".order-card").classList.remove("bg-c-blue");
        document.querySelector(".order-card").classList.remove("bg-c-green");
        document.querySelector(".order-card").classList.remove("bg-c-pink");
        document.querySelector(".order-card").classList.toggle("bg-c-pink");
    }else if(bmi<=30.00){
        document.querySelector("#meaning").innerHTML="โรคอ้วน";
        document.querySelector(".order-card").classList.remove("bg-c-blue");
        document.querySelector(".order-card").classList.remove("bg-c-green");
        document.querySelector(".order-card").classList.remove("bg-c-pink");
        document.querySelector(".order-card").classList.toggle("bg-c-pink");
    }else if(bmi>30.00){
        document.querySelector("#meaning").innerHTML="โรคอ้วนอันตราย";
        document.querySelector(".order-card").classList.remove("bg-c-blue");
        document.querySelector(".order-card").classList.remove("bg-c-green");
        document.querySelector(".order-card").classList.remove("bg-c-pink");
        document.querySelector(".order-card").classList.toggle("bg-c-pink");
    }
    
}
