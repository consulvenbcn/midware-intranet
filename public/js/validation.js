$("#usuarioSysForm").validate({
  errorClass: "alert alert-danger",
  validClass: "alert alert-success",
  errorElement:"p",
  debug: false,
  rules: {
    nombre1: {
      required: true,
      letterswithbasicpunc:true,
      minlength: 2,
      maxlength:45
    },
    nombre2: {
      letterswithbasicpunc:true,
      minlength: 2,
      maxlength:45
    },
    apellido1: {
      required: true,
      letterswithbasicpunc:true,
      minlength: 2,
      maxlength:45
    },
    apellido2: {
      letterswithbasicpunc:true,
      minlength: 2,
      maxlength:45
    },
    cargo:{
      required:true,
      letterswithbasicpunc: true,
      minlength: 10,
      maxlength:45
    },
    nombre_firma:{
      required:true,
      letterswithbasicpunc: true,
      minlength: 10,
      maxlength:100
    },
    nombre_usuario:{
      required:true,
      letterwithdot: true,
      maxlength:16
    },
    contraseña:{
      required:true,
      maxlength:16
    },
    email:{
      required:true,
      email: true
    },
    adminPermisos:{
      required:true
    },
    regPersonasPermisos:{
      required:true
    },
    licenciasPermisos:{
      required:true
    }
  }
});
$("#searchUsuarioSysForm").validate({
  errorClass: "alert alert-danger",
  validClass: "alert alert-success",
  errorElement:"p",
  debug: false,
  rules: {
    nombre1: {
      required: true,
      letterswithbasicpunc:true,
      minlength: 2,
      maxlength:45
    },
    apellido1: {
      required: true,
      letterswithbasicpunc:true,
      minlength: 2,
      maxlength:45
    },
    nombre_usuario:{
      required:true,
      letterwithdot: true,
      maxlength:16
    }
  }
});
$("#passwordUsuarioSysForm").validate({
  errorClass: "alert alert-danger",
  validClass: "alert alert-success",
  errorElement:"p",
  debug: false,
  rules: {
    contraseña: {
      required: true,
      maxlength:16
    },
    reContraseña: {
      required: true,
      equalTo: "#contraseña",
      maxlength:16
    }
  }
});
