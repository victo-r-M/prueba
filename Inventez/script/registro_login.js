// Detecta si hay dueño y cambia texto y rol automáticamente
fetch("php/hay_duenio.php")
  .then(res => res.json())
  .then(data => {
    const esDueño = !data.hayDuenio;
    document.getElementById("tipoUsuarioTexto").textContent = esDueño
      ? "Estás creando la cuenta principal (Dueño)"
      : "Estás creando un usuario Empleado";

    const registroForm = document.getElementById("registroForm");

    registroForm.addEventListener("submit", e => {
      e.preventDefault();
      const formData = new FormData(registroForm);
      formData.append("rol", esDueño ? "1" : "2");

      fetch("php/registrar_usuario.php", {
        method: "POST",
        body: formData,
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          alert("Usuario registrado correctamente.");
          window.location.href = "index.html";
        } else {
          document.getElementById("errorMsg").textContent = data.message;
        }
      })
      .catch(() => {
        document.getElementById("errorMsg").textContent = "Error en el registro.";
      });
    });
  })
  .catch(() => {
    document.getElementById("tipoUsuarioTexto").textContent = "Error al verificar usuario Dueño.";
  });
