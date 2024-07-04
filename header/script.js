function toggle() {

    document.getElementById("dropdown").classList.toggle("show");
    document.getElementById("drpItem").classList.toggle("hide");
    document.getElementById("drpItem1").classList.toggle("hide");
    document.getElementById("drpItem2").classList.toggle("hide");

}

function toggleHeaderSelect(){
    window.location.href = document.getElementById("haederSelect").value;
}

function toggleHeaderSelectLarge(){
    window.location.href = document.getElementById("haederSelectLarge").value;
}