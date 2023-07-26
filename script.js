function writeDaromad() {
    let inputText1 = document.getElementById("inputDaromad").value;

    let number = document.getElementById("inputDaromad").value;
    let str = number.toString();
    let result = "";
    if (str.length > 3) {
    let reversedStr = str.split("").reverse().join("");
    for (let i = 0; i < reversedStr.length; i += 3) {
        result += reversedStr.substring(i, i + 3);
        result += ".";
    }
    result = result.split("").reverse().join("").slice(1);
    } else {
    result = str;
    }
    document.getElementById("daromadInp").textContent = result;
}
function writeXarajat() {
    let inputText2 = document.getElementById("inputXarajat").value;

    let number = document.getElementById("inputXarajat").value;
    let str = number.toString();
    let result = "";
    if (str.length > 3) {
    let reversedStr = str.split("").reverse().join("");
    for (let i = 0; i < reversedStr.length; i += 3) {
        result += reversedStr.substring(i, i + 3);
        result += ".";
    }
    result = result.split("").reverse().join("").slice(1);
    } else {
    result = str;
    }
    document.getElementById("xarajatInp").textContent = result;
}

    let money = document.getElementById("money").innerHTML;
    if (money >= 0) {
        document.getElementById("money").style.color = "#4CAF50";
    }else if(money <= 0){
        document.getElementById("money").style.color = "red";
    }

    let number = document.getElementById("money").innerHTML;
    let str = number.toString();
    let result = "";
    if (str.length > 3) {
    let reversedStr = str.split("").reverse().join("");
    for (let i = 0; i < reversedStr.length; i += 3) {
        result += reversedStr.substring(i, i + 3);
        result += ".";
    }
    result = result.split("").reverse().join("").slice(1);
    } else {
    result = str;
    }
    document.getElementById("money").innerHTML = result;