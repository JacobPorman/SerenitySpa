var navItems = document.querySelectorAll(".nav-item");

for (var i = 0; i < navItems.length; i++) {
  navItems[i].addEventListener("click", function (ev) {
    ev.preventDefault();
    var activeItem = document.querySelector(".nav-item.active");
    activeItem.classList.remove("active");
    this.classList.add("active");
  });
}

const productsTab = document.querySelector('[data-target="products"]');
const customersTab = document.querySelector('[data-target="customers"]');
const ordersTab = document.querySelector('[data-target="orders"]');

const productsDiv = document.getElementById("products");
const customersDiv = document.getElementById("customers");
const ordersDiv = document.getElementById("orders");

// show products div by default
productsDiv.style.display = "block";

// add click event listener to each tab
productsTab.addEventListener("click", () => {
  productsDiv.style.display = "block";
  customersDiv.style.display = "none";
  ordersDiv.style.display = "none";
});

customersTab.addEventListener("click", () => {
  productsDiv.style.display = "none";
  customersDiv.style.display = "block";
  ordersDiv.style.display = "none";
});

ordersTab.addEventListener("click", () => {
  productsDiv.style.display = "none";
  customersDiv.style.display = "none";
  ordersDiv.style.display = "block";
});

// Lấy danh sách các button remove
// var removeButtons = document.querySelectorAll("#remove");

// // Duyệt qua từng button remove
// removeButtons.forEach(function (button) {
//   // Lắng nghe sự kiện click của button remove
//   button.addEventListener("click", function (event) {
//     // Ngăn chặn hành vi mặc định của button (chuyển trang)
//     // event.preventDefault();

//     // Lấy phần tử cha (tr) của button remove
//     var productRow = button.closest("tr");

//     // Xóa phần tử cha (tr) ra khỏi bảng (table)
//     productRow.remove();
//   });
// });

// Lấy thẻ button update và modal
const updateBtn = document.querySelectorAll("#update-product");
const modal = document.querySelector(".modal");
const formModal = modal.querySelector("#formId");

updateBtn.forEach(function (btn) {
  btn.addEventListener("click", () => {
    formModal.setAttribute(
      "action",
      `http://localhost/SerenitySpa/admin/updateProduct/${btn.getAttribute(
        "product-id"
      )}`
    );
    modal.style.display = "block";
  });
});

// Lấy các giá trị của input và cập nhật thông tin sản phẩm
// const form = modal.querySelector("form");
// form.addEventListener("submit", (event) => {
//   // event.preventDefault();

//   // Lấy giá trị của các input
//   const id = document.getElementById("product-id").value;

//   const name = document.getElementById("product-name").value;
//   const price = document.getElementById("product-price").value;

//   // Cập nhật thông tin sản phẩm trên trang web
//   const productId = document.getElementById("id-product");

//   const productName = document.getElementById("name-product");
//   const productPrice = document.getElementById("price-product");

//   productId.textContent = id;
//   productName.textContent = name;
//   productPrice.textContent = price;

//   var updateButton = document.querySelector("#update-btn");
//   var form = document.getElementById("formId");
//   updateButton.addEventListener("click", function () {
//     var action = form.getAttribute("action");

//     alert(action);
//   });

//   // Ẩn modal
//   modal.style.display = "none";
// });

window.onclick = (event) => {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// Lấy phần tử input type="file"
const fileInput = document.getElementById("product-images");

// Lắng nghe sự kiện onchange khi người dùng chọn hình ảnh
fileInput.addEventListener("change", () => {
  // Lấy danh sách các file được chọn
  const files = fileInput.files;
  // Duyệt qua từng file để hiển thị lên giao diện
  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    // Tạo phần tử img để hiển thị hình ảnh
    const img = document.createElement("img");
    img.src = URL.createObjectURL(file);
    img.onload = () => {
      // Giải phóng tài nguyên khi hình ảnh đã được load hoàn tất
      URL.revokeObjectURL(img.src);
    };
    // Thêm phần tử img vào trong modal
    document.querySelector(".modal-content").appendChild(img);
  }
});

const logoutLink = document.getElementById("logout");
if (logoutLink) {
  logoutLink.addEventListener("click", () => {
    // Xóa thông tin đăng nhập khỏi localStorage (nếu có)
    localStorage.removeItem("isLoggedIn");
    // Chuyển hướng đến trang đăng nhập
    window.location.href = '<?php echo getURL() . "/login/loginView" ?>';
  });
}
