<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * User75zs Controller
 *
 * @property \App\Model\Table\User75zsTable $User75zs
 * @method \App\Model\Entity\User75z[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class User75zsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $user75zs = $this->paginate($this->User75zs);

        $this->set(compact('user75zs'));
    }

    /**
     * View method
     *
     * @param string|null $id User75z id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user75z = $this->User75zs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user75z'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user75z = $this->User75zs->newEmptyEntity();
        if ($this->request->is('post')) {
            $user75z = $this->User75zs->patchEntity($user75z, $this->request->getData());
            if ($this->User75zs->save($user75z)) {
                $this->Flash->success(__('The user75z has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user75z could not be saved. Please, try again.'));
        }
        $this->set(compact('user75z'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User75z id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user75z = $this->User75zs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user75z = $this->User75zs->patchEntity($user75z, $this->request->getData());
            if ($this->User75zs->save($user75z)) {
                $this->Flash->success(__('The user75z has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user75z could not be saved. Please, try again.'));
        }
        $this->set(compact('user75z'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User75z id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user75z = $this->User75zs->get($id);
        if ($this->User75zs->delete($user75z)) {
            $this->Flash->success(__('The user75z has been deleted.'));
        } else {
            $this->Flash->error(__('The user75z could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



public function regasuser()
    {
        $user75z = $this->User75zs->newEmptyEntity();
        if ($this->request->is('post')) {
            $user75z = $this->User75zs->patchEntity($user75z, $this->request->getData());
            if ($this->User75zs->save($user75z)) {
                $this->Flash->success(__('The user75z has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
var_dump($user75z->getErrors());//
            $this->Flash->error(__('The user75z could not be saved. Please, try again.'));
        }
        $this->set(compact('user75z'));
    }



}
