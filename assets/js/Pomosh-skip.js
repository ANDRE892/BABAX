document.addEventListener("DOMContentLoaded", function() {
    const paymentLink = document.getElementById("payment-link");
    const deliveryLink = document.getElementById("delivery-link");
    const returnPolicyLink = document.getElementById("return-policy-link");

    const oplataSection = document.querySelector(".oplata");
    const ysloviaSection = document.querySelector(".yslovia");
    const pravilaSection = document.querySelector(".Pravila");

    const sectionTitle = document.getElementById("section-title");

    paymentLink.addEventListener("click", function() {
        oplataSection.classList.remove("hidden");
        ysloviaSection.classList.add("hidden");
        pravilaSection.classList.add("hidden");
        sectionTitle.textContent = "Оплата";
    });

    deliveryLink.addEventListener("click", function() {
        oplataSection.classList.add("hidden");
        ysloviaSection.classList.remove("hidden");
        pravilaSection.classList.add("hidden");
        sectionTitle.textContent = "Условия доставки";
    });

    returnPolicyLink.addEventListener("click", function() {
        oplataSection.classList.add("hidden");
        ysloviaSection.classList.add("hidden");
        pravilaSection.classList.remove("hidden");
        sectionTitle.textContent = "Правила возврата";
    });
});