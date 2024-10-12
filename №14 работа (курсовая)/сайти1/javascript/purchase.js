// Ожидаем, когда документ полностью загрузится
document.addEventListener("DOMContentLoaded", function () {
    var purchaseButtons = document.querySelectorAll(".purchase-button");

    purchaseButtons.forEach(function (button) {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            var tariffId = button.getAttribute("data-tariff-id");
            console.log("Выбран тариф с ID: " + tariffId);
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("purchaseModal");
    var closeModal = document.getElementById("closeModal");

    var purchaseButtons = document.querySelectorAll(".purchase-button");

    purchaseButtons.forEach(function (button) {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            var tariffId = button.getAttribute("data-tariff-id");
            document.getElementById("selectedTariffId").value = tariffId;
            modal.style.display = "block";
        });
    });

    closeModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});


