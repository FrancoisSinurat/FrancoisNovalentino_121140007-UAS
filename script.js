const form = document.getElementById("myForm");
      const table = document.getElementById("dataDisplay");

      form.addEventListener("submit", function (event) {
        event.preventDefault();
        // Your validation logic here before sending data to the server
        const nama = document.getElementById("nama").value;
        const email = document.getElementById("email").value;
        const umur = document.getElementById("umur").value;
        const nim = document.getElementById("nim").value;
        const presensi = document.getElementById("presensi").checked
          ? "Yes"
          : "No";
        const gender = document.querySelector('input[name="gender"]:checked')
          ? document.querySelector('input[name="gender"]:checked').value
          : "";

        // Example: Validation - check if name and email are not empty
        if (nama.trim() === "" || email.trim() === "") {
          alert("nama and email are required!");
          return;
        }
 
        // Proceed to send data to the server or perform further actions
        // For now, let's simulate data display in the table
        table.innerHTML = `
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Umur</th>
          <th>NIM</th>
          <th>presensi</th>
          <th>Gender</th>
        </tr>
        <tr>
          <td>${nama}</td>
          <td>${email}</td>
          <td>${umur}</td>
          <td>${nim}</td>
          <td>${presensi}</td>
          <td>${gender}</td>
        </tr>
      `;
      });

      // Example: Adding event listeners for additional interactions
      document
        .getElementById("nama")
        .addEventListener("input", function (event) {
          // Validation or additional actions based on name input
        });

      document
        .getElementById("email")
        .addEventListener("blur", function (event) {
          // Validation or additional actions when email input loses focus
        });

      document
        .getElementById("umur")
        .addEventListener("change", function (event) {
          // Validation or additional actions when umur input changes
        });