<?php
App::uses('AppController', 'Controller');
/**
 * ClienteEnderecos Controller
 *
 * @property ClienteEndereco $ClienteEndereco
 * @property PaginatorComponent $Paginator
 */
class ClienteEnderecosController extends AppController {

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
		$this->ClienteEndereco->recursive = 0;
		$this->set('clienteEnderecos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClienteEndereco->exists($id)) {
			throw new NotFoundException(__('Invalid cliente endereco'));
		}
		$options = array('conditions' => array('ClienteEndereco.' . $this->ClienteEndereco->primaryKey => $id));
		$this->set('clienteEndereco', $this->ClienteEndereco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClienteEndereco->create();
			if ($this->ClienteEndereco->save($this->request->data)) {
				$this->Flash->success(__('The cliente endereco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cliente endereco could not be saved. Please, try again.'));
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
		if (!$this->ClienteEndereco->exists($id)) {
			throw new NotFoundException(__('Invalid cliente endereco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClienteEndereco->save($this->request->data)) {
				$this->Flash->success(__('The cliente endereco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cliente endereco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClienteEndereco.' . $this->ClienteEndereco->primaryKey => $id));
			$this->request->data = $this->ClienteEndereco->find('first', $options);
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
		if (!$this->ClienteEndereco->exists($id)) {
			throw new NotFoundException(__('Invalid cliente endereco'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ClienteEndereco->delete($id)) {
			$this->Flash->success(__('The cliente endereco has been deleted.'));
		} else {
			$this->Flash->error(__('The cliente endereco could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
