function changeQuantity(btn, value) {
  var inputEl = btn.parentNode.parentNode.querySelector("input.quantity");
  var currentValue = parseInt(inputEl.value);
  var newValue = currentValue + value;
  if (newValue >= 1) {
    inputEl.value = newValue;
    var formData = new FormData();
    formData.append("id", inputEl.getAttribute("product-id"));
    formData.append("quantity", value);
    fetch("http://localhost/SerenitySpa/cart/changeAmoutProductToCart", {
      method: "POST",
      body: formData,
    });
  }
  calculateTotalPrice();
}
window.onload = () => {
  calculateTotalPrice();
};
const addtocart = document.querySelector(".add-to-cart input");
addtocart.addEventListener("click", (e) => {
  let id = e.currentTarget.getAttribute("product-id");
  var formData = new FormData();
  formData.append("id", id);
  formData.append("quantity", document.querySelector(".quantity").value);

  fetch("http://localhost/SerenitySpa/cart/addProductToCart", {
    method: "POST",
    body: formData,
  });

  window.location = "http://localhost/SerenitySpa/cart";
});

function deleteProduct() {
  const deleteBtns = document.querySelectorAll(".delete a");
  for (let i = 0; i < deleteBtns.length; i++) {
    deleteBtns[i].addEventListener("click", function (event) {
      event.preventDefault();
      const product = this.closest(".product_details");
      product.parentNode.removeChild(product);
      calculateTotalPrice();
    });
  }
}
deleteProduct();

function calculateTotalPrice() {
  // Lấy tất cả các phần tử có class 'product_price'
  const productPrices = document.querySelectorAll(".product_price");

  // Khởi tạo biến tổng tiền
  let totalPrice = 0;

  // Duyệt qua từng phần tử 'product_price'
  for (let i = 0; i < productPrices.length; i++) {
    // Lấy giá tiền từ thuộc tính innerText của phần tử
    const priceText = productPrices[i].innerText;
    // Chuyển đổi giá tiền từ dạng chuỗi sang số
    const price = parseFloat(
      priceText.replace("đ", "").replace(".", "").replace(",", ".")
    );
    // Lấy số lượng từ phần tử input có class 'quant'
    const quantity = parseInt(
      productPrices[i].parentNode.querySelector(".quantity").value
    );
    // Tính tổng tiền cho sản phẩm hiện tại
    const subTotal = price * quantity;
    // Cộng tổng tiền cho sản phẩm hiện tại vào biến tổng tiền
    totalPrice += subTotal;
  }

  // Hiển thị tổng tiền lên thẻ span có id="th"
  document.getElementById("total_price").innerText =
    totalPrice.toLocaleString() + " đ";
}

// Gọi hàm tính tổng tiền khi trang web được tải hoàn tất
window.addEventListener("load", calculateTotalPrice);

function checkEmptyCart() {
  const cartItems = document.querySelectorAll(".product_details"); // Lấy danh sách các sản phẩm trong giỏ hàng
  if (cartItems.length === 0) {
    // Nếu danh sách rỗng
    document.querySelector(".order_checkout").innerHTML =
      "<p>Giỏ hàng rỗng!</p>"; // Thay đổi nội dung của phần tử có class "order_checkout"
  }
}
