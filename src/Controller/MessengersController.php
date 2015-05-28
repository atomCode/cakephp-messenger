<?php
namespace Messenger\Controller;

use Messenger\Controller\AppController;

/**
 * Messenger Controller
 *
 */
class MessengerController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('Messenger', $this->paginate($this->Messenger));
        $this->set('_serialize', ['Messenger']);
    }

    /**
     * View method
     *
     * @param string|null $id Messenger id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $messenger = $this->Messenger->get($id, [
            'contain' => []
        ]);
        $this->set('Messenger', $messenger);
        $this->set('_serialize', ['Messenger']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $messenger = $this->Messenger->newEntity();
        if ($this->request->is('post')) {
            $messenger = $this->Messenger->patchEntity($messenger, $this->request->data);
            if ($this->Messenger->save($messenger)) {
                $this->Flash->success(__('The Messenger has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Messenger could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('Messenger'));
        $this->set('_serialize', ['Messenger']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Messenger id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $messenger = $this->Messenger->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $messenger = $this->Messenger->patchEntity($messenger, $this->request->data);
            if ($this->Messenger->save($messenger)) {
                $this->Flash->success(__('The Messenger has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Messenger could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('Messenger'));
        $this->set('_serialize', ['Messenger']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Messenger id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $messenger = $this->Messenger->get($id);
        if ($this->Messenger->delete($messenger)) {
            $this->Flash->success(__('The Messenger has been deleted.'));
        } else {
            $this->Flash->error(__('The Messenger could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
