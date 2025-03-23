if (document.cookie.includes("addisabled=true")) {
    document.getElementById("ad").classList.add("disable");
}

document.getElementById("ad").addEventListener("click", function() {
    document.getElementById("ad").classList.add("disable");
    document.cookie = "addisabled=true; max-age=360";
});
function clearCookie() {
    document.cookie = "addisabled=; max-age=0";
    document.getElementById("ad").classList.remove("disable");
    alert("Куки очищены, реклама снова видна!");
}