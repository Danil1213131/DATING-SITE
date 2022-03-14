document.getElementById("registration").onclick = function registration() {
    let Content = document.getElementById("Content"); 
    Content.innerHTML = `
    <form action="php/registration.php" method="post" id="registr">
      <input type="text" name="name" id="name" placeholder="ФИО" required>
      <input type="text" name="login" id="login" placeholder="Логин" required>
      <input type="email" name="email" id="email" placeholder="email" required>
      <input type="password" name="password" id="password" placeholder="Пароль" required>
      <input type="submit" value="Зарегистрироватся">
    </form>
    `;
}


