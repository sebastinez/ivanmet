<div class="menu">
  <div>
    <a class="menu-item" href="?page=about">
      <?php if ($lang === "en") { echo "About Us";} else { echo "Quienes somos";} ?>
    </a>
  </div>
  <div>
    <a class="menu-item" onclick="mostrarServicios(500)">
    <?php if ($lang === "en") { echo "Services";} else { echo "Servicios";} ?>
    </a>
  </div>
  <div>
    <a class="menu-item" href="?page=clientes">
    <?php if ($lang === "en") { echo "Customers";} else { echo "Clientes";} ?>
    </a>
  </div>
  <div>
    <a class="menu-item" onclick="mostrarProyectos(500)">
    <?php if ($lang === "en") { echo "Fulfilled Projects";} else { echo "Proyectos Realizados";} ?>
    </a>
  </div>
  <div>
    <a class="menu-item" href="?page=contacto">
    <?php if ($lang === "en") { echo "Contact";} else { echo "Contacto";} ?>
    </a>
  </div>
   <div>
     <?php if ($lang === "en") { echo "<a class='menu-item' href='?page=about&lang=es'><img src='img/flags/ar.svg' height='20px' style='vertical-align:bottom;'></a>"; } else { echo "<a class='menu-item' href='?page=about&lang=en'><img src='img/flags/us.svg' height='20px' style='vertical-align:bottom;'></a>";} ?>
  </div>
</div>
