const formulario = document.getElementById('formulario');

const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
  cedula: /^[V|E|J|P][0-9]{5,9}$/,
  nombre: /^[a-zA-ZÀ-ÿ\s]{5,40}$/, // Acepta acentos y espacios hasta cuarenta caracteres
  apellidos: /^[a-zA-ZÀ-ÿ\s]{5,40}$/, // Acepta acentos y espacios hasta cuarenta caracteres
  telefono: /^\d{11}$/, // numero de telefono sin espacios y sin guiones incluyendo el 0.
  direccion: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Acepta acentos y espacios hasta cuarenta caracteres
  cargo: /^[a-zA-ZÀ-ÿ\s]{5,10}$/, // Acepta acentos y espacios desde 5 hasta 10 caracteres
};

const ValidarFormulario = (e) => {
  switch (e.target.id) {
    case 'cedula':
      if (expresiones.cedula.test(e.target.value)) {
        document.querySelector('#grupo__cedula i').classList.remove('fa-circle-xmark', 'text-red-500');
        document.querySelector('#grupo__cedula i').classList.add('fa-circle-check', 'text-green-500');
      } else {
        document.querySelector('#grupo__cedula i').classList.remove('fa-circle-check', 'text-green-500');
        document.querySelector('#grupo__cedula i').classList.add('fa-circle-xmark', 'text-red-500');
      }
      break;
    case 'nombre':
      if (expresiones.nombre.test(e.target.value)) {
        document.querySelector('#grupo__nombre i').classList.remove('fa-circle-xmark', 'text-red-500');
        document.querySelector('#grupo__nombre i').classList.add('fa-circle-check', 'text-green-500');
      } else {
        document.querySelector('#grupo__nombre i').classList.remove('fa-circle-check', 'text-green-500');
        document.querySelector('#grupo__nombre i').classList.add('fa-circle-xmark', 'text-red-500');
      }
      break;
    case 'apellido':
      if (expresiones.apellidos.test(e.target.value)) {
        document.querySelector('#grupo__apellido i').classList.remove('fa-circle-xmark', 'text-red-500');
        document.querySelector('#grupo__apellido i').classList.add('fa-circle-check', 'text-green-500');
      } else {
        document.querySelector('#grupo__apellido i').classList.remove('fa-circle-check', 'text-green-500');
        document.querySelector('#grupo__apellido i').classList.add('fa-circle-xmark', 'text-red-500');
      }
      break;
    case 'telefono':
      if (expresiones.telefono.test(e.target.value)) {
        document.querySelector('#grupo__telefono i').classList.remove('fa-circle-xmark', 'text-red-500');
        document.querySelector('#grupo__telefono i').classList.add('fa-circle-check', 'text-green-500');
      } else {
        document.querySelector('#grupo__telefono i').classList.remove('fa-circle-check', 'text-green-500');
        document.querySelector('#grupo__telefono i').classList.add('fa-circle-xmark', 'text-red-500');
      }
      break;
    case 'direccion':
      if (expresiones.direccion.test(e.target.value)) {
        document.querySelector('#grupo__direccion i').classList.remove('fa-circle-xmark', 'text-red-500');
        document.querySelector('#grupo__direccion i').classList.add('fa-circle-check', 'text-green-500');
      } else {
        document.querySelector('#grupo__direccion i').classList.remove('fa-circle-check', 'text-green-500');
        document.querySelector('#grupo__direccion i').classList.add('fa-circle-xmark', 'text-red-500');
      }
      break;
    case 'cargo':
      if (expresiones.cargo.test(e.target.value)) {
        document.querySelector('#grupo__cargo i').classList.remove('fa-circle-xmark', 'text-red-500');
        document.querySelector('#grupo__cargo i').classList.add('fa-circle-check', 'text-green-500');
      } else {
        document.querySelector('#grupo__cargo i').classList.remove('fa-circle-check', 'text-green-500');
        document.querySelector('#grupo__cargo i').classList.add('fa-circle-xmark', 'text-red-500');
      }
      break;

    default: break;
  }
};

inputs.forEach((input) => {
  input.addEventListener('keyup', ValidarFormulario);
  input.addEventListener('blur', ValidarFormulario);
});

formulario.addEventListener('submit', (e) => {
  e.preventDefault();
});
