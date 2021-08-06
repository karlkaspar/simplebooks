<header id="header">
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark" aria-label="Sixth navbar example">
    <div class="container-fluid">
      <div class="collapse navbar-collapse show" id="navbarsExample06">
        <ul class="navbar-nav flex-row me-auto mb-2 mb-xl-0">
          <li class="nav-item">
            <?php echo $this->HTML->link(AppController::translate('home'), array('controller'=>'pages','action'=>'display'), array('class' => 'nav-link active')); ?>
          </li>
          <li class="nav-item mx-3">
            <?php echo $this->HTML->link(AppController::translate('users'), array('controller'=>'users','action'=>'index'), array('class' => 'nav-link active')); ?>
          </li>
          <li class="nav-item ml-auto">
            <?php echo $this->Html->link('Est', array('controller'=> 'app' ,'action'=>'setLang', "et"), array('class' => 'nav-link')); ?>
          </li>
          <li class="nav-item ml-auto">
            <?php echo $this->Html->link('Eng',array('controller'=> 'app' ,'action'=>'setLang', "en"), array('class' => 'mx-3 nav-link')); ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
