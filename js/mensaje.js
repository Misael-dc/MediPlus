
var toaster = $("#toaster");
function callToaster(mensaje, titulo, tipo) {


    toastr.options = {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-top-right",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
    };
//   toastr.success("Bienvenido a MediPlus+++ Dashboard", "Hola!");
    if (tipo == 'success') {
        toastr.success(mensaje, titulo);
    }else if (tipo == 'info') {
        toastr.info(mensaje, titulo);
    }else if(tipo == 'warning'){
        toastr.warning(mensaje, titulo);
    } else {
        toastr.error(mensaje, titulo);
    }
}


var infoTeoaset = $(
    "#toaster-info, #toaster-success, #toaster-warning, #toaster-danger"
);
if (infoTeoaset !== null) {
    infoTeoaset.on("click", function () {
    toastr.options = {
        closeButton: true,
        debug: false,
        newestOnTop: false,
        progressBar: false,
        positionClass: "toast-top-right",
        preventDuplicates: false,
        onclick: null,
        showDuration: "3000",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
    };
    var thisId = $(this).attr("id");
    if (thisId === "toaster-info") {
        toastr.info("Welcome to Mono", " Info message");
    } else if (thisId === "toaster-success") {
        toastr.success("Welcome to Mono", "Success message");
    } else if (thisId === "toaster-warning") {
        toastr.warning("Welcome to Mono", "Warning message");
    } else if (thisId === "toaster-danger") {
        toastr.error("Welcome to Mono", "Danger message");
    }
    });
}
export{ callToaster }