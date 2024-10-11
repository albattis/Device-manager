

    function checkedproccesoramd()
    {

        const radioButtons=document.querySelectorAll("input[name='radioprocessor']");
        const intel=document.getElementById("gener");
        let checkedprocessordiv=document.getElementById('checkedprocessor');
        let selectedprocessor;
        for (const radioButton of radioButtons) {
        if (radioButton.checked) {
        selectedprocessor=radioButton.value;
            let gyujto=document.getElementById("processorgyujto");
            gyujto.value='';
    }
        if(selectedprocessor=="on")
    {
        checkedprocessordiv.innerHTML='<input type="text" name="processor" id="ar" value="AMD ">';
        intel.innerHTML="";
    }
    }
    }
    function checkedproccesorintel()
    {

        const radioButtons=document.querySelectorAll("input[name='radioprocessor']");
        let gyujto=document.getElementById("processorgyujto");
        let checkedprocessordiv=document.getElementById('checkedprocessor');
        let selectedprocessor;
        for (const radioButton of radioButtons) {
        if (radioButton.checked) {
        selectedprocessor=radioButton.value;

    }
        if(selectedprocessor=="on")
    {
        checkedprocessordiv.innerHTML='<div id="3generation"><label for="intel">3.Generáció</label><input type = "radio" onclick="generationthree()" name = "intel" id = "intel" >' +
        '<div id="5generation"><label for="intel">5.Generáció</label><input type = "radio" name = "intel" onclick="generationfive()" id = "intel" >'+
        '<div id="7generation"><label for="intel">7.Generáció</label><input type ="radio" onclick="generationseven()" name = "intel" id = "intel" >';
    gyujto.value='Intel';
    }
    }
    }


    function generationthree() {
    const radioButtons=document.querySelectorAll("input[name='intel']");
    let gyujto=document.getElementById("processorgyujto");
    let checkedprocessordiv=document.getElementById('gener');
    let selectedprocessor;
    for (const radioButton of radioButtons) {
    if (radioButton.checked) {
    selectedprocessor = radioButton.value;

}
    if (selectedprocessor == "on") {
    checkedprocessordiv.innerHTML = '<label for="tipus">Processzor száma:</label><input style="width:60px;" type="number" name="tipus" id="tipus"><label for="betu">Betűjel:</label><input style="width:30px;" type="text" name="betu" id="betu">';
        checkedprocessordiv.innerHTML+=' <label for="orajel">Őrajel:</label><input type="text" style="width:60px;"name="orajel" id="orajel">';
    gyujto.value='Intel Core I3';
}
}

}
    function generationfive() {
        const radioButtons=document.querySelectorAll("input[name='intel']");
        let gyujto=document.getElementById("processorgyujto");
        let checkedprocessordiv=document.getElementById('gener');
        let selectedprocessor;
        for (const radioButton of radioButtons) {
            if (radioButton.checked) {
                selectedprocessor = radioButton.value;

            }
            if (selectedprocessor == "on") {
                checkedprocessordiv.innerHTML = '<label for="tipus">Processzor száma:</label><input style="width:60px;" type="number" name="tipus" id="tipus"><label for="betu">Betűjel:</label><input style="width:30px;"type="text" name="betu" id="betu"><label for="orajel">Őrajel:</label><input style="width:60px;" type="text" name="orajel" id="orajel"> ';
                gyujto.value ='Intel Core I5';
            }
        }

    }
    function generationseven() {
        const radioButtons=document.querySelectorAll("input[name='intel']");
        let gyujto=document.getElementById("processorgyujto");
        let checkedprocessordiv=document.getElementById('gener');
        let selectedprocessor;
        for (const radioButton of radioButtons) {
            if (radioButton.checked) {
                selectedprocessor = radioButton.value;

            }
            if (selectedprocessor == "on") {
                checkedprocessordiv.innerHTML = '<label for="tipus">Processzor száma:</label><input  style="width:60px;"type="text" name="tipusjel" id="tipusjel"><label for="betu">Betűjel:</label><input style="width:30px;"type="text" name="betu" id="betu"><label for="orajel">Őrajel:</label><input type="text" style="width:60px;" name="orajel" id="orajel"> </div>';
                gyujto.value ='Intel Core I7';
            }
        }

    }
