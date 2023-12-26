<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css" /><link/>
    <script>
      function validasi(form){
        if (form.email.value == ""){
          alert("Anda Belum Mengisikan EMAIL?")
          form.email.focus(); return (false);}
        if(form.pass.value== ""){
          alert("Anda Belum Mengisikan Sandi Anda?")
          form.pass.focus(); return (false);}
        }

        
      
    </script>
  </head>
  <body>    
    <header data-bs-theme="dark">
    <nav>
        <div class="wrapper">
          <a href="TugasAkhir.html" title="kuliner.id">
            <img src="logookuliner.id hitam.png" alt="google logo" width="250" >
            <div class="menu">
            <ul>
            <li><a href="TugasAkhir.html">Home</a></li>
            <li><a href="signup.html" class="tbl-biru">Daftar</a></li>
            </ul>
            </div>
        </div>
    </nav>
</header>
    <div class="login-box">
      <h1>Masuk</h1>
      <form method=POST action="TugasAkhir.html" onSubmit="return validasi(this)">
        <label>Email</label>
        <input type="email" name="email" />
        <label>Sandi</label>
        <input type = "password"  minlength="7" maxlength="16" id = "pass" />
  
        <button type="submit" value="submit">MASUK</button></form>
      <closeform></closeform></form>
    </div>
    <p class="ini">
      Belum Mempunyai Akun? <a href="signup.html">Daftar !</a>
    </p>
  </body>
</html>

