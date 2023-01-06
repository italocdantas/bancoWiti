if (isset($_SESSION['msg']))
{
  // Exibe a div de alerta
  document.getElementById('alerta').style.display = 'block';
}
else
{
  // Oculta a div de alerta
  document.getElementById('alerta').style.display = 'none';
}