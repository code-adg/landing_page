document.getElementById("userName").innerText = localStorage.getItem("name");

function goToNextPage() {
    var occasion = document.getElementById("occasion").value;
    var name = document.getElementById("name").value;

    if (occasion && name) {
        localStorage.setItem("occasion", occasion);
        localStorage.setItem("name", name);
        document.body.classList.add("fadeOut");
        setTimeout(function() {
            window.location.href = "nextPage.html";
        }, 500);
    } else {
        alert("Please provide your name and select an occasion.");
    }
}

function calculatePrice() {
    var noOfTrees = document.getElementById("noOfTrees").value;
    var treeType = document.getElementById("treeType").value;
    var area = document.getElementById("area").value;

    if (noOfTrees && treeType && area) {
        var price = noOfTrees * getPriceByTreeType(treeType);
        document.getElementById("price").innerText = "Total Price: $" + price.toFixed(2);
    } else {
        alert("Please provide all details.");
    }
}

function getPriceByTreeType(treeType) {
    switch (treeType) {
        case "oak":
            return 5.00;
        case "pine":
            return 4.00;
        case "maple":
            return 6.00;
        default:
            return 0.00;
    }
}

function processPayment() {
    alert("Payment processing not implemented in this example.");
}
