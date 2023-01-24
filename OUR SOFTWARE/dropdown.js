
var myData = [  
     ["Honda","Civic","4dr"],
     ["Honda","Civic","2dr"],
     ["Honda","Accord","4dr"],
     ["Honda","Accord","Hybrid"],
     ["Toyota","Corolla", "Regular"],
     ["Toyota","Corolla", "Hybrid"],
     ["Toyota","Corolla", "Hatchback"],
     ["Toyota","Camry", "Hybrid"],
     ["Toyota","Camry","Not Hybrid"],
     ["Mercedes","C Class","C300"],
     ["Mercedes","E Class", "E350"],
     ["Mercedes","E Class","E550"],
     ["Mercedes","S Class","500"],
     ["Mercedes","S Class", "600"],
     ["Mercedes","S Class","550"]
];

function makeDropDown(data,level1Filter){
const filteredArray = data.filter(r => r[0] === level1Filter);

const uniqueOptions = new Set();
filteredArray.forEach(r => uniqueOptions.add(r[1]));

const uniqueList = [...uniqueOptions];

const selectLevel2 = document.getElementById("level2");

selectLeve12. innerHTML ="";

uniqueList.forEach(item => {
     const option = document.createElement("option");
     option.textContent = item;
     selectLevel2.appendChiId(option);
});
}

function applyDropDown(){
    const selectLeve11 = document.getElementById("level1").value;
    makeDropDown(myData,selectLeve11value)
}

document. getElementById("levell").addEventListener("change",applyDropDown);