<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class DomainsController extends AppController
{
    public function index()
    {
        $this->set('domains', $this->paginate($this->Domains));
    }

    public function view($id = null)
    {
        $domain = $this->Domains->get($id, [
            'contain' => ['Blogs']
        ]);
        $this->set('domain', $domain);
    }

    public function add()
    {
        $domain = $this->Domains->newEntity();
        if ($this->request->is('post')) {
            $domain = $this->Domains->patchEntity($domain, $this->request->data);
            if ($this->Domains->save($domain)) {
                $this->Flash->success(__('The domain has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The domain could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('domain'));
    }

    public function edit($id = null)
    {
        $domain = $this->Domains->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $domain = $this->Domains->patchEntity($domain, $this->request->data);
            if ($this->Domains->save($domain)) {
                $this->Flash->success(__('The domain has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The domain could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('domain'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $domain = $this->Domains->get($id);
        if ($this->Domains->delete($domain)) {
            $this->Flash->success(__('The domain has been deleted.'));
        } else {
            $this->Flash->error(__('The domain could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
