function slideToggle(t, e, o) {
    0 === t.clientHeight ? j(t, e, o, !0) : j(t, e, o);
}
function slideUp(t, e, o) {
    j(t, e, o);
}
function slideDown(t, e, o) {
    j(t, e, o, !0);
}
function j(t, e, o, i) {
    void 0 === e && (e = 400),
        void 0 === i && (i = !1),
        (t.style.overflow = "hidden"),
        i && (t.style.display = "block");
    var p,
        l = window.getComputedStyle(t),
        n = parseFloat(l.getPropertyValue("height")),
        a = parseFloat(l.getPropertyValue("padding-top")),
        s = parseFloat(l.getPropertyValue("padding-bottom")),
        r = parseFloat(l.getPropertyValue("margin-top")),
        d = parseFloat(l.getPropertyValue("margin-bottom")),
        g = n / e,
        y = a / e,
        m = s / e,
        u = r / e,
        h = d / e;
    window.requestAnimationFrame(function l(x) {
        void 0 === p && (p = x);
        var f = x - p;
        i
            ? ((t.style.height = g * f + "px"),
              (t.style.paddingTop = y * f + "px"),
              (t.style.paddingBottom = m * f + "px"),
              (t.style.marginTop = u * f + "px"),
              (t.style.marginBottom = h * f + "px"))
            : ((t.style.height = n - g * f + "px"),
              (t.style.paddingTop = a - y * f + "px"),
              (t.style.paddingBottom = s - m * f + "px"),
              (t.style.marginTop = r - u * f + "px"),
              (t.style.marginBottom = d - h * f + "px")),
            f >= e
                ? ((t.style.height = ""),
                  (t.style.paddingTop = ""),
                  (t.style.paddingBottom = ""),
                  (t.style.marginTop = ""),
                  (t.style.marginBottom = ""),
                  (t.style.overflow = ""),
                  i || (t.style.display = "none"),
                  "function" == typeof o && o())
                : window.requestAnimationFrame(l);
    });
}

let sidebarItems = document.querySelectorAll(".sidebar-item.has-sub");
for (var i = 0; i < sidebarItems.length; i++) {
    let sidebarItem = sidebarItems[i];
    sidebarItems[i]
        .querySelector(".sidebar-link")
        .addEventListener("click", function (e) {
            e.preventDefault();

            let submenu = sidebarItem.querySelector(".submenu");
            if (submenu.style.display == "none")
                submenu.classList.add("active");
            else submenu.classList.remove("active");
            slideToggle(submenu, 300);
        });
}

window.addEventListener("DOMContentLoaded", (event) => {
    var w = window.innerWidth;
    if (w < 1200) {
        document.getElementById("sidebar").classList.remove("active");
    }
});
window.addEventListener("resize", (event) => {
    var w = window.innerWidth;
    if (w < 1200) {
        document.getElementById("sidebar").classList.remove("active");
    } else {
        document.getElementById("sidebar").classList.add("active");
    }
});

document.querySelector(".burger-btn").addEventListener("click", () => {
    document.getElementById("sidebar").classList.toggle("active");
});
document.querySelector(".sidebar-hide").addEventListener("click", () => {
    document.getElementById("sidebar").classList.toggle("active");
});

// Perfect Scrollbar Init
if (typeof PerfectScrollbar == "function") {
    const container = document.querySelector(".sidebar-wrapper");
    const ps = new PerfectScrollbar(container, {
        wheelPropagation: false,
    });
}

// Scroll into active sidebar
document.querySelector(".sidebar-item.active").scrollIntoView(false);

document.getElementById("addSizeStock").addEventListener("click", function () {
    const sizeStockInputs = document.getElementById("sizeStockInputs");
    const count = sizeStockInputs.children.length; // Count existing size inputs
    const newSizeStock = `
            <div class="d-flex mb-2">
                <input type="text" name="sizes[${count}][size]" class="form-control me-2" placeholder="Size (e.g., S, M, L)" required>
                <input type="number" name="sizes[${count}][stock]" class="form-control" placeholder="Stock" required>
            </div>
        `;
    sizeStockInputs.insertAdjacentHTML("beforeend", newSizeStock);
});

// document.querySelectorAll("[id^='addSizeStock']").forEach(function (button) {
//     button.addEventListener("click", function () {
//         const productId = this.id.replace("addSizeStock", ""); // Extract the product ID from the button ID
//         const sizeStockInputs = document.getElementById(
//             `sizeStockInputs${productId}`
//         ); // Target the specific product's input container

//         const count =
//             sizeStockInputs.querySelectorAll(".size-stock-input").length; // Count only relevant inputs

//         const newSizeStock = `
//             <div class="d-flex mb-2 size-stock-input">
//                 <select name="sizes[${count}][size]" class="form-control me-2" required>
//                     <option value="">Select Size</option>
//                     <option value="S">S</option>
//                     <option value="M">M</option>
//                     <option value="L">L</option>
//                     <option value="XL">XL</option>
//                 </select>
//                 <input type="number" name="sizes[${count}][stock]" class="form-control" placeholder="Stock" required>
//             </div>
//         `;

//         sizeStockInputs.insertAdjacentHTML("beforeend", newSizeStock); // Add the new input row to the container
//     });
// });
