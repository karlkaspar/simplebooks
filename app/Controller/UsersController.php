 <?php
 /**
  * Controller for users model
  */
 class UsersController extends AppController {

  public $components = array('Session');

  public function index() {
    $users = $this->User->find('all');
    $this->set('users', $users);
  }

  public function add() {
    if($this->request->is('post')) {
      // DUMPS FORM DATA die(var_dump($this->request->data));
      $this->User->create();
      $this->User->save($this->request->data['Users']);
      if ($this->User->save($this->request->data['Users'])) {
        $this->log('Save success', 'debug');
        $this->redirect('index');
      } else {
        $this->log('Save error', 'debug');
      }
      if ($this->User->validationErrors) debug($this->User->validationErrors);
    }
  }

  public function remove() {
    // JUST FOR REFERENCE
  }

  public function edit() {
    // JUST FOR REFERENCE
  }
}
?>
