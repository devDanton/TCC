<!--<?php include "cabecalho.php" ?>-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />

  <title>MakeGood</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="tela_inicial.php">Make Good</a>
      <ul class="nav-list">
        <li>
          <a href="cadastro_donatario.php">Voltar</a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <form>
      <h1>Criar campanha</h1>
      <h2>Selecione os itens requisitados</h2>
      <div class="label">
        <span>Camisa</span>
        <label class="label_select">
          <select class="browser-default">
            <option value="" disabled selected>Nenhum</option>
            <option value="1">P</option>
            <option value="2">M</option>
            <option value="3">G</option>
            <option value="4">GG</option>
            <option value="5">EG</option>
            <option value="6">GGG</option>
          </select>
        </label>
      </div>

      <div class="label">
        <span>Calça</span>
        <label class="label_select">
          <select class="browser-default">
            <option value="" disabled selected>Nenhum</option>
            <option value="1">36</option>
            <option value="2">38</option>
            <option value="3">40</option>
            <option value="4">42</option>
            <option value="5">44</option>
            <option value="6">46</option>
            <option value="7">48</option>
            <option value="8">50</option>
            <option value="9">52</option>
            <option value="10">54</option>
            <option value="11">56</option>
            <option value="12">58</option>
          </select>
        </label>
      </div>

      <div class="label">
        <span>Sapato</span>
        <label class="label_select">
          <select class="browser-default">
            <option value="" disabled selected>Nenhum</option>
            <option value="1">33</option>
            <option value="2">34</option>
            <option value="3">35</option>
            <option value="4">36</option>
            <option value="5">37</option>
            <option value="6">38</option>
            <option value="7">39</option>
            <option value="8">39/40</option>
            <option value="9">40</option>
            <option value="10">41</option>
            <option value="11">42</option>
            <option value="12">43</option>
            <option value="13">44</option>
          </select>
        </label>
      </div>

      <div class="label">
        <span>Meia</span>
        <label class="label_select">
          <select class="browser-default">
            <option value="" disabled selected>Nenhum</option>
            <option value="1">PP</option>
            <option value="2">P</option>
            <option value="3">M</option>
            <option value="4">G</option>
          </select>
        </label>
      </div>

      <div class="label">
        <span>Cueca</span>
        <label class="label_select">
          <select class="browser-default">
            <option value="" disabled selected>Nenhum</option>
            <option value="1">P</option>
            <option value="2">M</option>
            <option value="3">G</option>
            <option value="4">GG</option>
          </select>
        </label>
      </div>
      <a class="btn-enviar" href="criar_campanha2.php">
        <span id="enviar">Avançar</span>
      </a>
    </form>
  </main>
</body>

</html>