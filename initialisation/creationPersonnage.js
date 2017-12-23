var ptsDispo = 10;

var Force = {
    name: "force",
    value: 0
};
var Percepetion = {
    name: "percepetion",
    value: 0
};
var Endurance = {
    name: "endurance",
    value: 0
};
var Charisme = {
    name: "charisme",
    value: 0
};
var Intelligence = {
    name: "intelligence",
    value: 0
};
var Agilité = {
    name: "agilité",
    value: 0
};
var Chance = {
    name: "chance",
    value: 0
};


function forcePlus() {
    if (ptsDispo > 0 && Force.value < 10 )
        Force = plus(Force);
        document.getElementById("visuelForce").value=Force.value;
}

function forceMoin(){
    if (ptsDispo <= 10 && Force.value > 0)
        Force = moin(Force);
    document.getElementById("visuelForce").value=Force.value;
}
function percepetionPlus() {
    if (ptsDispo > 0 && Percepetion.value < 10)
        Percepetion = plus(Percepetion);
        document.getElementById("visuelPercepetion").value=Percepetion.value;
}

function percepetionMoin(){
    if (ptsDispo <= 10 && Percepetion.value > 0)
        Percepetion = moin(Percepetion);
        document.getElementById("visuelPercepetion").value=Percepetion.value;
}
function endurancePlus() {
    if (ptsDispo > 0 && Endurance.value < 10)
        Endurance = plus(Endurance);
        document.getElementById("visuelEndurance").value=Endurance.value;
}

function enduranceMoin(){
    if (ptsDispo <= 10 && Endurance.value > 0)
        Endurance = moin(Endurance);
        document.getElementById("visuelEndurance").value=Endurance.value;
}
function charismePlus() {
    if (ptsDispo > 0 && Charisme.value < 10)
        Charisme = plus(Charisme);
        document.getElementById("visuelCharisme").value=Charisme.value;
}

function charismeMoin(){
    if (ptsDispo <= 10 && Charisme.value > 0)
        Charisme = moin(Charisme);
        document.getElementById("visuelCharisme").value=Charisme.value;
}
function intelligencePlus() {
    if (ptsDispo > 0 && Intelligence.value < 10)
        Intelligence = plus(Intelligence);
        document.getElementById("visuelIntelligence").value=Intelligence.value;
}

function intelligenceMoin(){
    if (ptsDispo <= 10 && Intelligence.value > 0)
        Intelligence = moin(Intelligence);
        document.getElementById("visuelIntelligence").value=Intelligence.value;
}
function agilitéPlus() {
    if (ptsDispo > 0 && Agilité.value < 10)
        Agilité = plus(Agilité);
        document.getElementById("visuelAgilité").value=Agilité.value;
}

function agilitéMoin(){
    if (ptsDispo <= 10 && Agilité.value > 0)
        Agilité = moin(Agilité);
        document.getElementById("visuelAgilité").value=Agilité.value;
}
function chancePlus() {
    if (ptsDispo > 0 && Chance.value < 10)
        Chance = plus(Chance);
        document.getElementById("visuelChance").value=Chance.value;
}

function chanceMoin(){
    if (ptsDispo <= 10 && Chance.value > 0)
        Chance = moin(Chance);
        document.getElementById("visuelChance").value=Chance.value;
}


function plus(caract){
    caract.value += 1;
    ptsDispo -= 1;
    document.getElementById("visuelPts").innerHTML=ptsDispo;
    return caract;
}
function moin(caract){
    caract.value -= 1;
    ptsDispo += 1;
    document.getElementById("visuelPts").innerHTML=ptsDispo;
    return caract;
}
window.onload = function(){
    document.getElementById("visuelPts").innerHTML=ptsDispo;
    document.getElementById("visuelForce").value=Force.value;
    document.getElementById("visuelPercepetion").value=Force.value;
    document.getElementById("visuelEndurance").value=Force.value;
    document.getElementById("visuelCharisme").value=Force.value;
    document.getElementById("visuelIntelligence").value=Force.value;
    document.getElementById("visuelAgilité").value=Force.value;
    document.getElementById("visuelChance").value=Force.value;
}
function valid(){
    if (ptsDispo > 0) {
        alert("Vous avez encore des point!");
        return false;
    }
    else
        return true;
}