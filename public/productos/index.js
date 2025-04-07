const contentTableProductsLists = $('.table_products');
let datatableInstance = null;

const getProducts = () => {
    $.ajax({
        url: routeGetProducts,
        method: 'GET',
        success: function(response) {
            // Aquí la respuesta ya es el array
            llenadoDeDatosEnLaPichiTabla(response);
        },
        error: function(error) {
            console.error('Error al obtener productos:', error);
        }
    });
}

const llenadoDeDatosEnLaPichiTabla = (productos) => {
    // Si ya hay un DataTable, lo destruimos antes
    if ($.fn.DataTable.isDataTable(contentTableProductsLists)) {
        contentTableProductsLists.DataTable().destroy();
    }

    // Construimos las filas con los datos
    let rowsHtml = '';
    productos.forEach(producto => {
        rowsHtml += `
            <tr>
                <td>${producto.t100_rowid}</td>
                <td>${producto.t100_name_product}</td>
                <td>${producto.t100_desc_product}</td>
                <td>${producto.t100_stock_product}</td>
                <td>${producto.t100_price_product}</td>
                <td class="text-right">
                <a href="/Productos/edit/${producto.t100_rowid}" class="text-success">
                    <i title="Editar producto" class="material-icons">edit</i>
                </a>
                    <a href="#" onclick="eliminarProducto('${producto.t100_rowid}')" class="text-danger">
                        <i title="Eliminar Producto" class="material-icons">delete</i>
                    </a>
                </td>
            </tr>
        `;
    });
    

    // Metemos el HTML de filas en el tbody de la tabla
    contentTableProductsLists.find('tbody').html(rowsHtml);

    // Re-inicializamos el DataTable
    datatableInstance = contentTableProductsLists.DataTable({
        responsive: true,
        language: {
            //url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
    });
}

function ejecutarAccionDeCrud(producto, url, textoConfirmacion, textoExito) {
    swal({
        title: 'ATENCIÓN',
        text: textoConfirmacion,
        type: 'warning',
        showCancelButton: true,
        showConfirmButton: true,
        confirmButtonColor: '#4caf50',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
    }).then(function() {
        $.ajax({
            url: url, // Ruta a tu controlador
            method: 'POST',
            data: {
                _token: _token_,
                producto: producto
            },
            success: function(response) {
                let timer;
                swal({
                    title: 'ATENCIÓN',
                    text: textoExito,
                    type: 'success',
                    showConfirmButton: true,
                    confirmButtonColor: '#4caf50',
                    confirmButtonText: 'Aceptar',
                    timer: 3000 // 3 segundos
                }).then(function() {
                    clearTimeout(timer);
                    getProducts(); // 👈 Esta es la clave para actualizar sin recargar
                });
            
                timer = setTimeout(function() {
                    getProducts(); // 👈 Si el usuario no hace clic, igual actualiza luego
                }, 3000);
            }
            ,
            error: function(error) {
                // Manejar errores
                console.log(error);
            }
        });
    });
}

// FUNCIONES EXPECIFICAS
// #1 BORRAR PRODUCTO
function eliminarProducto(producto) {

    //console.log('Hola pepito');
    ejecutarAccionDeCrud(
        producto,
        routeDeleteProduct,
        "¿Estas seguro/a de eliminar el producto?.<br>",
        "<b style='color: green'>¡Producto eliminado exitosamente!</b>"
    );
}



// Ejecutamos cuando cargue la página
window.onload = () => {
    getProducts();
}