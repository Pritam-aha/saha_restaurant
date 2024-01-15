$(document).ready(function () {
    var cart = JSON.parse(localStorage.getItem("cart")) || [];

    $(".add-to-cart").click(function () {
        var foodId = $(this).closest(".food-menu-box").data("id");
        var foodName = $(this).closest(".food-menu-box").data("name");
        var foodPrice = $(this).closest(".food-menu-box").data("price");

        var existingItem = cart.find(item => item.id === foodId);

        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                id: foodId,
                name: foodName,
                price: parseFloat(foodPrice),
                quantity: 1
            });
        }

        updateCartDisplay();
    });

    $(document).on("click", ".quantity-increase", function () {
        var itemId = $(this).closest("li").data("id");
        var item = cart.find(item => item.id === itemId);

        if (item) {
            item.quantity += 1;
            updateCartDisplay();
        }
    });

    $(document).on("click", ".quantity-decrease", function () {
        var itemId = $(this).closest("li").data("id");
        var item = cart.find(item => item.id === itemId);

        if (item) {
            item.quantity -= 1;

            if (item.quantity <= 0) {
                cart = cart.filter(item => item.id !== itemId);
            }

            updateCartDisplay();
        }
    });

    function updateCartDisplay() {
        $("#cart-items").empty();
        var totalPrice = 0;

        cart.forEach(function (item) {
            var itemHtml = "<li data-id='" + item.id + "'>" +
                item.name + " x" + item.quantity + "  Rs-" + (item.price * item.quantity) +
                " <button class='btn btn-primary quantity-increase'>+</button>" +
                " <button class='btn btn-primary quantity-decrease'>-</button></li>";

            $("#cart-items").append(itemHtml);
            totalPrice += item.price * item.quantity;
        });

        $("#total-price").text(totalPrice);
        localStorage.setItem("cart", JSON.stringify(cart));
    }

    // Load cart data on page load
    updateCartDisplay();
});