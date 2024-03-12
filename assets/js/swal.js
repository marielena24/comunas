const CenterNotySuccess = Swal.mixin({
  iconHtml: '✔',
  icon: 'success',
  confirmButtonText: 'Cerrar',
  timerProgressBar: true,
  timer: 3000
})

const CenterNotyError = Swal.mixin({
  iconHtml: '❌',
  icon: 'error',
  confirmButtonText: 'Cerrar',
  timerProgressBar: true,
  timer: 3000
})
