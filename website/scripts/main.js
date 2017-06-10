/**
 * Load cap image and preview in page.
 * @param input
 */
function loadCapImage(input) {
    if (typeof (FileReader) != "undefined") {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#capImage").attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
    else {
        alert("Sorry, your brower cannot support image preview.");
    }
}

/**
 * Redirect to cap management page
 */
function backToCapManagement() {
    window.location.href = "Admin.php?page=CapManagement";
}

/**
 * Add a cap to the shopping cart and update items quantity displayed in the page
 * @param capID
 */
function addToCart(capID) {
    $.ajax({
        url: "/yuans06/php_assignment/website/scripts/addCart.php",
        type: "POST",
        data: {'capID': capID},
        success: function (result) {
            var currentQty = parseInt($("#cartQty").text());
            $("#cartQty").text(currentQty + 1);
            $("#cartQtySide").text(currentQty + 1);
            //alert(result);
        }
    });
}

/**
 * Update the quantity of a given cap in the shopping cart
 * @param capID
 * @param qty
 */
function updateCartQty(capID, qty) {
    $.ajax({
        url: "/yuans06/php_assignment/website/scripts/updateCart.php",
        type: "POST",
        data: {
            'capID': capID,
            'adjust': qty,
            'action': 'changeQuantity'
        },
        success: function (result) {
            if (result != 'fail')
            {
                location.reload();
            }
            else
            {
                alert(result);
            }
        }
    });
}

/**
 * Remove an item in the shopping cart
 * @param capID
 */
function removeCartItem(capID) {
    $.ajax({
        url: "/yuans06/php_assignment/website/scripts/updateCart.php",
        type: "POST",
        data: {
            'capID': capID,
            'action': 'removeItem'
        },
        success: function () {
            location.reload();
        }
    });
}

/**
 * Clear shopping cart
 */
function clearCart() {
    $.ajax({
        url: "/yuans06/php_assignment/website/scripts/updateCart.php",
        type: "POST",
        data: {
            'action': 'clearCart'
        },
        success: function () {
            location.reload();
        }
    });
}

/**
 * Check whether the shopping cart is empty when check out
 */
function checkOut() {
    if (parseInt($("#grandTotal").text()) == 0)
    {
        alert("Your shopping cart is empty. Please select something first.");
        return;
    }
    location.href = "../shopping/cart.php?action=CheckOut";
}

/**
 * Disable or enable a user account
 * @param userID
 * @param username
 * @param enabled
 */
function disableAccount(userID, username, enabled) {
    $.ajax({
        url: "/yuans06/php_assignment/website/scripts/disableAccount.php",
        type: "POST",
        data: {'userID': userID,
                'enabled': enabled},
        success: function (success) {
            if (success)
            {
                if (enabled)
                {
                    alert(username + ' has been disabled.');
                }
                else
                {
                    alert(username + ' has been enabled');
                }
            }
            else
            {
                if (enabled)
                {
                    alert('Disable ' + username + ' failed.');
                }
                else
                {
                    alert('Enable ' + username + ' failed.');
                }

            }
            location.reload();
        }
    });
}

/**
 * Redirect to add cap page
 */
function navToAddCap() {
    location.href = 'Admin.php?page=AddCap';
}

/**
 * Change status of a given order
 * @param orderID
 */
function changeOrderStatus(orderID) {
    var buttenID = "#btn" + orderID;
    $(buttenID).disabled = false;
}

/**
 * Update status of a given order
 * @param orderID
 */
function updateOrderStatus(orderID) {
    var selectElementID = "select" + orderID;
    var ddlStatus = document.getElementById(selectElementID);
    var newStatus = ddlStatus.options[ddlStatus.selectedIndex].value;

    $.ajax({
        url: "/yuans06/php_assignment/website/scripts/updateOrderStatus.php",
        type: "POST",
        data: {
            'orderID': orderID,
            'newStatus': newStatus
        },
        success: function (result) {
            if (result == 'success')
            {
                alert('Order status has been updated successfully.');
                var buttenID = "#btn" + orderID;
                $(buttenID).disabled = true;
            }
            else
            {
                alert('Order status update failed. Please try again');
                location.reload();
            }
        }
    })
}