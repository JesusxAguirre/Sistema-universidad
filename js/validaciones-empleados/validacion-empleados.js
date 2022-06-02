const formulario = document.getElementById('formulario');

const inputs = document.querySelectorAll('#formulario');

const expresiones = {
  cedula: /^[V|E|J|P][0-9]{5,9}$/,
  nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Acepta acentos y espacios hasta cuarenta caracteres
  apellidos: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Acepta acentos y espacios hasta cuarenta caracteres
  telefono: /^\d{10}$/, // numero de telefono sin espacios y sin guiones incluyendo el 0.
  direccion: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Acepta acentos y espacios hasta cuarenta caracteres
  fecha: /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/,
  cargo: /^[a-zA-ZÀ-ÿ\s]{5,10}$/, // Acepta acentos y espacios desde 5 hasta 10 caracteres
};
