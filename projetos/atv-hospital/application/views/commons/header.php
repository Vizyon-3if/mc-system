  <!-- Barra de topo do site -->
    <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="<?=base_url()?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <img src="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg" width="32" height="32">
          <span>&nbsp</span>
          <span class="fs-4">Hospital Santa Cruz</span>
        </a>

        <!-- Barra de navegação do site -->
        <ul class="nav nav-pills">
          <li class="nav-item <?=($this->router->fetch_class() == 'institucional' && $this->router->fetch_method() == 'index') ? 'active':null;?>"><a href="<?=base_url()?>" class="nav-link" aria-current="page">Home</a></li>
          <li class="nav-item <?=($this->router->fetch_class() == 'institucional' && $this->router->fetch_method() == 'sobre_nos') ? 'active':null;?>"><a href="<?=base_url('sobre_nos')?>" class="nav-link">Sobre</a></li>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Serviços
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?=base_url('corpo_clinico')?>">Corpo Clínico</a>
            <a class="dropdown-item" href="<?=base_url('convenios')?>">Convênios</a>
            <a class="dropdown-item" href="<?=base_url('consultas');?>">Consultas</a>
            <a class="dropdown-item" href="<?=base_url('especialidades')?>">Especialidades</a>
          </div>
          <li class="nav-item"><a href="<?=base_url('contato')?>" class="nav-link">Contato</a></li>
          <li class="nav-item dropdown">
        </ul>
      </header>
    </div>
  <!-- Barra de topo do site -->