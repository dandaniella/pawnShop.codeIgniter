const apiURL  ="http://localhost:3600/api/v1/";
const baseURL ="http://localhost/pawnshop/"


// var Toast = Swal.mixin({ 
//   toast: true,
//   position: 'top-end',
//   showConfirmButton: false,
//   timer: 3000
// });
// console.log(message);
// Toast.fire({
//   icon: type,
//   title: message,
// });

const _toastr = (type,title, message) =>{
  console.log(type);
  switch(type) {
    case "success":
      toastr.success(message); break;
    case "error":
      toastr.error(message)
      break;
    case "warning":
      toastr.warning(message); break;
    case "info":
      toastr.info(message); break;
}};



