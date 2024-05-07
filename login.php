<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
  
</body>
</html>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form >
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Welcome</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Nom" />
            <!-- <label class="form-label" for="form3Example3">Nom</label> -->
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Veuillez saisir le mot de passe" />
            <!-- <label class="form-label" for="form3Example4">Mot de passe </label> -->
          </div>



          <div class="text-center text-lg-start mt-4 pt-2">
          <div id="error-message" class="text-danger"></div>

          <button type="button" class="btn btn-primary btn-lg"
  style="padding-left: 2.5rem; padding-right: 2.5rem;" onclick="validateLogin()">connexion</button>

          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright Stage  2024. Youness & Otmane
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</section>
<script>
function validateLogin() {
  // Récupérer les valeurs de nom et de mot de passe
  var nom = document.getElementById('form3Example3').value;
  var motDePasse = document.getElementById('form3Example4').value;

  // Vérifier si le nom et le mot de passe sont corrects
  if (nom === 'salma' && motDePasse === 'salma_123') {
    // Rediriger vers la page indexx.php si les informations sont correctes
    window.location.href = 'indexx.php';
  } else {
    // Afficher un message d'erreur en rouge dans l'élément error-message
    document.getElementById('error-message').textContent = 'Nom d\'utilisateur ou mot de passe incorrect.';
  }
}
</script>
