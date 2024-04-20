const API_URL = "https://bewabog782.bsite.net/api";
const API_KEY =
  "3d290a6111deacfbd4c3143011f8fc1af2d4af40c98f259de065094f560034bc";

const getEl = (id) => {
  return document.getElementById(id);
};

const fetchAPI = async (method = "", route = "", params = {}) => {
  const url = `${API_URL}/${route}`;
  const response = await fetch(url, {
    ...params,
    method: method,
    headers: {
      "x-api-key": API_KEY,
      "Content-Type": "application/json",
    },
  });
  const data = await response.json();
  //console.log(data);
  return data;
};

document
  .getElementById("new-product-form")
  .addEventListener("submit", async (e) => {
    e.preventDefault();
    // Obtener los valores
    const name = getEl("name_input");
    const stock = getEl("quantity-input");
    const price = getEl("price-input");

    let product = {
      name: name.value,
      stock: stock.value,
      price: price.value,
    };

    // Clear values
    name.value = stock.value = price.value = "";

    if (product) {
      // Registrar el producto en la API
      const res = await fetchAPI("POST", "products", {
        body: JSON.stringify(product),
      });

      console.log(JSON.stringify(res));
      // console.log(JSON.parse(res)); No hacer el parsing porque devuelve un objeto, debio ser string json pero bueno.
    }

    updateProductsComponent();
  });

function getRandomInt(min, max) {
  const minCeiled = Math.ceil(min);
  const maxFloored = Math.floor(max);
  return Math.floor(Math.random() * (maxFloored - minCeiled) + minCeiled); // The maximum is exclusive and the minimum is inclusive
}

getEl("clientid-input").addEventListener("focusout", async (e) => {
  const pattern = /[0-9]{8}/;

  const val = getEl("clientid-input").value;

  if (pattern.test(val)) {
    const client = await fetchAPI("GET", `clients/${val}`);

    if (!client.status) {
      getEl("client-name").value = client.name;
    }
  } else {
    getEl("clientid-input").value = "00000000"; //getRandomInt(10000000, 99999999);
    getEl("client-name").value = "general";
  }
});

const postClient = async ({ mat, name }) => {
  if (name == "general") {
    const res = await fetchAPI("GET", "clients/00000000");

    if (!res.status) {
      return res;
    }

    return await fetchAPI("POST", "clients", {
      body: JSON.stringify({
        mat: "00000000",
        name: "general",
      }),
    });
  }

  return await fetchAPI("POST", "clients", {
    body: JSON.stringify({
      mat: mat,
      name: name,
    }),
  });
};

const postBill = async (hash, clientid) => {
  const bill = {
    hash: hash,
    clientid: clientid,
    total: parseFloat(getEl("items-subtotal").innerText),
    comment: getEl("message").value,
  };

  console.log(bill);

  return await fetchAPI("POST", "invoices", {
    body: JSON.stringify(bill),
  });
};

getEl("printBtn").addEventListener("click", async (e) => {
  e.preventDefault();

  let items = getEl("items-list");
  let count = items.childElementCount;

  const clientData = {
    mat: getEl("clientid-input").value,
    name: getEl("client-name").value,
  };

  if (count > 0 && clientData.mat != "" && clientData.name != "") {
    items = items.children;

    const billHash = getEl("billHash").innerText;

    const postedClient = await postClient(clientData);
    console.log(postedClient);

    const postedBill = await postBill(billHash, postedClient.id);
    console.log(postedBill);

    let factura = `<h2>Facturación # ${billHash}</h2><table><tr><th>Producto</th><th>Cantidad</th><th>Subtotal</th></tr>`;
    let total = 0;
    for (var li of items) {
      const upperItem = li.children[1].children[0].children[0];
      const name = upperItem.children[0].innerText;
      const subtotal = parseFloat(upperItem.children[1].children[0].innerText);
      const quantity = parseInt(
        li.children[1].children[1].children[0].children[1].children[0].innerText
      );

      const product = await fetchAPI("GET", `products/search/${name}`);

      const itemInserted = await fetchAPI("POST", "items", {
        body: JSON.stringify({
          hash: billHash,
          subtotal: subtotal,
          productid: product.id,
          quantity: quantity,
        }),
      });

      // Update products stocks

      product.stock -= quantity;

      const updatedProduct = await fetchAPI("PUT", `products/${product.id}`, {
        body: JSON.stringify(product),
      });
      console.log(updatedProduct);

      console.log(itemInserted);

      // Añadir el producto a la factura
      factura += `<tr><td>${name}</td><td>${quantity}</td><td>${subtotal}</td></tr>`;
      total += subtotal;
    }
    factura += `</table><h2>Total: ${total}</h2>`;

    // Crear una nueva ventana y escribir la factura en ella
    var ventana = window.open("", "_blank");
    ventana.document.write("<html><head><title>Imprimir</title></head><body>");
    ventana.document.write(factura);
    ventana.document.write("</body></html>");
    ventana.document.close();

    // Abrir el cuadro de diálogo de impresión
    ventana.print();
    location.reload();
  } else {
    alert("Por favor llena los datos de facturación");
  }

  updateProductsComponent();
});

const addItem = (e) => {
  e.disabled = true;
  let p = e.parentNode.parentNode;

  /*console.log(p)
      console.log(p.children)
      console.log(p.childNodes)*/

  const name = p.children[0];
  const stock = p.children[1];
  const price = p.children[2];

  let product = {
    name: name.innerText,
    stock: stock.innerText,
    price: parseFloat(price.innerText.slice(1)),
  };

  //console.log(product)

  const itemsList = getEl("items-list");

  //console.log(itemsList)

  itemsList.innerHTML += `
    
<li class="flex py-6">
	<div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
		<img src="" alt="Product." class="h-full w-full object-cover object-center">
		</div>
		<div class="ml-4 flex flex-1 flex-col">
			<div>
				<div class="flex justify-between text-base font-medium text-gray-900">
					<h3>
						<a href="">${product.name}</a>
					</h3>
					<p class="ml-4">$
						<span>${product.price}</span>
					</p>
				</div>
				<p class="mt-1 text-sm text-gray-500">$${product.price}</p>
			</div>
			<div class="flex flex-1 items-end justify-between text-sm">
				<div class="flex items-center ">
					<button onclick="decrementQty(this)" class="inline-flex items-center justify-center w-7 h-7 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-full focus:shadow-outline hover:bg-indigo-800">
						<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
							<path d="M4 10a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" fill-rule="evenodd"></path>
						</svg>
					</button>
					<p class="text-gray-500 mr-2">Qty 
						<span id="item-total">1</span>
					</p>
					<button onclick="incrementQty(this);" class="inline-flex items-center justify-center w-7 h-7 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-full focus:shadow-outline hover:bg-indigo-800">
						<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
							<path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path>
						</svg>
					</button>
				</div>
				<div class="flex">
					<button type="button" onclick="removeItem(this);" class="font-medium text-indigo-600 hover:text-indigo-500">Remover</button>
				</div>
			</div>
		</div>
	</li>
    `;

  updateBillSubtotal();
};

const removeItem = (e) => {
  const child = e.parentNode.parentNode.parentNode.parentNode;
  const parent = child.parentNode;
  const name =
    child.children[1].children[0].children[0].children[0].children[0].innerText;

  getEl(`${name}AddBtn`).disabled = false;
  parent.removeChild(child);

  updateBillSubtotal();
};

const getProduct = async (name) => {
  let product = await fetchAPI("GET", `products/search/${name}`);
  return product;
};

const incrementQty = async (e) => {
  const { product, qty, item } = await getItemElements(e);
  let amount = parseInt(qty.innerText);
  amount + 1 > product.stock
    ? alert(`No puedes exceder el stock de ${product.name}`)
    : "";
  amount += amount < product.stock ? 1 : 0;
  qty.innerHTML = amount;

  updateItemTotal(item, product.price, amount);
};

const decrementQty = async (e) => {
  const { product, qty, item } = await getItemElements(e);
  let amount = parseInt(qty.innerText);
  amount - 1 < 1 ? alert(`Debe haber al menos un item de ${product.name}`) : "";
  amount -= amount > 1 ? 1 : 0;
  qty.innerHTML = amount;

  updateItemTotal(item, product.price, amount);
};

const updateItemTotal = async (item, price, amount) => {
  const itemTotalElement = item.parentNode.parentNode.children[1].children[0];
  itemTotalElement.innerHTML = parseFloat(price * amount);

  updateBillSubtotal();
};

const updateBillSubtotal = () => {
  const itemsList = getEl("items-list");
  let totals = [];

  for (var i of itemsList.children) {
    const n = parseFloat(
      i.children[1].children[0].children[0].children[1].children[0].innerText
    );
    totals.push(n);
  }

  const subtotal = totals.reduce((acc, cur) => acc + cur);

  const subtotalEl = getEl("items-subtotal");
  subtotalEl.innerHTML = subtotal;
};

var lastProductItem = {
  product: null,
  name: null,
};

const getItemElements = async (e) => {
  const item =
    e.parentNode.parentNode.parentNode.children[0].children[0].children[0]
      .children[0];
  const qty = e.parentNode.children[1].children[0];
  const name = item.innerText;
  let product = null;

  if (Object.values(lastProductItem).some((x) => x != null)) {
    if (name != lastProductItem.name) {
      product = await getProduct(name);
      lastProductItem.name = name;
      lastProductItem.product = product;
    } else {
      product = lastProductItem.product;
    }
  } else {
    product = await getProduct(name);
    lastProductItem.name = name;
    lastProductItem.product = product;
  }

  return {
    product: product,
    qty: qty,
    item: item,
  };
};

const updateProductsComponent = async () => {
  const parent = getEl("products-list");

  const products = await fetchAPI("GET", "products");
  //console.log(products);

  let productsList = "";

  for (let p of products) {
    productsList += `
        <tr class="bg-white border-b">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                ${p.name}
            </th>
            <td class="px-6 py-4">
                ${p.stock}
            </td>
            <td class="px-6 py-4">
                $${p.price}
            </td>
            <td class="px-6 py-4 text-right">
            <button id="${p.name}AddBtn" onclick="addItem(this);" class="inline-flex items-center justify-center w-7 h-7 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-full focus:shadow-outline hover:bg-indigo-800">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
            </td>
        </tr>`;
  }

  parent.innerHTML = productsList;
};

document.addEventListener("DOMContentLoaded", updateProductsComponent, false);

/*<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Need a help in Claim?</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    Read more
    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
    </svg>
    </a>
</div>*/
