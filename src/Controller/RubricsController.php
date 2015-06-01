<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rubrics Controller
 *
 * @property \App\Model\Table\RubricsTable $Rubrics
 */
class RubricsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentRubrics', 'Blogs']
        ];
        $this->set('rubrics', $this->paginate($this->Rubrics));
        $this->set('_serialize', ['rubrics']);
    }

    /**
     * View method
     *
     * @param string|null $id Rubric id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rubric = $this->Rubrics->get($id, [
            'contain' => ['ParentRubrics', 'Blogs', 'Posts', 'ChildRubrics']
        ]);
        $this->set('rubric', $rubric);
        $this->set('_serialize', ['rubric']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rubric = $this->Rubrics->newEntity();
        if ($this->request->is('post')) {
            $rubric = $this->Rubrics->patchEntity($rubric, $this->request->data);
            if ($this->Rubrics->save($rubric)) {
                $this->Flash->success(__('The rubric has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rubric could not be saved. Please, try again.'));
            }
        }
        $parentRubrics = $this->Rubrics->ParentRubrics->find('list', ['limit' => 200]);
        $blogs = $this->Rubrics->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('rubric', 'parentRubrics', 'blogs'));
        $this->set('_serialize', ['rubric']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rubric id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rubric = $this->Rubrics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rubric = $this->Rubrics->patchEntity($rubric, $this->request->data);
            if ($this->Rubrics->save($rubric)) {
                $this->Flash->success(__('The rubric has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rubric could not be saved. Please, try again.'));
            }
        }
        $parentRubrics = $this->Rubrics->ParentRubrics->find('list', ['limit' => 200]);
        $blogs = $this->Rubrics->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('rubric', 'parentRubrics', 'blogs'));
        $this->set('_serialize', ['rubric']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rubric id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rubric = $this->Rubrics->get($id);
        if ($this->Rubrics->delete($rubric)) {
            $this->Flash->success(__('The rubric has been deleted.'));
        } else {
            $this->Flash->error(__('The rubric could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
