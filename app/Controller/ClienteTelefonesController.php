<?php
App::uses('AppController', 'Controller');
/**
 * ClienteTelefones Controller
 *
 * @property ClienteTelefone $ClienteTelefone
 * @property PaginatorComponent $Paginator
 */
class ClienteTelefonesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClienteTelefone->recursive = 0;
		$this->set('clienteTelefones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClienteTelefone->exists($id)) {
			throw new NotFoundException(__('Invalid cliente telefone'));
		}
		$options = array('conditions' => array('ClienteTelefone.' . $this->ClienteTelefone->primaryKey => $id));
		$this->set('clienteTelefone', $this->ClienteTelefone->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClienteTelefone->create();
			if ($this->ClienteTelefone->save($this->request->data)) {
				$this->Flash->success(__('The cliente telefone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cliente telefone could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClienteTelefone->exists($id)) {
			throw new NotFoundException(__('Invalid cliente telefone'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClienteTelefone->save($this->request->data)) {
				$this->Flash->success(__('The cliente telefone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cliente telefone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClienteTelefone.' . $this->ClienteTelefone->primaryKey => $id));
			$this->request->data = $this->ClienteTelefone->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->ClienteTelefone->exists($id)) {
			throw new NotFoundException(__('Invalid cliente telefone'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ClienteTelefone->delete($id)) {
			$this->Flash->success(__('The cliente telefone has been deleted.'));
		} else {
			$this->Flash->error(__('The cliente telefone could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
